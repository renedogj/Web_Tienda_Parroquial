<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
include_once "../../db/db.php";
$json = [];

try {
	$sql = "DELETE FROM IMAGENES Where ID = $id";
	$conexion->exec($sql);
	$json["error"] = false;

	unlink("../../imagenes/" . $nombre);

} catch (PDOException $e) {
	if($e->getCode() == 23000){
		$json["error"] = true;
	}
}

echo json_encode($json);
?>