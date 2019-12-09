<?php 
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);
require_once '../login/config.php';
require_once '../login/User.class.php';
$user = new User();
$output=array();
$indicadores=$user->indicadoresMostrar();

$data = array();
while($row = $indicadores->fetch_array())
{
      $rows[] = $row;

}
foreach ($rows as $row) {
 $sub_array = array();
     $sub_array[]=$row['detalleIndicador'];
	 $sub_array[] = '<button type="button" name="update" disabled id="'.$row["idindicador"].'" class="btn btn-warning btn-xs update">Update</button>';
	  $data[] = $sub_array;
}
$output = array(

"recordsTotal"  =>  2,
 "recordsFiltered" => 2,
 "data"    => $data
);
echo json_encode($output,JSON_UNESCAPED_UNICODE);

 ?>