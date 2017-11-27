
$(function() {

/* tabla por ciclos*/
function listar_datos(){
      $.ajax({url:'listar_datos',type:  'post',success:  function (response) {

        $('#loading').show();
        $('#div-tabla').html(response);
        },complete: function(){


           $('#lista').DataTable({
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
         
                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );
         
                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                },
                "language": {"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"},

        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 5 ]
                }
            },
            'colvis'
        ]

            });
           $('#loading').hide();
          }
      });

/* tabla general*/

      $.ajax({url:'listar_datos1',type:  'post',success:  function (response) {

        $('#loading').show();
        $('#div-tabla1').html(response);
        },complete: function(){


           $('#lista1').DataTable({
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
         
                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );
         
                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                },
                "language": {"url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"},

        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 5 ]
                }
            },
            'colvis'
           ]

            });

           $('#loading').hide();
          }
      });

}
listar_datos();

 $('body').delegate('.eliminar','click',function(){
        if (confirm("Está seguro de eliminiar este registro?")){
        var id = $(this).data('id');
        
         $.ajax({url:'eliminar', data : {id:id}, type:  'post',success:  function (response) {
          alert('Se ha eliminado correctamente el registro');
          listar_datos();
        }});
       }
       });

$('#a-registro').hide();

$('#a-descarga').hide();

$('#a-login').hide();

$('#a-cerrar').show();







});