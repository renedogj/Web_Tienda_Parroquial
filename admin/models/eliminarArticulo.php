<?php
include_once "../../db/db.php";

if(isset($_POST["id"])){
	$id = $_POST["id"];
	$sql = "DELETE from relacion_producto_categoria where ID_producto = $id";
	$conexion->exec($sql);

	$sql = "DELETE from relacion_producto_imagen where ID_producto = $id";
	$conexion->exec($sql);

	$sql = "DELETE from articulos where ID = $id";
	$conexion->exec($sql);
}
?>