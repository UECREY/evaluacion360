<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once '../helpers/config.php';
require_once '../helpers/Jerarquia.class.php';
$jerarquia = new Jerarquia();
$output=array();
//echo "HOLA";
$jerar=$jerarquia->jerarquiaMostrarSingle($_POST["user_id"]);


while($row = $jerar->fetch_array())
{
      $rows[] = $row;

}
foreach ($rows as $row) {
  $output["detalleJerarquia"] = $row["detalleJerarquia"];
  
}
 echo json_encode($output);
 ?>