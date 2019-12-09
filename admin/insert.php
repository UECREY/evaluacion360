<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Guayaquil');
 require_once '../login/config.php';
   require_once '../login/User.class.php';

 

  
    if($_POST["operation"] == "Guardar")
    {
    	  $user= new User();
    	  echo $_POST['idCategoria'];
            $categoria=$user->guardarIndicadores($_POST['detalleIndicador'],$_POST['idCategoria']);  
    }


 ?>