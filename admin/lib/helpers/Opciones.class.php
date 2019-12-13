<?php 
require_once 'User.class.php';
    class Opciones extends User
    {
         function __construct() {
           parent::__construct();
      
         }
      function opcionesMostrar()
      {
          $check = "SELECT idOpcionesRes, detalleOpcionesRes from opcionesrespuestas";
          $checkCar= $this->db->query($check);
          return $checkCar;
   
      }
          function guardarOpciones($detalleOpcionesRes)
    {

          $querySCargo="INSERT INTO opcionesrespuestas(detalleOpcionesRes) VALUES('".$detalleOpcionesRes."') ";
          $querySCargo= $this->db->query($querySCargo);
          if(!empty($querySCargo))
                {
                   echo "Correcto";
                }
                else
                {
                  echo "Incorrecto";
                }

    }
     function opcionesMostrarSingle($user_id)
    {
   
   
        $checkCargos = "SELECT idOpcionesRes , detalleOpcionesRes from opcionesrespuestas where idOpcionesRes='".$user_id."'";
      
        $checkCar= $this->db->query($checkCargos);
    
 
  
    
       return $checkCar;
    }

     function actualizarOpciones($user_id,$detalleOpcionesRes)
    {
        $query = "UPDATE opcionesrespuestas SET detalleOpcionesRes='".$detalleOpcionesRes."' WHERE idOpcionesRes='".$user_id."'";
      //  echo $query;
                $update = $this->db->query($query);
                if(!empty($query))
                {
                   echo "Correcto";
                }
                else
                {
                  echo "Incorrecto";
                }
    }

    }
 ?>