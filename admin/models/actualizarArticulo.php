<?php
include_once "../../db/db.php";

$id = $_POST["id"];
$nombre = trim($_POST["nombre"]);
$nombre = cambiarAcute(strtoupper($nombre));
$descripcion = trim($_POST["descripcion"]);
$descripcion = cambiarAcute(ucfirst($descripcion));
$precio = trim($_POST["precio"]);
$mostrar = $_POST["mostrar"];
($mostrar) ? $mostrar = "1" : $mostrar = "0";
$disponibilidad = trim($_POST["disponibilidad"]);

$sql = "UPDATE articulos set nombre='$nombre', Descripcion='$descripcion', Precio=$precio, mostrar='$mostrar', disponibilidad='$disponibilidad' where ID=$id";
$conexion->exec($sql);

$sql = "DELETE from relacion_producto_categoria where ID_producto = $id";
$conexion->exec($sql);

if(isset($_POST["categorias"])){
	$categorias = $_POST["categorias"];
	$sql = "INSERT into relacion_producto_categoria (ID_producto,ID_categoria) values";
	foreach ($categorias as $categoria) {
		$sql .= " (".$id.",".$categoria.")";
	}
	$conexion->exec($sql);
}

$sql = "DELETE from relacion_producto_imagen where ID_producto = $id";
$conexion->exec($sql);

if(isset($_POST["imagenes"])){
	$imagenes = $_POST["imagenes"];
	$sql = "INSERT into relacion_producto_imagen (ID_producto,ID_imagen) values";
	foreach ($imagenes as $imagen) {
		$sql .= " (".$id.",".$imagen.")";
	}
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

//En caso de que no tenga id y si nombre se crea un nuevo articulo
/*if(isset($_POST["nombreProducto"])){
	$nombre = trim($_POST["nombreProducto"]);
	$nombre = cambiarAcute(strtoupper($nombre));
	$descripcion = trim($_POST["descripcion"]);
	$descripcion = cambiarAcute(ucfirst($descripcion));
	$precio = trim($_POST["precio"]);
	$mostrar = $_POST["mostrar"];
	if($mostrar == ""){
		$mostrar = "0";
	}
	$disponibilidad = trim($_POST["disponibilidad"]);

	$sql = "INSERT into articulos (nombre, descripcion, precio, mostrar, disponibilidad) values ('$nombre', '$descripcion', $precio, $mostrar, $disponibilidad);";
	$conexion->exec($sql);
	$idProducto = mysqli_insert_id($con);

		//Añadir Categorias
	$numCategorias = $_POST["numCategorias"];
	$categorias = array();
	for($i=0;$i<=$numCategorias;$i++){
		$strInputCategoria = "input-categoria-$i";
		if(isset($_POST[$strInputCategoria])==1){
			array_push($categorias,$_POST[$strInputCategoria]);
		}
	}

	for($x=0; $x<count($categorias); $x++) {
		$sql = "INSERT into relacion_producto_categoria (ID_producto,ID_categoria) values ($idProducto,$categorias[$x])";
		$conexion->exec($sql);
	}

		//Añadir Imagenes
	$numImagenes = $_POST["hiddenContadorImagenes"];
	$imagenes = array();
	for($i=0;$i<$numImagenes;$i++){
		$strInputImagen = "input-imagen-$i";
		if(isset($_POST[$strInputImagen])==1){
			array_push($imagenes,$_POST[$strInputImagen]);
		}
	}

	for($x=0; $x<count($imagenes); $x++) {
		$sql = "INSERT into relacion_producto_imagen (ID_producto,ID_imagen) values ($idProducto,$imagenes[$x])";
		$conexion->exec($sql);
	}
}*/
?>