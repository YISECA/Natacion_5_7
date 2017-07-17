@extends('master')                              

@section('content')         

<link rel="stylesheet" type="text/css" href="public/Css/form.css">

<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">

<section id="page1">

    <div class="panel panel-default">

        <div class="panel-heading">Inicio</div>

        <div class="panel-body">

            <div class="freebirdFormviewerViewFormContent ">

                <div class="freebirdFormviewerViewHeaderHeader">

                    <div class="freebirdFormviewerViewHeaderTitleRow">

                        <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"><h3> PARQUE NACIONAL – PICO DEL AGUILA Domingo 16 de julio de 2017</h3></div>

                    </div>
<br>
                    <div class="stage">

                        <div id="SLDR-ONE" class="sldr">

                            <ul class="wrp animate">

                                <li class="elmnt-one">                                 

                                        <div class="wrap"><img src="public/Img/pico.jpg"  height="400">

                                        </div>                                   
                                </li>

                               <li class="elmnt-two">
                                    
                                        <div class="wrap"><img src="public/Img/pico1.jpg"  height="400">

                                        </div>                                 
                                </li>

                                 <li class="elmnt-three">
                                    
                                        <div class="wrap"><img src="public/Img/pico2.jpg"  height="400">

                                        </div>                                 
                                </li>
                                 

                            </ul>

                        </div>

                        <div class="clear"></div>

                        <ul class="selectors">

                            <li class="focalPoint"><a href="">•</a></li>

                            <li><a href="">•</a></li>

                            <li><a href="">•</a></li>            
                         
                        </ul>

                    </div>

                    <script src="public/Js/jquery.sldr.js"></script>

                    <div class="freebirdFormviewerViewHeaderDescription" dir="auto">

                        <h2>Ubicación</h2>

                        <p align="justify" style="font-size: 11pt; line-height: 25px">El parque Nacional Enrique Olaya Herrera está ubicado en la localidad de Santa Fe, cuenta con tres sectores: Sector cultural, Sector deportivo y recreativo y la parte alta de montaña donde se encuentran varios senderos subiendo por carabineros tanques del silencio y llegando a pico del águila.</p>

                        <h2>Descripción del recorrido </h2>

                        <p align="justify" style="font-size: 11pt; line-height: 25px">El recorrido da inicio en la torre del reloj del parque Nacional, donde el Guía de caminatas hace un calentamiento previo y socializa las indicaciones para el recorrido. Continúa por la parte alta del subiendo por carabineros tanques del silencio y llegando a pico del águila; Pasando por excelentes miradores y disfrutando de toda una reserva de vida de nuestra ciudad.</p>

                        <!--<h2>Durante el recorrido se visitaran los siguientes atractivos:</h2>-->
                        <!--<ul class="ul_inicio">
                            <font style="font-size: 11pt; line-height: 25px;">
                            <li>Barrio el triunfo </li>
                            <li>Administración del parque </li>
                            <li>Parque de la tierra </li>
                            <li>Humedales artificiales </li>
                            <li>Centro de amistad con tierra  (C.A.T)</li>
                            <li>Alto de la cruz </li>
                            <li>Mirador del relleno sanitario de Doña Juana </li>
                            <li>Refugio</li>
                            <li>Mirador de juan Rey </li>
                            </font>
                        </ul>-->
                        <br>

                        <font size="4"><center><table width="1000">

                            <col width="281">

                                <col width="282">

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Punto de encuentro</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Torre del Reloj parque Nacional</p>

                                        </td>

                                    </tr>
                              
                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Fecha</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Domingo 16 de julio de 2017</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Hora de encuentro</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>8:00 a.m</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Cupo Máximo</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>40 Personsa</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Rango de Edad</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>12 - 60 años</p>

                                        </td>

                                    </tr>



                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Altitud</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Hasta 3.200  m.s.n.m</td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Temperatura</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>14°</p>

                                        </td>

                                    </tr>
                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Nivel</p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p> Medio</p>

                                        </td>

                                    </tr>
                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Tiempo de recorrido</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>5 horas</p>

                                        </td>

                                    </tr>
                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Acceso </p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Por la Cra. 7° y Cra. 5 con calles 39 y 36.</p>

                                        </td>

                                    </tr>
                                
                                         <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            <p>Al finalizar</p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">

                                            El recorrido termina en mismo punto del la torre del reloj del parque nacional. 

                                        </td>

                                    </tr>
                                     
                                     

                        </table></center></font>

                        <h2>Recomendaciones</h2>

                        <ul class="ul_inicio">

                            <font  style="font-size: 11pt; line-height: 25px">

                                <li>Llevar ropa cómoda</li>
                            
                                <li>Llevar bloqueador solar</li>

                                <li>Hidratación</li>

                                <li>Calzado cómodo</li>

                                <li>Llevar carné de la eps</li>

                                <li>Refrigerio.</li>

                                <li>Medicamentos personales </li>

                                <li>No llevar mascotas </li>

                                <li>Abstenerse de participar mujeres en estado de embarazo, personas que tengan problemas cardiacos y de rodillas y que sufran de asma y/o vértigo</li>

                                <li><ins>Abstenerse de asistir si no se encuentra inscrito</ins></li>

                                <!--<li><strong>Llevar la tarjeta de tu llave cargada, se debe regresar en el SITP</strong></li>-->
                            </font>

                            <br>

                        </ul> <a class="btn btn-info" href="registro">Registrarse</a> </div>

                </div>

            </div>

        </div>

</section>

@stop