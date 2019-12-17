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

    <title>Indicadores</title>

    <!-- vendor css -->
  
    <link href="../template/template/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../template/template/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="../template/template/lib/select2/css/select2.min.css" rel="stylesheet">

    

  </head>
  <body class="az-body">

    <div class="az-content">
      <div class="container">
        <div class="az-content-body">
         
          

          <div class="az-content-label mg-b-5">Relación Dependencia</div>
       

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

                <th class="wd-15p">Usuario </th>
                <th class="wd-15p">Jerarquia</th>

               
                <th class="wd-5p">Usuario2 </th>
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
    "url": "lib/server/fetchRelaciones.php",
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
  $('#indicador_form')[0].reset();
  $('.modal-title').text("Añadir Indicadores");
  $('#action').val("Guardar");
  $('#operation').val("Guardar");
  $('#user_uploaded_image').html('');
  $('.selectpicker').selectpicker();
  $('.col-sm-4.date').datepicker({
    format: 'yyyy-mm-dd',
 
});
 });
 $(document).on('submit', '#indicador_form', function(event){
  event.preventDefault();
  $('.select2').select2({
            placeholder: 'Seleccione la categoría'
          });
  var detalleIndicador= $('#detalleIndicador').val();
  var idCategoria= $('#idCategoria').val();
    if(detalleIndicador != '' && idCategoria != '')
  {
   $.ajax({
    url:"lib/sever/insert.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#indicador_form')[0].reset();
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
   url:"lib/server/fetchIndicadoresSingle.php",
   method:"POST",
   data:{user_id:user_id},
   dataType:"json",
   success:function(data)
   {
    $('#userModal').modal('show');
    $('#detalleIndicador').val(data.detalleIndicador);
    var $example = $(".select2").select2();
     $example.val(data.idCategoria).trigger("change");
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





    $('.modal-title').text("Edit User");
    $('#user_id').val(user_id);
    $('#action').val("Edit");
    $('#operation').val("Edit");
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
            <form class="parsley-style-1"  method="post" id='indicador_form'>
               <h5 class="modal-title mg-b-5">Indicadores</h5>
        
             <div class="form-group">
              <input type="text" class="form-control" placeholder="Detalle Indicador" id="detalleIndicador" name="detalleIndicador" required="">
            </div><!-- form-group -->
            <div class="form-group">

               <select class="form-control select2" data-placeholder="Seleccione la categoría" data-parsley-class-handler="#slWrapper2" name="idCategoria" id="idCategoria"data-parsley-errors-container="#slErrorContainer2" required>
                <?php 

                       while ($infoCategoria=$categoria->fetch_assoc())
                       {
                        echo '    <option value='.$infoCategoria['idCategoria'].'> '.$infoCategoria['detalleCategoria'].'</option>';
                       }
                 ?>
              
              </select>
            </div><!-- form-group -->
          <!-- parsley-checkbox -->
            
<input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
            <div class="mg-t-30">
                 <!--<input type="submit" name="action" id="action" class="btn btn-success" value="Guardar" />-->
              <button type="submit" id="action" class="btn btn-az-primary pd-x-20" value="Guardar">Guardar</button>
            </div>
          </form>
           
          </div><!-- modal-body -->
          <div class="modal-footer">
          
            <button type="button" data-dismiss="modal" class="btn btn-outline-light">Close</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
