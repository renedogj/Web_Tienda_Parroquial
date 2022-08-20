<?php
$IdCategoria = $_POST["IdCategoria"];
include_once "../db/db.php";

$sql="SELECT nombre_categoria,mostrar_categoria from categorias where id = $IdCategoria";
$categoria = obtenerArraySQL($conexion, $sql);

echo json_encode($categoria[0]);
?>