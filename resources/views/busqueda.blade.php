@extends('master')                              



@section('content') 

 <link rel="stylesheet" type="text/css" href="public/Css/form.css">

         <section id="page2">

    	<div class="panel panel-default">

  	<div class="panel-heading">

  	<center><font size="5" face="Comic Sans MS,arial,verdana"><h3>PRE-INSCRIPCIÓN CURSOS DE NATACIÓN ALUMNOS ANTIGUOS</h3></font></center>

  	</div>
  	<div class="panel-body"> 

  	<center><p style="font-size: 14pt;">ALUMNOS ANTIGUOS</strong></p></center>



  	<p style="line-height: 27px; font-size: 11pt" align="justify">Padre, Madre o Acudiente de la escuela de natación CABS-IDRD, este link ha sido habilitado para que  usted realice la pre-inscripción de su niño(a) para la vigencia 2018, recuerde que el sistema solo permite la validación de los datos de los alumnos que finalizaron el ciclo 7-2017, en la caja de texto digite el número de identidad del niño(a) sin puntos o espacios y presione el botón descargar, recuerde que este proceso es solo el primer momento(Pre-inscripción) para hacer la inscripción, para el segundo momento (formalizar la inscripción) deberá imprimir el formulario actualizado y dirigirse a la coordinación de la escuela de natación CASB - IDRD  en las fechas que se programen en el año 2018 y radicar la documentación exigida.</p> 

    <p style="line-height: 27px; font-size: 11pt" align="justify"><strong>Nota:</strong> Recuerde que este proceso es solo para alumnos antiguos, alumnos nuevos deben estar atentos a las fechas que se publicarán a mediados de enero 2018.</p>   

  	<br>                    

    <form action="edita" method="POST"> 

		<fieldset class="form-group">

			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Número de documento del niño(a)</label>

			<input title="Se nesesita el codigo" required type="number" class="form-control" id="id" name="id" >

		</fieldset>

		<fieldset class="form-group">

	

			<input type="submit" class="btn btn-success" value="Descargar">

		</fieldset>

				

	</section>

      

       

@stop

