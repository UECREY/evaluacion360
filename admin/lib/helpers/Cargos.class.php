<?php 
require_once 'User.class.php';
    class Cargos extends User
    {
         function __construct() {
           parent::__construct();
      
         }
      function cargosMostrar()
      {
          $check = "SELECT idCargo, detalleCargo from cargo";
          $checkCar= $this->db->query($check);
          return $checkCar;
   
      }
          function guardarCargo($detalleCargo)
    {

          $querySCargo="INSERT INTO cargo(detalleCargo) VALUES('".$detalleCargo."') ";
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
     function cargosMostrarSingle($user_id)
    {
   
   
        $checkCargos = "SELECT idCargo , detalleCargo from cargo where idCargo='".$user_id."'";
      
        $checkCar= $this->db->query($checkCargos);
    
 
  
    
       return $checkCar;
    }

     function actualizarCargos($user_id,$detalleCargo)
    {
        $query = "UPDATE cargo SET detalleCargo='".$detalleCargo."' WHERE idCargo='".$user_id."'";
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