<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB as DB;
use Redirect;
use Validator;
use Session;
use App\Form;
use Idrd\Usuarios\Repo\Acceso;
use App\Localidad;
use App\Horario;
use App\Cupo;
use Mail;



class FormController extends BaseController

{
    var $url;

      public function index()
    {

      $localidad = Localidad::all();
      $horarios = Horario::where(['tipo'=>1])->get();

      return view('form',["localidades"=>$localidad, "horarioss"=>$horarios]);
    }

      public function index_b()
    {

      $localidad = Localidad::all();
      $horarios = Horario::where(['tipo'=>2])->get();

      return view('form2',["localidades"=>$localidad, "horarioss"=>$horarios]);
    }

    private function cifrar($M)

    {   

      $C="";
      $k = 18; 
      for($i=0; $i<strlen($M); $i++)$C.=chr((ord($M[$i])+$k)%255);
      return $C;
    }

    private function decifrar($C)
    {   

      $M="";
      $k = 18;
      for($i=0; $i<strlen($C); $i++)$M.=chr((ord($C[$i])-$k+255)%255);
      return $M;
    }



    public function listar_datos()
    {

      /*$acceso = Form::where('ciclo','=',"CURSO_5")->whereYear('created_at', '=', date('Y'))->get(); */
     $acceso = Form::where('ciclo',5)->whereYear('created_at', '=', date('Y'))->get();


       $tabla='<table id="lista">
<center><h3><font size="5" face="Comic Sans MS,arial,verdana"> CONSULTA NIÑOS PRE-INSCRITOS AL CURSO DE NATACIÓN TODAS LAS EDADES EN EL CICLO 5 -2017</font></h3></center><br>
<h4>total de niños inscritos: '.$acceso->count().'</h4><br>
        <thead>
           <tr>
             <th style="text-transform: capitalize;">Código</th>
             <th style="text-transform: capitalize;">Horario de inscripción</th>
             <th style="text-transform: capitalize;">Nombre del niño(a)</th>
             <th style="text-transform: capitalize;">Edad</th>
             <th style="text-transform: capitalize;">Género</th>
             <th style="text-transform: capitalize;">Documento</th>
             <th style="text-transform: capitalize;">Dirección</th>
             <th style="text-transform: capitalize;">Eps</th>
             <th style="text-transform: capitalize;">Nombre del acudiente</th>
             <th style="text-transform: capitalize;">Teléfonos</th>
             <th style="text-transform: capitalize;">Mail</th>
             <th style="text-transform: capitalize;">Fecha de nacimiento</th>
             <th style="text-transform: capitalize;">Documento del acudiente</th>
             <th style="text-transform: capitalize;">Ocupación del acudiente</th>
             <th style="text-transform: capitalize;">Localidad</th>
             <th style="text-transform: capitalize;">Colegio</th>
             <th style="text-transform: capitalize;">Sector del Colegio</th>
             <th style="text-transform: capitalize;">¿Clases o cursos?</th>          
            </tr>
        </thead>

        <tbody id="tabla">';

      foreach ($acceso as $key => $value)
      {

       $tabla.='<tr><td>'.$value->id.'</td>';
       $tabla.='<td>'.$value->horarioss['horarios'].'</td>';
       $tabla.='<td>'.$value->nombre_nino.' '.$value->apellido_nino.'</td>';
       $tabla.='<td>'.$value->edad.' años</td>';
       $tabla.='<td>'.$value->genero.'</td>';
       $tabla.='<td>'.$value->cedula.'</td>';
       $tabla.='<td>'.$value->direccion_nino.'</td>';
       $tabla.='<td>'.$value->eps.'</td>';
       $tabla.='<td>'.$value->nombre_acudiente.'</td>';
       $tabla.='<td>'.$value->telefono.' - '.$value->telefono_nino.'</td>';
       $tabla.='<td>'.$value->mail.'</td>';
       $tabla.='<td>'.$value->fecha_nacimiento.'</td>';
       $tabla.='<td>'.$value->cedula_acudiente.'</td>';
       $tabla.='<td>'.$value->ocupacion.'</td>';
       $tabla.='<td>'.$value->localidades['localidad'].'</td>';
       $tabla.='<td>'.$value->institucion.'</td>';
       $tabla.='<td>'.$value->sector_colegio.'</td>';
       $tabla.='<td>'.$value->curso.'</td></tr>';
      }

      $tabla.='</tbody></table>';
      echo $tabla;
    }

  
    public function logear(Request $request)
    {

      $usuario = $request->input('usuario');
      $pass = $request->input('pass');
      $acceso = Acceso::where('Usuario',$usuario)->where('Contrasena', sha1($this->cifrar($pass)) )->first();

      if (empty($usuario)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
      if (empty($acceso)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
       
       session_start() ;
       $_SESSION['id_usuario'] = json_encode($acceso);

      return view('admin'); exit(); 
    }


//insertar

public function insertar(Request $request)

    {

     $post = $request->input();
     $usuario = Form::where('cedula', $request->input('cedula'))->first(); 
     if (!empty($usuario)) { return view('error',['error' => 'Este usuario ya fue registrado!'] ); exit(); 
    }
     $formulario = new Form([]);

      //envio de correo

     if($this->inscritos($request))

     {

        $formulario = $this->store($formulario, $request);

        //$this->store($formulario, $request->input());
        
        Mail::send('email', ['user' => $request->input('mail'),'formulario' => $formulario], function ($m) use ($request) 
        {
            $m->from('no-reply@idrd.gov.co', 'Pre-inscripción aceptada al curso de natación en el complejo acuático Simón Bolivar ');
            $m->to($request->input('mail'), $request->input('primer_nombre'))->subject('Pre-inscripción aceptada al curso de natación en el complejo acuático Simón Bolivar');
        });

      }else{
        return view('error', ['error' => 'Lo sentimos ya NO hay cupos en este horario!']);
      }
          return view('error', ['error' => 'SU PRE-INSCRIPCIÓN FUE ACEPTADA Recuerde Imprimir el comprobante de Pre-Inscripción (Descargar Formato de Pre-Inscripción) y Formalizar la Inscripción (entrega de pago y documentos) del niño o niña en la Coordinación de la Escuela del CASB-IDRD el 20, 21 o 22 de junio']);
    }


    //fin insertar
   
// conteo de la tabla

    private function inscritos($request)
    {


      $cupo = Cupo::where(['id_horario' => $request['horario'],'id_ciclo'=> $request['ciclo'] ])->first()['cupo'];
      $cant = Form::where(['horario' => $request['horario'],'ciclo'=> $request['ciclo'] ])->count('id');

      if($cant>=$cupo){return false;}
      if($cant<$cupo){return true;}

    }

    private function store($formulario, $input)

    {
        $formulario['nombre_acudiente'] = $input['nombre_acudiente'];
        $formulario['cedula_acudiente'] = $input['cedula_acudiente'];
        $formulario['ocupacion'] = $input['ocupacion'];
        $formulario['mail'] = $input['mail'];
        $formulario['direccion'] = $input['direccion'];
        $formulario['telefono'] = $input['telefono'];
        $formulario['localidad'] = $input['localidad'];
        $formulario['nombre_nino'] = $input['nombre_nino'];
        $formulario['apellido_nino'] = $input['apellido_nino'];
        $formulario['cedula'] = $input['cedula'];
        $formulario['genero'] = $input['genero'];
        $formulario['fecha_nacimiento'] = $input['fecha_nacimiento'];
        $formulario['edad'] = $input['edad'];
        $formulario['direccion_nino'] = $input['direccion_nino'];
        $formulario['telefono_nino'] = $input['telefono_nino'];
        $formulario['eps'] = $input['eps'];
        $formulario['institucion'] = $input['institucion'];
        $formulario['sector_colegio'] = $input['sector_colegio'];
        $formulario['curso'] = $input['curso'];
        $formulario['horario'] = $input['horario'];
        $formulario['ciclo'] = $input['ciclo'];
        $formulario->save();

        return $formulario;

        

    }

}
