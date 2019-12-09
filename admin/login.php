<?php 

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once '../login/config.php';
require_once '../login/User.class.php';



//echo "Inicio";
if(isset($_POST['usuario'])){
    
  if (@!isset($_SESSION)) {
  		session_start();
     }
     $user = new User();
      //echo $_POST['usuario'];
        $usuario= ($_POST['usuario']);
	   $pass = (($_POST['password']));
         

         $comprueba=$user->loginAdmin($usuario,$pass);

         if($comprueba=='Correcto')
         {
         	  header("Location: /admin/app.php");

         }
         else
         {
         	echo "<script>alert('Usuario y contraseña incorrecto intente nuevamente!')
self.location = 'index.php'
</script>";
         }



}


 ?>