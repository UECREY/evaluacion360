<?php 
require_once 'User.class.php';
    class Jerarquia extends User
    {
         function __construct() {
           parent::__construct();
      
         }
      function jerarquiaMostrar()
      {
          $check = "SELECT idJerarquia, detalleJerarquia from jerarquia";
          $checkCar= $this->db->query($check);
          return $checkCar;
   
      }
          function guardarJerarquia($detalleJerarquia)
    {

          $querySCargo="INSERT INTO jerarquia(detalleJerarquia) VALUES('".$detalleJerarquia."') ";
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
     function jerarquiaMostrarSingle($user_id)
    {
   
   
        $checkCargos = "SELECT idJerarquia , detalleJerarquia from jerarquia where idJerarquia='".$user_id."'";
      
        $checkCar= $this->db->query($checkCargos);
    
 
  
    
       return $checkCar;
    }

     function actualizarJerarquia($user_id,$detalleJerarquia)
    {
        $query = "UPDATE jerarquia SET detalleJerarquia='".$detalleJerarquia."' WHERE idJerarquia='".$user_id."'";
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