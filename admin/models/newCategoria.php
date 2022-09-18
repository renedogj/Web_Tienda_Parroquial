<?php
include_once "../../db/db.php";

if(isset($_POST["nombreCategoria"])){
	$nombre = trim($_POST["nombreCategoria"]);
	$nombre = cambiarAcute(ucfirst(strtolower($nombre)));
	$mostrar = $_POST["mostrar"];
	if($mostrar == ""){
		$mostrar = "0";
	}
	$sql = "INSERT into categorias (nombre_categoria, mostrar_categoria) values ('$nombre','$mostrar')";
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