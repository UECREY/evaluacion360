<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once '../helpers/config.php';
require_once '../helpers/Categoria.class.php';
$cat = new Categoria();
$output=array();
//echo "HOLA";
$categoriaS=$cat->categoriasMostrarSingle($_POST["user_id"]);


while($row = $categoriaS->fetch_array())
{
      $rows[] = $row;

}
foreach ($rows as $row) {
  $output["detalleCategoria"] = $row["detalleCategoria"];
  
}
 echo json_encode($output);
 ?>