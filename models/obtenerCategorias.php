<?php
include_once "../db/db.php";

$sql="SELECT Id,nombre_categoria,mostrar_categoria FROM categorias WHERE mostrar_categoria = 1";
$categorias = obtenerArraySQL($conexion, $sql);

echo json_encode($categorias);
?>