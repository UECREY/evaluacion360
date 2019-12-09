<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
//date_default_timezone_set('America/Guayaquil');ile
session_start();
if (!$_SESSION){
echo '<script language = javascript>
self.location = "../index.php"
</script>';
}
require_once '../login/config.php';
require_once '../login/User.class.php';

$user = new User();
$serial = $_SESSION['usr'];
$cursoData=$user->cursoAlumno($serial);

/*while (!empty($docentesAlumno))
{
  echo $docentesAlumno['nombre_epl'];
}*/
$apellidos=$cursoData['apellido_alu'];
$nombres=$cursoData['nombre_alu'];
$curso=$cursoData['nombre_niv'];
$paralelo=$cursoData['nombre_par'];
$serial_par=$cursoData['serial_par'];
$docentesAlumno=$user->docentesAlumno($serial_par);

$opciones=$user->opcionesRespuestas();


/*while ($docentesAlumno)
{
echo $docentesAlumno['nombre_epl'];
}*/
/*while (!empty($docentesAlumno))
{
  echo $docentesAlumno['nombre_epl'];
}*/


 //echo "Hola";
 

?>
<!DOCTYPE html>
<html lang="es">
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

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="../template/template/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../template/template/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../template/template/lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../template/template/css/azia.css">

  </head>
  <body class="az-body">

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
       
          <a href="" id="azNavShow" class=""><span></span><?php echo $apellidos.' ' .$nombres ?></a>
        </div><!-- az-header-left -->
        
        <div class="az-header-right">
          <div class="az-header-message">
            <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
          </div><!-- az-header-message -->
          <div class="dropdown az-header-notification">
            <a href="" class="new"><i class="typcn typcn-bell"></i></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header mg-b-20 d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have 2 unread notification</p>
              <div class="az-notification-list">
                <div class="media new">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                    <span>Mar 15 12:32pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media new">
                  <div class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Joyce Chua</strong> just created a new blog post</p>
                    <span>Mar 13 04:16am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                    <span>Mar 13 02:56am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                  <div class="media-body">
                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                    <span>Mar 12 10:40pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- az-notification-list -->
              <div class="dropdown-footer"><a href="">View All Notifications</a></div>
            </div><!-- dropdown-menu -->
          </div><!-- az-header-notification -->
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="https://via.placeholder.com/500x500" alt="">
                </div><!-- az-img-user -->
                <h6>Aziana Pechon</h6>
                <span>Premium Member</span>
              </div><!-- az-header-profile -->

              <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
              <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->

    <div class="az-navbar">
      <div class="container">
        <div><a href="index.html" class="az-logo">az<span>i</span>a</a></div>
        <div class="az-navbar-search">
          <input type="search" class="form-control" placeholder="Search for anything...">
          <button class="btn"><i class="fas fa-search "></i></button>
        </div><!-- az-navbar-search -->
       
      </div><!-- container -->
    </div><!-- az-navbar -->

    <div class="az-content">
      <div class="container">
        <div class="az-content-body">
          <div class="az-content-breadcrumb">

          </div>
         

       
<div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong> <?php  echo $curso.' '.$paralelo ?>
          </div>
          <hr class="mg-y-30 mg-lg-y-50 bd-transparent">

          <div class="az-content-label mg-b-5">Evaluación 360</div>
          <p class="mg-b-20">Instrucciones para la evaluación</p>
          <hr class="mg-y-30 mg-lg-y-50">
           <div class="az-content-label mg-b-5">Docentes a evaluar</div>
          <p class="mg-b-20">De click en el docente que desea evaluar</p>

          <div class="row row-sm">

            <?php 
$inc=0;
 while($docAlumno = $docentesAlumno->fetch_assoc())
{
         $inc=$inc+1;
        if($inc==3 )
        {
        
            echo '   <hr class="mg-y-30 mg-lg-y-50">';
        }
        else
        {
            echo '<div class="col-md-4 mg-t-20 mg-md-t-0">';
          echo ' <div class="card bd-0">';
          echo '  <div class="card-header tx-medium bd-0 tx-white bg-primary">';
          echo ' <span>';
             
          echo '<a id="docente" href="" style="color:white;">';


          echo $docAlumno['apellido_epl'].' '.$docAlumno['nombre_epl'];

          echo '</a>';
          echo ' </span>';
          echo ' </div>';
          echo ' <div class="card-body bd bd-t-0">';
          echo '<p class="mg-b-0">';
                  echo $docAlumno['nombre_mat'];
          echo '</p>';
          echo '</div>';
          echo '</div>';
          echo '</div>';

        }
           echo '   <hr class="mg-y-30 mg-lg-y-50">';
}

 ?>

         
          </div><!-- row -->
            <hr class="mg-y-30 mg-lg-y-50">
                <div class="wd-lg-50p">
                  <ul class="list-group">
            <?php   
                    while($datOpciones= $opciones->fetch_assoc())
                         {
                          echo '<li class="list-group-item">';
                          echo $datOpciones['idOpcionesRes'].'  '.$datOpciones['detalleOpcionesRes'];
                          echo '</li>';
                         }
             ?>

              </ul>
                </div>
          <div id="wizard2">
            <h3>Competencia1</h3>
            <section>
             
              <div class="row row-sm">
             
              

                <table class="table az-table-reference">
            <thead>
              <tr>
                <th class="wd-55p">Preguntas</th>
                <th class="wd-45p">
                   

<!-- Material inline 2 -->

<!-- Material inline 3 -->



OPCIONES


                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">Comparte sus habilidades y talentos con su equipo de trabajo</code></td>

                <td>
                  
                    <div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample" required>
  <label class="form-check-label" for="materialInline1"></label>
</div>

<!-- Material inline 2 -->
<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample" required>
  <label class="form-check-label" for="materialInline2"></label>
</div>

<!-- Material inline 3 -->
<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample" required>
  <label class="form-check-label" for="materialInline3"></label>
</div>
<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample" required>
  <label class="form-check-label" for="materialInline4"></label>
</div>

<div class="form-check form-check-inline">
  <input type="radio" class="form-check-input" id="materialInline1" name="inlineMaterialRadiosExample" required>
  <label class="form-check-label" for="materialInline5"></label>
</div>
                </td>
              </tr>
               <tr>
                <td><code class="pd-0 bg-transparent">Comparte sus habilidades y talentos con su equipo de trabajo</code></td>
                
                <td>

  
                </td>
              </tr>
               <tr>
                <td><code class="pd-0 bg-transparent">Comparte sus habilidades y talentos con su equipo de trabajo</code></td>
                
                <td>secondary | success | dark</td>
              </tr>
               <tr>
                <td><code class="pd-0 bg-transparent">Comparte sus habilidades y talentos con su equipo de trabajo</code></td>
                
                <td>secondary | success | dark</td>
              </tr>
               <tr>
                <td><code class="pd-0 bg-transparent">Comparte sus habilidades y talentos con su equipo de trabajo</code></td>
                
                <td>secondary | success | dark</td>
              </tr>
            </tbody>
          </table>

    
<!-- Material inline 1 -->

              </div><!-- row -->
            </section>
            <h3>Competencia 2</h3>
            <section>
              <p>Wonderful transition effects.</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                <input id="email" class="form-control" name="email" placeholder="Enter email address" type="email" required>
              </div><!-- form-group -->
            </section>
            <h3>Competencia 3</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>

          <hr class="mg-y-30 mg-lg-y-50 bd-transparent">

        


          <div class="mg-lg-b-30"></div>

        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->

    <div class="az-footer">
      <div class="container">
        <span>&copy; Unidad Educativa Cristo Rey </span>
        <span></span>
      </div><!-- container -->
    </div><!-- az-footer -->

    <div id="modaldemo1" class="modal">
      <div class="modal-dialog wd-xl-400" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-40">
            <button type="button" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <h5 class="modal-title mg-b-5">Create New Account</h5>
            <p class="mg-b-20">Let's get you all setup so you can begin using our app.</p>

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Firstname">
            </div><!-- form-group -->
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Lastname">
            </div><!-- form-group -->
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Phone">
            </div><!-- form-group -->
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email">
            </div><!-- form-group -->
            <div class="form-group mg-b-25">
              <label class="ckbox mg-b-5">
                <input type="checkbox">
                <span class="tx-13">I agree to <a href="">Terms</a> and <a href="">Privacy Policy</a></span>
              </label>
              <label class="ckbox">
                <input type="checkbox" checked>
                <span class="tx-13">Yes, I want to receive email from your newsletter.</span>
              </label>
            </div><!-- form-group -->
            <button class="btn btn-primary btn-block">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <script src="../template/template/lib/jquery/jquery.min.js"></script>
    <script src="../template/template/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../template/template/lib/ionicons/ionicons.js"></script>
    <script src="../template/template/lib/jquery-steps/jquery.steps.min.js"></script>
    <script src="../template/template/lib/parsleyjs/parsley.min.js"></script>


    <script src="../template/template/js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

        $('#wizard1').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>'
        });

        $('#wizard2').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
             
                var lname2 = $('#materialInline1').parsley();


                if( lname2.isValid()) {
                  return true;
                } else {
                 // fname.validate();
                 // lname.validate();
                  lname2.validate();

                }
              }
              
              // Step 2 form validation
              if(currentIndex === 1) {
                var email = $('#email').parsley();
                if(email.isValid()) {
                  return true;
                } else { email.validate(); }
              }
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          }
        });
        $('#docente').click(function(){
                   alert('Ingresa');
            });

        $('#wizard3').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          stepsOrientation: 1
        });
      });
    </script>
  </body>
</html>
