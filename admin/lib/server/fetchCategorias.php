<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once '../helpers/config.php';
require_once '../helpers/Categoria.class.php';
$categoria = new Categoria();
$output=array();
$categorias=$categoria->categoriasMostrar();

$data = array();
while($row = $categorias->fetch_array())
{
      $rows[] = $row;

}
foreach ($rows as $row) {
 $sub_array = array();
     $sub_array[]=$row['detalleCategoria'];
    

	 $sub_array[] = '<button type="button" name="update" id="'.$row["idCategoria"].'" class="btn btn-warning btn-xs update">Update</button>';
	  $data[] = $sub_array;
}
$output = array(

"recordsTotal"  =>  2,
 "recordsFiltered" => 2,
 "data"    => $data
);
echo json_encode($output,JSON_UNESCAPED_UNICODE);

 ?>