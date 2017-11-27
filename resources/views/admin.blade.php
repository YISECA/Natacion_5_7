@extends('master')                              



@section('content') 

        
<!--<div class="container-fluid">

	

		<div class="row">

		<div class="col-md-12" id="div-tabla" >

		

		</div>

	</div>

	

</div> -->
<form name="resultados" id="resultados">
   <ul id="myTab" class="nav nav-tabs">
      <li class="active"><a href="#inicio" data-toggle="tab">Consulta Inscritos Ciclo - 6</a></li>
      <li><a href="#perfil" data-toggle="tab">Consulta General Inscritos 2017</a></li>
         <!--<li><a href="#mensajes" data-toggle="tab">Mensajes</a></li>-->
   </ul>
   
   <div id="myTabContent" class="tab-content">
     <div class="tab-pane fade in active" id="inicio">
            <p> <div class="col-md-12" id="div-tabla" ></div> </p>
     </div>
     <div class="tab-pane fade" id="perfil">
         <p> <div class="col-md-12" id="div-tabla1" ></div></p>
     </div>
     <!--<div class="tab-pane fade" id="mensajes">
          <p> <-- Párrafo de contenido de texto  </p>
     </div>-->
   </div> 
</div>
</form>


<script type="text/javascript" src="public/Js/admin.js" ></script>   
<link rel="stylesheet" href="{{ asset('public/Css/admin.css') }}" media="screen"> 



       

@stop

