@extends('master')

@section('content')

<link rel="stylesheet" type="text/css" href="public/Css/form.css">

<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">





<section id="page1">

    <div class="panel panel-default">





<div class="container">



<!--información actual-->

        <div class="panel-body">

            <div class="freebirdFormviewerViewFormContent ">

                <div class="freebirdFormviewerViewHeaderHeader">

                    <div class="freebirdFormviewerViewHeaderTitleRow">

                        

                        <script src="public/Js/jquery.sldr.js"></script>

                        <div class="freebirdFormviewerViewHeaderDescription" dir="auto">

                        <!--<div align="right"><a class="btn btn-info" href="registro" style="font-size: 15pt;">Registrar Niños de 5 a 7 años</a></div>-->

                            

          <!-- prueba alcordeon-->

          

            <div class="accordion">

            <dl>

              <dt>

                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">REGLAMENTACIÓN</a>

              </dt>

              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">

                  <p style="line-height: 20px; font-size: 11pt" align="justify">Los nadadores, padres, Instructores, Salvavidas tienen la responsabilidad de: </p>

                            <ol>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Prohibición del ingreso a menores de doce (12) años sin el acompañamiento de un adulto responsable o del Instructor Asignado al área de piscina o al agua.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Prohibición del uso de la piscina por nadadores con heridas visibles, laceraciones o infecciones en la piel.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Uso obligatorio de ducha y lavapiés cada vez que se ingrese y se salga de la piscina.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Prohibición del ingreso de mascotas al Escenario del CASB o las piscinas.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Exigencia a los nadadores del uso de gorro y vestido de baño en material de Lycra o Poliamida, el estilo del traje debe evitar la posibilidad de atrapamiento, cuando ingresen a la piscina. Para las niñas no se debe ingresar con pareos y/o salidas de baño y los niños con pantalonetas de fútbol, anchas o en algodón.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Prohibición de juegos violentos y carreras en el perímetro de la piscina.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Prohibición del ingreso a la piscina a los nadadores con cadenas, relojes, collares, camisetas, o elementos similares que permitan el atrapamiento mecánico.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">No ingerir ningún alimento dos (2) horas antes de ingresar a la clase.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Cumplir con el reglamento de uso de las piscinas que el Complejo Acuatico Simon Bolivar contemple conforme con lo dispuesto en la ley.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Informar sobre cualquier situación de riesgo en el establecimiento de piscinas a sus responsables, operarios o piscineros.</li>

                            </ol>

              </dd>

              <dt>

                <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">

                   REQUISITOS </a>

              </dt>

              <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
           
              <p style="line-height: 20px; font-size: 11pt" align="justify"><strong>Deberes de los Nadadores (inscritos):</strong> </p>

              <p style="line-height: 20px; font-size: 11pt" align="justify">El alumno se compromete para con la Escuela a cumplir los siguientes lineamientos: </p>

                 <ol>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Realizar  su  proceso  de  inscripción  en  los  horarios  y  fechas  establecidos  por  la dirección de la Escuela.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Hacer entrega de la documentación requerida en las fechas y horarios establecidos por la dirección de la escuela.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Estar afiliado a alguna EPS del Plan Obligatorio de Salud Colombiano.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Entregar la documentación requerida y diligenciar con el padre de familia o acudiente.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Contribuir con el orden, respeto e higiene dentro y fuera de la Escuela.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Participar activamente en las actividades propias de la Escuela.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">El alumno debe estar en la hora en punto de inicio de clase en el área de piscinas dispuesto para tomar su clase, para dar cumplimiento a este parámetro se permitirá el ingreso del alumno 10 minutos antes del inicio de clase, <strong>este tiempo de ingreso se dará siempre y cuando el niño realice su cambio únicamente y exclusivamente en el área común de vestieres,</strong> pasados 10 minutos de inicio de la hora de clase no se permitirá el ingreso.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Asistir a las sesiones de clase con ropa deportiva adecuada para el aprendizaje de la natación: vestido de baño en lycra o Poliamida (únicamente) y gorro (las gafas son opcionales) todo debidamente marcado y en buen estado.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Representar y dar buena imagen dentro y fuera de la Escuela Deportiva.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Asistir  como  mínimo  al  80% (6  sesiones)  de  las clases programadas para el nivel correspondiente.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Aceptar los horarios en los que se inscriba y respetar los mismos, para evitar sobrecupos en los grupos programados.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">El alumno acatará todas las normas de higiene y seguridad que sean implantadas y/o sugeridas por el personal técnico de la Escuela. no se permite el cambio de ropa en pasillos y áreas comunes del Complejo Acuatico Simon Bolivar, solo en los espacios habilitados para ésto.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Todos los nadadores deben contar con un acudiente, el cual debe ser mayor de edad y debe tener un vínculo de consanguinidad (padres, hermanos, abuelos, tíos, primos) con el alumno; esté acudiente deberá permanecer en las instalaciones del Complejo durante el transcurso de la clase y garantizar la seguridad del niño una vez terminada la clase, estando antes de finalizar la clase en la salida de los vestieres para recibir al niño, debe respetar a docentes, coordinadores, administradores, personal de aseo, seguridad, etc.</li>

                            </ol>

                             <p style="line-height: 20px; font-size: 11pt" align="justify"><strong>NOTA:</strong> No está permitido el ingreso de padres de familia a los vestidores de la piscina infantil. El niño(a) debe ingresar solo con su respectiva maleta y para facilitar el cambio de ropa a los niños es importante que los padres pongan en la maleta lo necesario para tomar su clase (vestido de baño o pantaloneta de baño, gorro, gafas opcionales, toalla, chanclas) y no ingresar con indumentaria u objetos que no necesite o estorben la organización en el vestier. La ducha que toman los niños después de salir de la piscina es con el fin de retirar el cloro que reciben de la piscina, por tal motivo debe ser una ducha rápida, además esto ayuda a agilizar el cambio de los niños en el vestier. </p>


                  
                <p style="line-height: 20px; font-size: 11pt" align="justify"><strong>Derechos de los Nadadores:</strong></p>

                <p style="line-height: 20px; font-size: 11pt" align="justify">Los niños y niñas inscritos en el programa de la Escuela de Natación del CASB-IDRD tienen los siguientes derechos:</p>                            

                            <ol>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Recibir  las  sesiones  de  clase  o  entrenamientos,  por  personales  seleccionados, capacitados y competentes del IDRD.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Conocer el manual de funcionamiento y participar en su actualización.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Ser respetado por el Director, Profesores, Padres de Familia y compañeros de la Escuela Deportiva.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Recibir el mismo trato por parte de todos los integrantes de la Escuela, sin que haya ninguna discriminación por razones de género, etnia, apariencia física, religión u orientación sexual.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Expresar opiniones o sugerencias para el mejoramiento del proceso formativo, ante los docentes, administradores, coordinadores y/o las directivas de la Escuela.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Recibir las sesiones de clase en un ambiente mínimo adecuado para la realización de las prácticas deportivas, que garantice los procesos de enseñanza aprendizaje.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Utilizar los espacios y el material didáctico deportivo ofrecido por la Escuela.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Participar activamente de  los  diferentes  festivales  o  eventos  deportivos  donde  participe la Escuela.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Ser informado de la realización de videos o imagenes pedagógicas por parte de la escuela de natación del Complejo Acuático Simón Bolívar, el cual tiene fines educativos.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Recibir total atención por parte de los profesores, coordinadores, auxiliares administrativos y directivos en el momento en que le sea necesario.</li>

                            </ol>

              

                  
               
                <p style="line-height: 20px; font-size: 11pt" align="justify"><strong>Deberes de los Padres o Acudientes</strong></p>

                <p style="line-height: 20px; font-size: 11pt" align="justify">Los padres y/o acudientes de los niños(as) inscritos en la Escuela de Natación del IDRD  tienen los siguientes deberes:</p>

                            <ol>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Garantizar la aplicación de la Ley de Infancia y Adolescencia sobre Protección y buen Trato, en lo relacionado al cambio de vestuario deportivo, el cual se debe llevar a cabo <strong>únicamente y exclusivamente en el área común de vestieres</strong> de las distintas piscinas o espacios designados para el desarrollo deportivo de los niños(as).</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Garantizar la protección en seguridad social (afiliación al SSSS) para su/s hijo/s inscritos en la Escuela Deportiva.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Esperar obligatoriamente a los niños(as) una vez terminada la sesión de clase en el área designada para tal fin.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Asistir a las reuniones programadas por la Escuela.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Brindar apoyo y respaldo al niño para garantizar la continua asistencia al programa.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Aportar ideas y ofrecer permanentemente apoyo y colaboración para el beneficio de la Escuela.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Cumplir los compromisos adquiridos con la Escuela.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Acatar  el  manual  de  funcionamiento  descrito  para  el  desarrollo  del  programa formativo.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Respetar los criterios y decisiones tomadas por el Instructor de natación, en el desarrollo de las sesiones de clase y encuentros deportivos que realice la Escuela Deportiva.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Consignar  los  costos  del  nivel  puntualmente,  en  las  fechas  establecidas  por  la Escuela, con el objeto de tener un buen funcionamiento administrativo y desarrollo dentro de la misma.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">respetar a docentes, coordinadores, administradores, personal de aseo y de seguridad, etc.</li>

                            </ol>

         
                 
              <p style="line-height: 20px; font-size: 11pt" align="justify"><strong>Derechos de los padres o acudientes</strong></p>

              <p style="line-height: 20px; font-size: 11pt" align="justify">Los padres o acudientes de los niños(as) tendrán los siguientes derechos:</p>

                            <ol>

                                <li style="line-height: 20px; font-size: 11pt" align="justify">Conocer el reglamento de funcionamiento de la Escuela Deportiva.</li>

                                <li style="line-height: 20px; font-size: 11pt" align="justify">Recibir información oportuna sobre el desarrollo y aprendizaje de su/s hijo/s, con el objeto de orientar su formación personal y deportiva, los docentes realizan para esto tres reuniones (inicial, Intermedia y final) durante cada ciclo.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Estar  informado  sobre  las  diferentes  actividades  desarrolladas  por  la  Escuela Deportiva.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Autorizar la participación de su/s hijo(a) en la realización de videos pedagógicos por parte de la escuela de natación del Complejo Acuático Simón Bolívar, el cual tiene fines educativos.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Presentar felicitaciones, sugerencias, quejas y reclamos teniendo en cuenta el  siguiente conducto regular: declaración de inconformidad verbal ante el profesor, declaración de inconformidad verbal ante la coordinación y hasta declaración de inconformidad escrita ante la coordinación de la Escuela.</li>

                            </ol>


                  
                
                <p style="line-height: 20px; font-size: 11pt" align="justify"><strong>Pérdida de la calidad de participante (Padre y/o Alumno)</strong></p>

                <p style="line-height: 20px; font-size: 11pt" align="justify">La pérdida del cupo de la Escuela de Natación del IDRD, se dará por los siguientes conceptos:</p>

                          <ol>

                                <li style="line-height: 22px; font-size: 11pt" align="justify">Cambiar de ropa y/o dejar que los niños(as) lo hagan (de diario a deportiva y viceversa) al exterior del escenario deportivo (calle, parqueaderos, zonas comunes del complejo acuático) o de las zonas de vestieres.</li>

                                <li style="line-height: 22px; font-size: 11pt" align="justify">Realización por escrito de tres llamados de atención por parte de los profesores y /o Coordinación de la Escuela por las siguientes causales: Indisciplina en las instalaciones del Complejo Acuático, Agresiones verbales y /o físicas por parte de los padres de familia y /o nadadores hacia los compañeros (as), el personal administrativo, profesores, seguridad y aseo del Complejo Acuático Simón Bolívar, o uso de bebidas embriagantes o alucinógenos al interior de CASB.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">No estar afiliado al Plan Obligatorio de Salud Colombiano.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Adulteración de documentos como tarjeta de identidad, registro civil o afiliación a  EPS, o en la información personal brindada en el registro de preinscripción  o  en  la  participación en eventos deportivos donde esté inscrito el deportista.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">No hacer entrega de los documentos requeridos por la coordinación de la Escuela en los días y fechas establecidos.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Faltas graves que atenten contra el decoro, la disciplina, imagen y respeto hacia la Escuela e integrantes de la misma o la comunidad en general.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">No acatar el presente manual de funcionamiento descrito por la Escuela Deportiva.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">La NO notificación de un caso de Aplazamiento a la coordinación de la Escuela por incapacidad medica durante el ciclo que está inscrito.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">No realizar la inscripción del alumno en los días y fechas establecidas.</li>

                            </ol>

                  
                 <p style="line-height: 20px; font-size: 11pt" align="justify"><strong>Aplazamientos</strong></p> 

                <p style="line-height: 20px; font-size: 11pt" align="justify">Un aplazamiento se define cuando el alumno ya está inscrito y ha perdido el <strong>50%</strong> o más de las clases (4 sesiones de clase consecutivas) por Incapacidad o recomendación Médica, en caso tal no tendrá que cancelar nuevamente el valor correspondiente al curso para el siguiente ciclo, ésto siempre y cuando coincida la fecha de solicitud del aplazamiento con la fecha de la incapacidad o recomendación médica.

                            <br> <br>

                            <strong>Los aplazamientos de los ciclos solo se permitirán en las siguientes condiciones:</strong></p>

                          <ol>

                                <li style="line-height: 22px; font-size: 11pt" align="justify">Si  se  presenta  cualquier  enfermedad  incapacitante y certificada por médico de profesión, que constate que el niño/a se encuentra con restricción médica, dicho aplazamiento sólo tendrá validez por un nivel o ciclo.</li>

                                <li style="line-height: 22px; font-size: 11pt" align="justify">La  solicitud  de  aplazamiento  debe  presentarse  por  escrito  (original  y  copia)  a  la coordinación de la Escuela adjuntando fotocopia de la incapacidad o recomendación médica expedida por la EPS.</li>

                                <li style="line-height: 27px; font-size: 11pt" align="justify">Para poder hacer efectivo el aplazamiento el alumno debe realizar su inscripción en la fecha estipulada en la copia de la carta y deberá traerla para hacer efectivo el aplazamiento de lo contrario deberá pagar nuevamente el valor del curso.</li>

                            </ol>

                  
                <p style="line-height: 20px; font-size: 11pt" align="justify"><strong>Refuerzo de Nivel</strong></p> 

                <p style="line-height: 20px; font-size: 11pt" align="justify">Las  causales  de  refuerzo del  nivel  se  darán  por  las siguientes causas:</p>



                            <ol>

                                <li style="line-height: 22px; font-size: 11pt" align="justify">No cumplir con los objetivos técnicos, educativos y motrices trazados por el Plan Pedagógico para el nivel de acuerdo con el formato de evaluación emitido por el profesional programado en el grupo respectivo.</li>

                                <li style="line-height: 22px; font-size: 11pt" align="justify">Inasistencia a más del  <strong>25% (2 clases)</strong> de las sesiones de clase.</li>                               

                             </ol>   

                  

           <p style="line-height: 20px; font-size: 11pt" align="justify"><strong>Cupos mínimos y máximos para oferta de niveles</strong></p> 
           <p style="line-height: 20px; font-size: 11pt" align="justify">Los cupos mínimos y máximos para desarrollar las acciones pedagógicas de la escuela se definen por las inscripciones que se realizan mes a mes por parte de los padres de familia para el ciclo programado la cual se deriva en la organización de espacios y docentes:

                           <br><br>

                            La oferta y desarrollo de actividades pedagógicas de la Escuela en cada uno de los niveles, deberá tener como mínimo la inscripción y participación de ocho (8) niños por horario establecido; en caso de no contar con el número establecido, la Escuela podrá integrar grupos de niveles, establecer los horarios y/o aplazar el nivel para el correspondiente ciclo, siempre y cuando el número mínimo no se complete.

                           <br><br>

                            La oferta y desarrollo de actividades pedagógicas de la Escuela en cada uno de los niveles deberá tener como máximo la inscripción y participación en promedio de doce (12) niños, por horario establecido. </p>

              </dd>

            </dl>

          </div>

        </div>





                            <p style="line-height: 20px; font-size: 12pt" align="justify"><strong></strong> </p>

                            

                            </ul> <center><a class="btn btn-info" href="./" style="font-size: 12pt">Volver</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--<a class="btn btn-info" href="registro" style="font-size: 12pt">Registrar Niños de 5 a 7 años</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-info" href="form2" style="font-size: 12pt">Registrar Niños de 8 a 12 años</a>  --> </center></div>

                        </div>

                    </div>

                </div>

                <script type="text/javascript" src="public/Js/form.js" ></script>

            </section>

@stop