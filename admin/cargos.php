<?php 
 error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
   require_once 'lib/helpers/config.php';
   require_once 'lib/helpers/User.class.php';

   $user= new User();

   $categoria=$user->categorias();

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/azia/img/azia-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <title>Categorías</title>

    <!-- vendor css -->
  
    <link href="../template/template/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../template/template/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="../template/template/lib/select2/css/select2.min.css" rel="stylesheet">

    

  </head>
  <body class="az-body">

    <div class="az-content">
      <div class="container">
        <div class="az-content-body">
         
          

          <div class="az-content-label mg-b-5">Cargos</div>
          <p class="mg-b-20">Cargos ingresados en el sistema</p>

          <table id="datatable1" class="display responsive nowrap">
             <br />
    <div align="right">

     <button type="button" id="add_button"  name="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Registrar</button>
    </div>
    <br /><br />
                          <th width="10%" align="right">
                  <a id="botonNuevo" href="#" title=" nuevo articulo" class="botonNuevo">
                    <i class="fa fa-plus-circle fa-2x"></i>
                </a>
              </th>
            <thead>
               
              <tr>

                <th class="wd-15p">Detalle </th>
          

               
                <th class="wd-5p">Modificar </th>


              
              </tr>
            </thead>
            <tbody>
                   
            </tbody>
          </table>

    

        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->

   

  
    <script src="../template/template/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../template/template/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="../template/template/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../template/template/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="../template/template/lib/select2/js/select2.min.js"></script>

    
    <script>
      $(document).ready(function(){
        'use strict';

var dataTable = $('#datatable1').DataTable({
  "responsive": true,
  "bDeferRender": true,     
 
 

      "order":[],
    "ajax": {
    "url": "lib/server/fetchCargos.php",
    "type": "POST"
    },          
    
        "dom": "Bfrtip",
        buttons: [
            "csv", "pdf",
            
            {
               extend: 'excelHtml5',
                text: 'Export to Excel',
        title: 'inscritosexcel',
            },

        ],  
          "oLanguage": {
            "sProcessing":     "Procesando...",
        "sLengthMenu": 'Mostrar <select>'+
            '<option value="20">10</option>'+
            '<option value="20">10</option>'+
            '<option value="30">30</option>'+
            '<option value="30">30</option>'+
            '<option value="30">30</option>'+
            '<option value="30">30</option>'+
            

            '<option value="50">50</option>'+
            '<option value="-1">All</option>'+
            '</select> registros',    
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
   
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Por favor espere - cargando...",
       
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
        }


 });
$('#add_button').click(function(){
  $('#cargos_form')[0].reset();
  $('.modal-title').text("Cargo");
  $('#action').val("Guardar Cargo");
  $('#operation').val("Guardar Cargo");
  $('#user_uploaded_image').html('');
  //$('.selectpicker').selectpicker();
 
 });
 $(document).on('submit', '#cargos_form', function(event){
  event.preventDefault();

  var detalleCargo= $('#detalleCargo').val();
  
    if(detalleCargo!= '')
  {
   $.ajax({
    url:"lib/serverinsert.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
        if(data=='Correcto')
      {
      $("#modaldemo4").modal();
      }
      else
      {
      $("#modaldemo5").modal();
          
      }


     $('#cargos_form')[0].reset();
     $('#userModal').modal('hide');
     dataTable.ajax.reload();
         //location.reload();
    }
   });
  }
  else
  {
   alert("Campos obligatorios, llenar");
  }
 });

  $(document).on('click', '.update', function(){
  var user_id = $(this).attr("id");
 //  alert("Ingresa");
  $.ajax({
   url:"lib/server/fetchCargosSingle.php",
   method:"POST",
   data:{user_id:user_id},
   dataType:"json",
   success:function(data)
   {
    $('#userModal').modal('show');
    $('#detalleCargo').val(data.detalleCargo);
   
//$('#idCategoria option[value='+data.idCategoria+']').attr("selected",true);
 //   $('#idCategoria').select2('COMPETENCIA');

 //   $('#mailInscripcion_alu').val(data.mailInscripcion_alu);
  //  $('#codigoIdentificacion_alu').val(data.codigoIdentificacion_alu);

   // $('#cursoVa_alu option[value='+data.cursoVa_alu+']').attr("selected",true);

      //$('#cursoVa_alu').selectpicker('val', data.cursoVa_alu);

   // $('#tipoIdentificacion_alu option[value='+data.tipoIdentificacion_alu+']').attr("selected",true);
     // $('#tipoIdentificacion_alu').selectpicker('val', data.tipoIdentificacion_alu);

   // $('#serial_col option[value='+data.serial_col+']').attr("selected",true);
     //$('#serial_col').selectpicker('val', data.serial_col);
       //$('#correoExtra_alu').val(data.correoExtra_alu);
     // alert(data.documentaciona_alu);
   // $('#documentaciona_alu option[value='+data.documentaciona_alu+']').attr("selected",true);
     // $('#documentaciona_alu option[value='+data.documentaciona_alu+']').prop("selected", true);
      //$('#documentaciona_alu').selectpicker('val', data.documentaciona_alu);

    //  $('.selectpicker').selectpicker('val', 'Mustard');
    //$('#observacionDocumentacion_alu').val(data.observacionDocumentacion_alu);





    $('.modal-title').text("Editar Cargo");
    $('#user_id').val(user_id);
    $('#action').val("Editar Cargo");
    $('#operation').val("Editar Cargo");
   }
  })
 });

 
        
        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>

<div id="userModal" class="modal">
      <div class="modal-dialog wd-xl-400" role="document">
        <div class="modal-content ">
         
          <div class="modal-body pd-20 pd-sm-40">
              <button type="button" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <form class="parsley-style-1"  method="post" id='cargos_form'>
               <h5 class="modal-title mg-b-5">Cargos</h5>
        
             <div class="form-group">
              <input type="text" class="form-control" placeholder="Detalle del Cargo" id="detalleCargo" name="detalleCargo" required="">
            </div><!-- form-group -->
            
          <!-- parsley-checkbox -->
            
<input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
            <div class="mg-t-30">
                 <!--<input type="submit" name="action" id="action" class="btn btn-success" value="Guardar" />-->
              <button type="submit" id="action" class="btn btn-az-primary pd-x-20" value="Guardar Cargo">Guardar</button>
            </div>
          </form>
           
          </div><!-- modal-body -->
          <div class="modal-footer">
          
            <button type="button" data-dismiss="modal" class="btn btn-outline-light">Close</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
  <div id="modaldemo4" class="modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-success tx-semibold mg-b-20">Ok</h4>
            <p class="mg-b-20 mg-x-20">Datos guardados</p>
            <button type="button" class="btn btn-success pd-x-25" data-dismiss="modal" aria-label="Close">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <div id="modaldemo5" class="modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon icon ion-ios-close-circle-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-danger mg-b-20">Error!</h4>
            <p class="mg-b-20 mg-x-20">No se guardó revise la información</p>
            <button type="button" class="btn btn-danger pd-x-25" data-dismiss="modal" aria-label="Close">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->