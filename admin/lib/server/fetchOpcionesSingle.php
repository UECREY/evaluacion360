<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once '../helpers/config.php';
require_once '../helpers/Opciones.class.php';
$car = new Opciones();
$output=array();
//echo "HOLA";
$cargoS=$car->opcionesMostrarSingle($_POST["user_id"]);


while($row = $cargoS->fetch_array())
{
      $rows[] = $row;

}
foreach ($rows as $row) {
  $output["detalleOpcionesRes"] = $row["detalleOpcionesRes"];
  
}
 echo json_encode($output);
 ?>