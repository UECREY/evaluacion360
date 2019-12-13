<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once '../helpers/config.php';
require_once '../helpers/Cargos.class.php';
$car = new Cargos();
$output=array();
//echo "HOLA";
$cargoS=$car->cargosMostrarSingle($_POST["user_id"]);


while($row = $cargoS->fetch_array())
{
      $rows[] = $row;

}
foreach ($rows as $row) {
  $output["detalleCargo"] = $row["detalleCargo"];
  
}
 echo json_encode($output);
 ?>