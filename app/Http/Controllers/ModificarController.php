<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB as DB;
use App\Http\Requests;
use App\Form;
use App\Localidad;
use Validator;
use Session;
use PDF;


class ModificarController extends BaseController 
 
 {

      public function index()
    {

      $localidad = Localidad::all();
     // $horarios = Horario::where(['tipo'=>1])->get();

      return view('edita');
    }

    public function edita(Request $request)
    {
      $localidad = Localidad::all();
   
      date_default_timezone_set('America/Bogota');

      $post = $request->input();

      $id = $post['id'];


      $usuario = Form::with('localidades','horarioss')->where('cedula', $id)->first();   

      if (empty($usuario)) { return view('error',['error' => 'No existe este usuario'] ); exit(); }

    
      return view('edita', ['formulario' => $usuario,"localidades"=>$localidad]);

      exit();

      $view =  view('edita', ['formulario' => $usuario , "localidades"=>$localidad])->render();

      /*$pdf = PDF::loadHTML($view);

      return $pdf->setPaper('a5', 'portrait')->stream(' Comprobante de Inscripción'.date('  F Y'));   */  

    }

    public function modificar(Request $request){

        $formulario = Form::find($request->id);
        $formulario->nombre_acudiente = $request->nombre_acudiente;
        $formulario->cedula_acudiente = $request->cedula_acudiente;
        $formulario->ocupacion = $request->ocupacion;
        $formulario->mail = $request->mail;
        $formulario->direccion = $request->direccion;
        $formulario->telefono = $request->telefono;
        $formulario->localidad = $request->localidad;
        $formulario->nombre_nino = $request->nombre_nino;
        $formulario->apellido_nino = $request->apellido_nino;
        $formulario->cedula = $request->cedula;
        $formulario->genero = $request->genero;
        $formulario->fecha_nacimiento = $request->fecha_nacimiento;
        $formulario->edad = $request->edad;
        $formulario->direccion_nino = $request->direccion_nino;
        $formulario->telefono_nino = $request->telefono_nino;
        $formulario->eps = $request->eps;
        $formulario->institucion = $request->institucion;
        $formulario->sector_colegio = $request->sector_colegio;
        $formulario->curso = $request->curso;
        $formulario->horario = $request->horario;
        $formulario->ciclo = $request->ciclo;
        $formulario->save();

        return view('antiguo', ['formulario' => $formulario]);
    }




}