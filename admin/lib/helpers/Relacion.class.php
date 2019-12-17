<?php
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);
/* 
  Clase de conexión, insertar y actualizar datos de las credenciales de google 

*/

require_once 'User.class.php';

class Relacion extends User
{

      function __construct() {
           parent::__construct();
      
         }

          function relacionMostrar()
    {
        //echo $serial_alu;
   
        $check = "select idRelacionDep, eusuario1.apellido_epl as apellidousuario1, eusuario1.nombre_epl as nombreusuario1, eusuario2.apellido_epl as apellidousuario2, eusuario2.nombre_epl as nombreusuario2,detalleJerarquia FROM jerarquia,relaciondependencia left join profesor as usuario1 on usuario1.serial_pro=relaciondependencia.idUsuario left join empleado as eusuario1 on eusuario1.serial_epl=usuario1.serial_epl left join profesor as usuario2 on usuario2.serial_pro=relaciondependencia.IdUsuario2 left join empleado as eusuario2 on eusuario2.serial_epl=usuario2.serial_epl  WHERE jerarquia.idJerarquia=relaciondependencia.idJerarquia";
        //echo $checkCursoAlu;
      //  echo $checkIndicadores;
        $check= $this->db->query($check);
    
 
  
    
    return $check;
    }

}