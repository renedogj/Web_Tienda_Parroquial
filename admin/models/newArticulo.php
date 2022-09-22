<?php
include_once "../../db/db.php";

if(isset($_POST["nombre"])){
	$nombre = trim($_POST["nombre"]);
	$nombre = cambiarAcute(strtoupper($nombre));
	$descripcion = trim($_POST["descripcion"]);
	$descripcion = cambiarAcute(ucfirst($descripcion));
	$precio = trim($_POST["precio"]);
	$mostrar = $_POST["mostrar"];
	($mostrar) ? $mostrar = 1 : $mostrar = 0;
	$disponibilidad = trim($_POST["disponibilidad"]);

	$sql = "INSERT into articulos (nombre, descripcion, precio, mostrar, disponibilidad) values ('$nombre', '$descripcion', $precio, $mostrar, $disponibilidad);";
	$conexion->exec($sql);

	$id = $conexion->lastInsertId();
	
	if(isset($_POST["categorias"])){
		$categorias = $_POST["categorias"];
		$sql = "INSERT into relacion_producto_categoria (ID_producto,ID_categoria) values";
		foreach ($categorias as $categoria) {
			$sql .= ", (".$id.",".$categoria.")";
		}
		$sql = str_replace("values,", "values", $sql);
		$conexion->exec($sql);
	}

	if(isset($_POST["imagenes"])){
		$imagenes = $_POST["imagenes"];
		$sql = "INSERT into relacion_producto_imagen (ID_producto,ID_imagen) values";
		foreach ($imagenes as $imagen) {
			$sql .= ", (".$id.",".$imagen.")";
		}
		$sql = str_replace("values,", "values", $sql);
		$conexion->exec($sql);
	}
}

function cambiarAcute($string){
	$string = str_replace("á", "&aacute", $string);
	$string = str_replace("é", "&eacute", $string);
	$string = str_replace("í", "&iacute", $string);
	$string = str_replace("ó", "&oacute", $string);
	$string = str_replace("ú", "&uacute", $string);
	$string = str_replace("Á", "&Aacute", $string);
	$string = str_replace("É", "&Eacute", $string);
	$string = str_replace("Í", "&Iacute", $string);
	$string = str_replace("Ó", "&Oacute", $string);
	$string = str_replace("Ú", "&Uacute", $string);
	return $string;
}
?>