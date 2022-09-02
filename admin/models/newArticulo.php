<?php
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