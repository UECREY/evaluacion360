<?php 
require_once 'User.class.php';
    class Categoria extends User
    {
         function __construct() {
           parent::__construct();
      
         }
      function categoriasMostrar()
      {
          $checkCategorias = "SELECT idCategoria, detalleCategoria from categoria";
          $checkCat= $this->db->query($checkCategorias);
          return $checkCat;
   
      }
          function guardarCategoria($detalleCategoria)
    {

          $querySCategoria="INSERT INTO categoria(detalleCategoria) VALUES('".$detalleCategoria."') ";
          $querySCategoria= $this->db->query($querySCategoria);
    }
     function categoriasMostrarSingle($user_id)
    {
   
   
        $checkCategorias = "SELECT idCategoria , detalleCategoria from categoria where idCategoria='".$user_id."'";
      
        $checkCat= $this->db->query($checkCategorias);
    
 
  
    
       return $checkCat;
    }

     function actualizarCategorias($user_id,$detalleCategoria)
    {
        $query = "UPDATE categoria SET detalleCategoria='".$detalleCategoria."' WHERE idCategoria='".$user_id."'";
      //  echo $query;
                $update = $this->db->query($query);
                if(!empty($query))
                {
                   echo "Datos actualizados";
                }
    }

    }
 ?>