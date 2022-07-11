<?php
include_once "../db/db.php";

$sql="SELECT ID, nombre_categoria,mostrar_categoria from categorias";
$categorias = obtenerArraySQL($conexion, $sql);
//var_dump($categorias);

echo json_encode($categorias);
?>