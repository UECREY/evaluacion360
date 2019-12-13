<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once '../helpers/config.php';
require_once '../helpers/User.class.php';
$user = new User();
$output=array();
//echo "HOLA";
$indicadores=$user->indicadoresMostrarSingle($_POST["user_id"]);


while($row = $indicadores->fetch_array())
{
      $rows[] = $row;

}
foreach ($rows as $row) {
  $output["detalleIndicador"] = $row["detalleIndicador"];
  $output["idCategoria"] = $row["idCategoria"];
}
 echo json_encode($output);
 ?>