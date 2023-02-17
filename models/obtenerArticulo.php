<?php
$idArticulo = $_POST["idArticulo"];

include_once "../db/db.php";

$sql = "SELECT nombre_foto FROM imagenes WHERE ID in (SELECT ID_imagen FROM relacion_producto_imagen WHERE ID_producto = '$idArticulo')";
$imagenes = simplificarArray($conexion, $sql, "nombre_foto");

$sql = "SELECT nombre_categoria FROM categorias WHERE ID in (SELECT ID_categoria FROM relacion_producto_categoria WHERE ID_producto = '$idArticulo')";
$categorias = simplificarArray($conexion, $sql, "nombre_categoria");

$sql="SELECT id, nombre, descripcion, precio, mostrar, disponibilidad FROM articulos WHERE id='$idArticulo'";
$articulo = obtenerArraySQL($conexion, $sql)[0];

$articulo["imagenes"] = $imagenes;
$articulo["categorias"] = $categorias;
echo json_encode($articulo);
?>	