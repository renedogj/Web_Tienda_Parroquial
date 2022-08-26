<?php
include_once "../../db/db.php";
if(isset($_POST["idProducto"])){
	$idProducto = $_POST["idProducto"];
	$nombre = trim($_POST["nombre"]);
	$nombre = cambiarAcute(strtoupper($nombre));
	$descripcion = trim($_POST["descripcion"]);
	$descripcion = cambiarAcute(ucfirst($descripcion));
	$precio = trim($_POST["precio"]);
	$mostrar = $_POST["mostrar"];
	if($mostrar == ""){
		$mostrar = "0";
	}
	$disponibilidad = trim($_POST["disponibilidad"]);

	$sql = "UPDATE articulos set nombre='$nombre', Descripcion='$descripcion', Precio=$precio, mostrar='$mostrar', disponibilidad='$disponibilidad' where ID=$idProducto";
	$conexion->exec($sql);

	//Modificar Categorias
	$numCategorias = $_POST["numCategorias"];
	$categorias = array();
	for($i=0;$i<=$numCategorias;$i++){
		$strInputCategoria = "input-categoria-$i";
		if(isset($_POST[$strInputCategoria])==1){
			array_push($categorias,$_POST[$strInputCategoria]);
		}
	}
	$sql = "DELETE from relacion_producto_categoria where ID_producto = $idProducto";
	$conexion->exec($sql);
	for($x=0; $x<count($categorias); $x++) {
		$sql = "INSERT into relacion_producto_categoria (ID_producto,ID_categoria) values ($idProducto,$categorias[$x])";
		$conexion->exec($sql);
	}

	//Modificar Imagenes
	$numImagenes = $_POST["hiddenContadorImagenes"];
	$imagenes = array();
	for($i=0;$i<$numImagenes;$i++){
		$strInputImagen = "input-imagen-$i";
		if(isset($_POST[$strInputImagen])==1){
			array_push($imagenes,$_POST[$strInputImagen]);
		}
	}
	$sql = "DELETE from relacion_producto_imagen where ID_producto = $idProducto";
	$conexion->exec($sql);
	for($x=0; $x<count($imagenes); $x++) {
		$sql = "INSERT into relacion_producto_imagen (ID_producto,ID_imagen) values ($idProducto,$imagenes[$x])";
		$conexion->exec($sql);
	}
}

if(isset($_POST["nombreProducto"])){
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