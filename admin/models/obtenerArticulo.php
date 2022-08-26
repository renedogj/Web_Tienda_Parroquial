<?php
$idArticulo = $_POST['idArticulo'];
include_once "../../db/db.php";

$sql="SELECT id,nombre,descripcion,precio,mostrar,disponibilidad FROM articulos WHERE id = $idArticulo";

$articulo = obtenerArraySQL($conexion, $sql)[0];

$sql = "SELECT nombre_foto
	FROM relacion_producto_imagen
	LEFT JOIN imagenes on relacion_producto_imagen.ID_imagen = imagenes.ID
	WHERE relacion_producto_imagen.ID_producto = $idArticulo";

$articulo["imagenes"] = obtenerArraySQL($conexion, $sql);

echo json_encode($articulo);
?>