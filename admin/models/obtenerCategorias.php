<?php
include_once "../../db/db.php";

$sql="SELECT Id,nombre_categoria,mostrar_categoria FROM categorias";
$categorias = obtenerArraySQL($conexion, $sql);

echo json_encode($categorias);
?>