<?php
include_once "../../db/db.php";
$sql = "SELECT id,nombre_foto FROM imagenes";

$imagenes = obtenerArraySQL($conexion, $sql);

echo json_encode($imagenes);
?>