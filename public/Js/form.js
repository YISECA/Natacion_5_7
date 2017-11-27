jQuery(document).ready(function($) {

 function validate_fecha(fecha)



{

    var patron=new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");

    if(fecha.search(patron)==0)

    {

        var values=fecha.split("-");

        if(isValidDate(values[2],values[1],values[0]))

        {

            return true;

        }

    }

    return false;

}



function isValidDate(day,month,year)



{



    var dteDate;



    month=month-1;



    dteDate=new Date(year,month,day);







    //Devuelva true o false...



    return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));



}



  function calcularEdad()

{

    var fecha=document.getElementById("fecha_nacimiento").value;

    if(validate_fecha(fecha)==true)

    {

      // Si la fecha es correcta, calculamos la edad



        var values=fecha.split("-");

        var dia = values[2];

        var mes = values[1];

        var ano = values[0];



        // cogemos los valores actuales



        var fecha_hoy = new Date();

        var ahora_ano = fecha_hoy.getYear();

        var ahora_mes = fecha_hoy.getMonth()+1;

        var ahora_dia = fecha_hoy.getDate();



        // realizamos el calculo

        var edad = (ahora_ano + 1900) - ano;

        if ( ahora_mes < mes )

        {

            edad--;

        }

        if ((mes == ahora_mes) && (ahora_dia < dia))

        {

            edad--;

        }

        if (edad > 1900)

        {

            edad -= 1900;

        }





        // calculamos los meses

        var meses=0;

        if(ahora_mes>mes)

            meses=ahora_mes-mes;

        if(ahora_mes<mes)

            meses=12-(mes-ahora_mes);

        if(ahora_mes==mes && dia>ahora_dia)

            meses=11;



        // calculamos los dias



        var dias=0;

        if(ahora_dia>dia)

            dias=ahora_dia-dia;

        if(ahora_dia<dia)

        {

            ultimoDiaMes=new Date(ahora_ano, ahora_mes, 0);

            dias=ultimoDiaMes.getDate()-(dia-ahora_dia);

        }

        $('#edad').val(edad);

        $("#edad").prop("readonly", true);



    }else{



        document.getElementById("result").innerHTML="La fecha "+fecha+" es incorrecta";



    }





}



$('#fecha_nacimiento').datepicker

({

	    maxDate: '2012-11-23',

		dateFormat: 'yy-mm-dd',

		changeMonth: true,

		changeYear: true,

		yearRange: "-7:-5"});



/*$('#fecha_nacimiento').datepicker({



      minDate: new Date(1900,1-1,1), maxDate: '1999-08-06',

      dateFormat: 'yy-mm-dd',

      yearRange: "-100:-18",

      changeMonth: true,

      changeYear: true,

      });*/

 



 $('select[data-readonly]').on('change', function(e){



		var input = $(this).data('readonly');



		var readonly_value = $(this).data('readonly-value');







		if(readonly_value != $(this).val())



		{



			$('*[name="'+input+'"]').attr('readonly', 'readonly');



		} else {



			$('*[name="'+input+'"]').removeAttr('readonly');	



		}



	});









$('#edad').click(function(){



	calcularEdad();

});





	$('#fecha_ultimo_contrato').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "-100:+0"});



	$('#fecha_penultimo_contrato').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "-100:+0"});



	$('#fecha_fin_penultimo_contrato').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "-100:+0"});



	$('#fecha_antepenultimo_contrato').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "-100:+0"});



	$('#fecha_fin_antepenultimo_contrato').datepicker({dateFormat: 'yy-mm-dd'});



	for(var i=2;i<=2;i++){$('#page'+i).hide();}



	$('body').delegate('#adelante','click',function(){var id= $(this).data('id');$("#page"+id).hide();$("#page"+(id+1)).show();$('#form_gen')});	

 	$('body').delegate('#atras','click',function(){var id= $(this).data('id');$("#page"+id).hide();$("#page"+(id-1)).show();});



/*

    $.ajax({url:'listar_pais',type:  'post',success:  function (response) {$('#id_pais').html(response); }});

    $.ajax({url:'listar_ciudad',type:  'post',success:  function (response) {$('#id_ciudad').html(response); }});

    $.ajax({url:'listar_localidad',type:  'post',success:  function (response) {$('#id_localidad').html(response); }});

    $.ajax({url:'listar_departamento',type:  'post',success:  function (response) {$('#id_departamento').html(response); }});

*/

	



});





//uses classList, setAttribute, and querySelectorAll

//if you want this to work in IE8/9 youll need to polyfill these

(function(){

    var d = document,

    accordionToggles = d.querySelectorAll('.js-accordionTrigger'),

    setAria,

    setAccordionAria,

    switchAccordion,

  touchSupported = ('ontouchstart' in window),

  pointerSupported = ('pointerdown' in window);

  

  skipClickDelay = function(e){

    e.preventDefault();

    e.target.click();

  }



        setAriaAttr = function(el, ariaType, newProperty){

        el.setAttribute(ariaType, newProperty);

    };

    setAccordionAria = function(el1, el2, expanded){

        switch(expanded) {

      case "true":

        setAriaAttr(el1, 'aria-expanded', 'true');

        setAriaAttr(el2, 'aria-hidden', 'false');

        break;

      case "false":

        setAriaAttr(el1, 'aria-expanded', 'false');

        setAriaAttr(el2, 'aria-hidden', 'true');

        break;

      default:

                break;

        }

    };

//function

switchAccordion = function(e) {

  console.log("triggered");

    e.preventDefault();

    var thisAnswer = e.target.parentNode.nextElementSibling;

    var thisQuestion = e.target;

    if(thisAnswer.classList.contains('is-collapsed')) {

        setAccordionAria(thisQuestion, thisAnswer, 'true');

    } else {

        setAccordionAria(thisQuestion, thisAnswer, 'false');

    }

    thisQuestion.classList.toggle('is-collapsed');

    thisQuestion.classList.toggle('is-expanded');

        thisAnswer.classList.toggle('is-collapsed');

        thisAnswer.classList.toggle('is-expanded');

    

    thisAnswer.classList.toggle('animateIn');

    };

    for (var i=0,len=accordionToggles.length; i<len; i++) {

        if(touchSupported) {

      accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);

    }

    if(pointerSupported){

      accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);

    }

    accordionToggles[i].addEventListener('click', switchAccordion, false);

  }

})();