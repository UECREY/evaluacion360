<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once '../helpers/config.php';
require_once '../helpers/Jerarquia.class.php';
$opciones = new Jerarquia();
$output=array();
$op=$opciones->jerarquiaMostrar();

$data = array();
while($row = $op->fetch_array())
{
      $rows[] = $row;

}
foreach ($rows as $row) {
 $sub_array = array();
     $sub_array[]=$row['detalleJerarquia'];
    

	 $sub_array[] = '<button type="button" name="update" id="'.$row["idJerarquia"].'" class="btn btn-warning btn-xs update">Update</button>';
	  $data[] = $sub_array;
}
$output = array(

"recordsTotal"  =>  2,
 "recordsFiltered" => 2,
 "data"    => $data
);
echo json_encode($output,JSON_UNESCAPED_UNICODE);

 ?>