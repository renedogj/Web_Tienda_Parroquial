<?php
include_once "../../db/db.php";

if(isset($_POST["idCategoria"])){
	$idCategoria = $_POST["idCategoria"];
	$nombre = trim($_POST["nombre"]);
	$nombre = cambiarAcute(ucfirst(strtolower($nombre)));
	$mostrar = $_POST["mostrar"];

	$mostrar ? $mostrar = 1 : $mostrar = 0;

	$sql = "UPDATE categorias set nombre_categoria='$nombre', mostrar_categoria='$mostrar' where ID=$idCategoria";
	$conexion->exec($sql);

	$sql = "UPDATE articulos set mostrar=$mostrar where ID in (select ID_producto from relacion_producto_categoria where ID_categoria=$idCategoria)";
	$conexion->exec($sql);
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