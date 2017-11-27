   @extends('master')

@section('content')

<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<div class="panel panel-default">

   <form method="POST" action="modificar" id="form_gen" enctype="multipart/form-data">
  <input required type="hidden" class="form-control" id="id" name="id" value="{{$formulario->id}}">
      <div class="panel-body">

         <p align="center" style="font-size: 20px">FORMULARIO DE ACTUALIZACIÓN Y PRE-INSCRIPCIÓN ALUMNOS ANTIGUOS</p>

         

         <p align="center"><font size="3"color="#1995dc">Pre-Inscripciones desde el día 27 de Noviembre desde las 2.00 p.m. hasta el 11 de Diciembre a las 5:00 p.m</font></p><br>

         <p style="line-height: 27px; font-size: 11pt" align="justify">Este Primer momento o tramite se realiza a través de este medio electrónico, para el segundo momento o Formalización de la Inscripción (entrega de pago y documentos actualizados) debe dirigirse a la oficina de coordinación del Complejo Acuático Simón Bolivar, la fecha para ésto en el año 2018  se informara por este medio y se publicara en la pagina, si no cumple con los tiempos aquí mencionados se perdera el cupo adquirido en la Escuela. <strong>si NO realiza la entrega de documentos y consignación o pago en las fechas que se programen </strong> se anulara la Pre-Inscripción y deberá realizarla nuevamente como Alumno Nuevo en las fechas programadas para ellos.</p><br>

         <p style="line-height: 27px; font-size: 11pt" align="justify"><strong>IMPORTANTE:</strong> Tenga en cuenta que solo debe realizar el pago (consignación) del curso cuando sean informadas las fechas para el segundo momento <strong>(el sistema automáticamente le informa de la Aceptación y actualización de la Pre-inscripción al finalizar este proceso)</strong> solo debe realizar esta etapa una sola y única vez, durante el proceso del primer ciclo, con el objeto de evitar duplicidad en la información y de esta forma excluir de un cupo a otro usuario interesado. </p>

        <p style="line-height: 27px; font-size: 11pt" align="justify"><strong>Nota:</strong> A continuación usted podrá consultar los datos del niño(a) y del acudiente que sean necesarios de modificación o actualización.</p> 
         

         <br>
 
         <!-- nuevo formulario-->

         <div class="panel panel-default">

            <div class="panel-heading"><font size="3"color="#1995dc">INFORMACIÓN DEL ACUDIENTE O REPRESENTANTE LEGAL</font></div>

            <div class="panel-body">

               <div class="row">

                  <div class="col-xs-6">

                     <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombre Completo </label>

                     <input required type="text" class="form-control" id="nombre_acudiente" name="nombre_acudiente" onkeyup="javascript:this.value=this.value.toUpperCase();"  value="{{$formulario->nombre_acudiente}}">

                  </div>

                  

                  <div class="col-xs-6">

                     <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Documento de Identidad </label>

                     <input title="Se necesita una cedula" required type="number" class="form-control" id="cedula_acudiente" name="cedula_acudiente" value="{{$formulario->cedula_acudiente}}"><br>

                  </div>

                  

                  <div class="col-xs-6">

                     <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Ocupación </label>

                     <input required type="text" class="form-control" id="ocupacion" name="ocupacion" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$formulario->ocupacion}}" >

                  </div>

                  <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Correo Electrónico</label>

                  <input required type="mail" class="form-control" id="mail" name="mail" value="{{$formulario->mail}}"><br>

               </div>

               

               <div class="col-xs-6">

                  <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Dirección de residencia </label>

                  <input required type="text" class="form-control" id="direccion" name="direccion" value="{{$formulario->direccion}}">

               </div>

               <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Teléfono </label>

               <input required type="number" class="form-control" id="telefono" name="telefono" value="{{$formulario->telefono}}"><br>

            </div>

            

            <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Localidad </label></div>

            <div class="col-xs-6">&nbsp;</div>

            <div class="col-xs-6">

               <select  required name="localidad" id="localidad" class="form-control" data-value="{{$formulario->localidad}}" >

                  <option value="">Seleccione</option>

                  @foreach ($localidades as $localidad)

                  <option value="{{ $localidad->id_localidad }}">{{ $localidad->localidad}}</option>

                  @endforeach

               </select>


            </div>

            <div class="col-xs-6">&nbsp;<br></div>

         </div>

      </div>

   </div>

   <div class="panel panel-default">

      <div class="panel-heading">

         <h3 class="panel-title"><font size="3"color="#1995dc">INFORMACIÓN DEL NIÑO</font></h3>

      </div>

      <div class="panel-body">

         <div class="row">

            <div class="col-xs-6">

               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombres Completos </label>

               <input required type="text" class="form-control" id="nombre_nino" name="nombre_nino" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$formulario->nombre_nino}}">

            </div>

            <div class="col-xs-6">

               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Apellidos Completos</label>

               <input required type="text" class="form-control" id="apellido_nino" name="apellido_nino" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$formulario->apellido_nino}}"><br>

            </div>

            

            <div class="col-xs-6">

               <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento de Identificación </label>

               <input required type="text" class="form-control" id="cedula" name="cedula" value="{{$formulario->cedula}}" readonly="readonly">

            </div>

            <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Género</label>

            <select name="genero" id="genero" class="form-control" data-value="{{$formulario->genero}}">

               <option value="">Seleccione</option>

               <option value="Masculino">Masculino</option>

               <option value="Femenino">Femenino</option>

            </select> <br>

         </div>

         <div class="col-xs-6">

            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Fecha de nacimiento </label>

            <input required type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{$formulario->fecha_nacimiento}}">

         </div>

         <div class="col-xs-6">

            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Edad cumplida</label>

            <input required type="text" class="form-control" id="edad" name="edad" value="{{$formulario->edad}}"><br>

         </div>

         

         <div class="col-xs-6">

            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Dirección de residencia </label>

            <input required type="text" class="form-control" id="direccion_nino" name="direccion_nino" value="{{$formulario->direccion_nino}}   " >

         </div>

         <div class="col-xs-6">

            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Teléfono residencia </label>

            <input required type="number" class="form-control" id="telefono_nino" name="telefono_nino" value="{{$formulario->telefono_nino}}" ><br>

         </div>

         

         <div class="col-xs-6">

            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">EPS </label>

            <input required type="text" class="form-control" id="eps" name="eps" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$formulario->eps}}">

         </div>

         <div class="col-xs-6">

            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Institución Educativa</label>

            <input required type="text" class="form-control" id="institucion" name="institucion" onkeyup="javascript:this.value=this.value.toUpperCase();"  value="{{$formulario->institucion}}"><br>

         </div>

         

         <div class="col-xs-6">

            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Sector del colegio </label>

            <select name="sector_colegio" id="sector_colegio" class="form-control" data-value="{{$formulario->sector_colegio}}">

               <option value="">Seleccione</option>

               <option value="Público">Público</option>

               <option value="Privado">Privado</option>

            </select>

         </div>

         <div class="col-xs-6">

            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput"><font color="#1995dc"><u>HORARIO DEL CURSO</u> </font></label>
            <input required type="hidden" class="form-control" id="horario" name="horario" value="{{$formulario->horario}}" readonly="readonly">
             <input required type="text" class="form-control" id="" name="" value="{{$formulario->horarioss->horarios}}" readonly="readonly"><br>
         </div>

         <div class="col-xs-6">

            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Ha tomado clases o cursos de Natación</label>

           <input required type="text" class="form-control" id="curso" name="curso" value="{{$formulario->curso}}" readonly="readonly">

            <br>

         </div>

         

         

         <div class="col-xs-6">&nbsp;</div>

         

         <!--<div class="col-xs-6"><label > si selecciona <font color="#1995dc" size="3">SI</font> se realizará evaluación de Habilidades en el agua, y se ubicara en el mismo horario u otro disponible según resultado y cupos para el nivel evaluado</label></div>-->

      </div>

      <!-- ciclo del curso-->

      <div class="col-xs-6"><input type="hidden" name="ciclo" id="ciclo" value="1-2018"></div>

   </div>

</div>

<br>

<p style="line-height: 22px; font-size: 11pt;color:#1995dc" align="justify">* Recuerde que el horario <strong>NO PUEDE SER MODIFICADO,</strong> teniendo en cuenta la programación establecida por el IDRD y la cantidad de cupos habilitados por horario, ya que estos son limitados con el fin de ofrecer un buen servicio en el desarrollo técnico de la escuela deportiva.</p>

<p style="line-height: 20px; font-size: 11pt; color:#1995dc"" align="justify">Todos los campos son obligatorios y Recuerde que al Finalizar este proceso y ENVIAR LOS DATOS DE INSCRIPCIÓN el sistema le informa automáticamente si su pre-inscripción fue actualizada.</strong> </p>

</fieldset>

<div class="freebirdFormviewerViewFormContent ">

<div class="freebirdFormviewerViewHeaderHeader">

   <div class="freebirdFormviewerViewHeaderTitleRow">

      <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div>

   </div>

   <div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div>

</div>

<div class="freebirdFormviewerViewItemList" role="list">

   <div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading">

      <div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner">

         <div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div>

      </div>

   </div>

   <div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div>

   <div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881">

      <div class="freebirdFormviewerViewItemsItemItemheader">

         <div class="freebirdFormviewerViewItemsItemItemTitleContainer">

            <div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*</span><br><br><br><br><br></div>

            <div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto">He leído el reglamento y los requisitos por lo tanto acepto términos y condiciones de la ESCUELA DE NATACIÓN DEL COMPLEJO ACUÁTICO SIMÓN BOLÍVAR - IDRD </div>

         </div>

      </div>

      <div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class="">

         <div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto">

            <div class="freebirdFormviewerViewItemsCheckboxChoice">

               <label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer">

                  <div class="exportLabelWrapper">

                     <input type="checkbox" required style="float: left;

                     margin: 0px;" name="acepto" id="acepto">

                     <div class="docssharedWizToggleLabeledContent">

                        <div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div>

                     </div>

                  </div>

               </label>

            </div>

            <input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden">

         </div>

      </div>

      <div id="i.req.131124881" class="screenreaderOnly"></div>

      <div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div>

   </div>

</div>

<div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681">

   <div class="freebirdFormviewerViewNavigationButtonsAndProgress">

   

      <div class="freebirdFormviewerViewNavigationButtons">





         <input class="enviar" type="submit" value="Enviar">

      </div>

     

   </div>

   <div class="freebirdFormviewerViewNavigationPasswordWarning">.</div>

</div>

</form>

<script type="text/javascript" src="public/Js/form2.js" ></script>

</div>

@stop