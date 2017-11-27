@extends('master')                              



@section('content') 

 <link rel="stylesheet" type="text/css" href="public/Css/form.css">

         <section id="page2">

    	<div class="panel panel-default">

  	<div class="panel-heading">

  	<center><font size="5" face="Comic Sans MS,arial,verdana"><h3>GRACIAS POR SU COLABORACIÓN </h3></font></center>

  	</div>
  	<div class="panel-body"> 

  	<center><p style="font-size: 14pt;">LA PRE-INSCRIPCIÓN Y ACTUALIZACIÓN DEL NADADOR(A) <font size="5" color="#00ade6"<strong>{{$formulario->nombre_nino}}&nbsp;{{$formulario->apellido_nino}}</strong></font> FUE ACEPTADA</strong></p></center>

    
    <br>
  	<p style="line-height: 27px; font-size: 11pt" align="justify"><strong>RECUERDE:</strong> <br> - Imprimir el Formulario de Pre-inscripción, ingresando nuevamente a esta página.<br>
    - Estar atento a las fechas de formalización de la Inscripcion en el 2018 (entrega de pago y documentos actualizados)<br> 
    - Realizar la siguiente encuesta en Pro de los procesos de mejora continua de la Escuela del CASB - IDRD: <br><a href="https://docs.google.com/forms/d/e/1FAIpQLSeVCizl0w3UrybljG5x4cw7N9kyU4U6FDjpoOWC6G7TloUcbg/viewform" >ENCUESTA DE SATISFACCIÓN ESCUELA CASB - IDRD</a></p> 

    <p style="line-height: 27px; font-size: 11pt" align="justify"><strong>Nota:</strong> Recuerde que este proceso es solo para alumnos antiguos que fianlizaron el ciclo 7-2017 o realizaron los procesos de aplazamiento en las fechas indicadas, Los Alumnos Nuevos deben estar atentos a las fechas que se publicarán a mediados de enero 2018 para realizar los dos momentos.</p>   

  	<br>   


    <!--<form action="edita" method="POST"> 

		<fieldset class="form-group">

			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Número de documento del niño(a)</label>

			<input title="Se nesesita el codigo" required type="number" class="form-control" id="id" name="id" >

		</fieldset>

		<fieldset class="form-group">

	

			<input type="submit" class="btn btn-success" value="Descargar">

		</fieldset>-->

				

	</section>

      

       

@stop

