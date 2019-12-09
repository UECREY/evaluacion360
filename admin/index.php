<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Evaluación 360:: Unidad Educativa Cristo Rey</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="http://portal.cristorey.edu.ec/lib/styles/loginEvaluacion.css">

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<script type="text/javascript" src="http://portal.cristorey.edu.ec/lib/scripts/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://portal.cristorey.edu.ec/lib/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="http://portal.cristorey.edu.ec/lib/jqwidgets/jqxpasswordinput.js"></script>
<script type="text/javascript" src="http://portal.cristorey.edu.ec/lib/jqwidgets/jqxinput.js"></script>
<script type="text/javascript" src="http://portal.cristorey.edu.ec/lib/jqwidgets/jqxvalidator.js"></script>

<script type="text/javascript" src="http://portal.cristorey.edu.ec/lib/tools/cookies.js"></script>
<script type="text/javascript" src="http://portal.cristorey.edu.ec/lib/tools/omnisoftTools.js"></script>
<script src="../pruebalogin/js/js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://portal.cristorey.edu.ec/lib/themes/default/easyui.css">
  <link rel="stylesheet" type="text/css" href="http://portal.cristorey.edu.ec/lib/themes/icon.css">
  <link rel="stylesheet" type="text/css" href="http://portal.cristorey.edu.ec/lib/styles/ribbon.css">
  <script type="text/javascript" src="http://portal.cristorey.edu.ec/lib/easyui/jquery.easyui.min.js"></script>
  <script type="text/javascript" src="http://portal.cristorey.edu.ec/lib/easyui/jquery.ribbon.js"></script>

<script>


</script>
</head>

<script>
  
     $(document).ready(function(){
$(function () {

});
    
       $("#usuario").numeric();
 
  });
</script>
<body>
  <nav class="navbar navbar-dark  uecr">
  <a class="navbar-brand" href="#">
    <img src="/fotos/uecrwhite.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Sistema Evaluación 360
  </a>

</nav>
 <div class="container">

      <form class="form-signin" name="flogin" id="flogin" action="login.php" method="post">
        <div class="card" style="width: 25rem;">
  <img class="card-img-top" src="/fotos/logouecrbi.png" alt="Card image cap">
  
</div>
        <h2 class="form-signin-heading text-center"> <i class="fas fa-users"></i>  Ingreso Administrador </h2>
       
        <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
      <div class="input-group mb-2 mb-sm-0">
        <div class="input-group-addon"><i class="fas fa-user"></i></div>
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" autocomplete="off">
      </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
     <div class="input-group mb-2 mb-sm-0">
        <div class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></div>
        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" autocomplete="off" >
      </div>
        </div>
        <div class="checkbox">
          
        </div>
        <button class="btn btn-lg uecrbuttons btn-block"> Ingresar  </button>
     
    <!-- Display Google sign-in button -->
 
    
    <!-- Show the user profile details -->
    <div class="userContent" style="display: none;"></div>
</div>
        <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>-->
      </form>


</body>
<!-- Social Footer, Colour Matching Icons -->
<!-- Include Font Awesome Stylesheet in Header -->

<!-- // -->
<div class="container">

    <hr>
        <div class="text-center center-block">
            <p class="txt-railway"><i class="fa fa-envelope" aria-hidden="true"></i>info@cristorey.edu.ec -<span class="icon-sphere"></span> www.cristorey.edu.ec </p>   
             <p class="txt-railway">Funciona correctamente con: <span class="icon-firefox"></span> Mozilla Firefox  </p>   
             <div class="credits">
                 
            <br />

             </div>
          
               	<a href="https://www.facebook.com/Unidad-Educativa-Cristo-Rey-Oficial-1499770620302284/p"><i id="social-fb" class="fab fa-facebook-f fa-3x social"></i></a>
           		<a href="https://twitter.com/UECristoRey"><i id="social-tw" class="fab fa-twitter fa-3x social"></i></a>
              	<a href="mailto:info@cristorey.edu.ec"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
    <hr>
</div>

<br />

<!-- Social Footer, Single Coloured -->
<!-- Include Font Awesome Stylesheet in Header -->


</html>