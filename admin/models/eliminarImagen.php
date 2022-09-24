<?php
//$id = $_POST['id'];
include_once "../../db/db.php";
$id = 1;
$json = [];

try {
	$sql = "DELETE FROM IMAGENES Where ID = $id";
	$conexion->exec($sql);
	$json["error"] = false; 	 	 	
} catch (PDOException $e) {
	if($e->getCode() == 23000){
		$json["error"] = true;
	}
}

echo json_encode($json);
?>