@extends('master')                              



@section('content') 

 <link rel="stylesheet" type="text/css" href="public/Css/form.css">

         <section id="page2">

    	<div class="panel panel-default">

  	<div class="panel-heading">

  	<center><font size="5" face="Comic Sans MS,arial,verdana"><h3>PRE-INSCRIPCIÓN CURSOS DE NATACIÓN ALUMNOS NUEVOS</h3></font></center>

  	</div>

  	

  	<div class="panel-body"> 

  	<center><p style="font-size: 14pt;">ALUMNOS  NUEVOS</strong></p></center>



  	<p style="line-height: 27px; font-size: 11pt" align="justify">Padre, Madre o Acudiente, si usted realizó la pre-inscripción del niño(a) por favor compruebe el número de registro asignado ingresando el número de identidad del mismo tal cual como lo hizo en el registro y presione en botón descargar, recuerde que este proceso es solo para los niños(a) que realizaron el primer momento(Pre-inscripción) en las fechas programadas. Para formalizar la inscripción deberá imprimir el formulario y dirigirse a la coordinación de la escuela de natación CASB - IDRD  los días 19 o 20 de septiembre de 2017 en los horarios de 8:00-12:00 m y 2:00 - 4:00 pm y radicar la documentación exigida.</p>   

  	<br>                    

    <form action="carnet" method="POST"> 

		<fieldset class="form-group">

			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Número de documento del niño</label>

			<input title="Se nesesita el codigo" required type="number" class="form-control" id="id" name="id" >

		</fieldset>

		<fieldset class="form-group">

	

			<input type="submit" class="btn btn-success" value="Descargar">

		</fieldset>

				

	</section>

      

       

@stop

