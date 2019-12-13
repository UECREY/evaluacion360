<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Guayaquil');
 require_once '../helpers/config.php';
 require_once '../helpers/User.class.php';
  require_once '../helpers/Categoria.class.php';
  require_once '../helpers/Cargos.class.php';
  require_once '../helpers/Opciones.class.php';
  require_once '../helpers/Jerarquia.class.php';





 
  
    if($_POST["operation"] == "Guardar")
    {
    	  $user= new User();
    	  
            $categoria=$user->guardarIndicadores($_POST['detalleIndicador'],$_POST['idCategoria']);  
    }
    else if ($_POST["operation"] == "Edit")
    {
    	$user= new User();
  
          $categoria=$user->actualizarIndicadores($_POST['user_id'],$_POST['detalleIndicador'],$_POST['idCategoria']);

          echo ($categoria);
    }
    else if ($_POST["operation"] == "Guardar Categoria")

    {
       $categoria= new Categoria();
            $categorias=$categoria->guardarCategoria($_POST['detalleCategoria']);  

    }
    else if($_POST["operation"] == "Editar Categoria")
    {
           $categoria= new Categoria();
           $categorias=$categoria->actualizarCategorias($_POST['user_id'],$_POST['detalleCategoria']);  
    }

       else if ($_POST["operation"] == "Guardar Cargo")

    {
       $cargo= new Cargos();
            $cargos=$cargo->guardarCargo($_POST['detalleCargo']);  

    }
    else if($_POST["operation"] == "Editar Cargo")
    {
           $cargo= new Cargos();
           $cargos=$cargo->actualizarCargos($_POST['user_id'],$_POST['detalleCargo']);  
    }

     else if ($_POST["operation"] == "Guardar Opciones")

    {
       $opcion= new  Opciones();
            $opciones=$opcion->guardarOpciones($_POST['detalleOpcionesRes']);  

    }
    else if($_POST["operation"] == "Editar Opciones")
    {
       $opcion= new  Opciones();
           $opciones=$opcion->actualizarOpciones($_POST['user_id'],$_POST['detalleOpcionesRes']);  
    }

     else if ($_POST["operation"] == "Guardar Jerarquia")

    {
       $jerar= new  Jerarquia();
            $jerarquia=$jerar->guardarJerarquia($_POST['detalleJerarquia']);  

    }
    else if($_POST["operation"] == "Editar Jerarquia")
    {
       $jerar= new  Jerarquia();
           $jerarquia=$jerar->actualizarJerarquia($_POST['user_id'],$_POST['detalleJerarquia']);  
    }







 ?>