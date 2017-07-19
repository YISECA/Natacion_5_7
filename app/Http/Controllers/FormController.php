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
use Mail;



class FormController extends BaseController

{
    var $url;

      public function index()
    {

      $localidad = Localidad::all();
      $horarios = Horario::all();

      return view('form',["localidades"=>$localidad, "horarioss"=>$horarios]);
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

      $acceso = Form::whereYear('created_at', '=', date('Y'))->get(); 

      $tabla='<table id="lista">

        <thead>
           <tr>
             <th style="text-transform: capitalize;">id</th>
             <th style="text-transform: capitalize;">cedula</th>
             <th style="text-transform: capitalize;">tipo_documento</th>
             <th style="text-transform: capitalize;">primer_nombre</th>
             <th style="text-transform: capitalize;">segundo_nombre</th>
             <th style="text-transform: capitalize;">primer_apellido</th>
             <th style="text-transform: capitalize;">segundo_apellido</th>
             <th style="text-transform: capitalize;">genero</th>
             <th style="text-transform: capitalize;">fecha_nacimiento</th>
             <th style="text-transform: capitalize;">mail</th>
             <th style="text-transform: capitalize;">celular</th>
             <th style="text-transform: capitalize;">eps</th>          
          </tr>
        </thead>
        <tbody id="tabla">';

      foreach ($acceso as $key => $value)
      {

       $tabla.='<tr><td>'.$value->id.'</td>';
       $tabla.='<td>'.$value->cedula.'</td>';
       $tabla.='<td>'.$value->tipo_documento.'</td>';
       $tabla.='<td>'.$value->primer_nombre.'</td>';
       $tabla.='<td>'.$value->segundo_nombre.'</td>';
       $tabla.='<td>'.$value->primer_apellido.'</td>';
       $tabla.='<td>'.$value->segundo_apellido.'</td>';
       $tabla.='<td>'.$value->genero.'</td>';
       $tabla.='<td>'.$value->fecha_nacimiento.'</td>';
       $tabla.='<td>'.$value->mail.'</td>';
       $tabla.='<td>'.$value->celular.'</td>';
       $tabla.='<td>'.$value->eps.'</td></tr>';
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

     if($this->inscritos()<=800)

     {

        $formulario = $this->store($formulario, $request);

        //$this->store($formulario, $request->input());
        
        Mail::send('email', ['user' => $request->input('mail'),'formulario' => $formulario], function ($m) use ($request) 
        {
            $m->from('no-reply@idrd.gov.co', 'Registro Exitoso a la Ecotravesía Cerros Orientales');
            $m->to($request->input('mail'), $request->input('primer_nombre'))->subject('Registro Exitoso a la Ecotravesía cerros orientales!');
        });

      }else{
        return view('error', ['error' => 'Lo sentimos el limite de inscritos fue superado!']);
      }
          return view('error', ['error' => 'SU PRE-INSCRIPCION FUE ACEPTADA Recuerde Imprimir el comprobante de Pre-Inscripción y Formalizar la Inscripción (entrega de pago y documentos) del niño o niña en la Coordinación de la Escuela del CASB-IDRD el 20, 21 o 22 de junio']);
    }


    //fin insertar
   
// conteo de la tabla

    private function inscritos(){

      $cant = Form::count('id');

      return $cant+1;

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
        $formulario['nivel_curso'] = $input['nivel_curso'];
        $formulario->save();

        return $formulario;

        

    }

}
