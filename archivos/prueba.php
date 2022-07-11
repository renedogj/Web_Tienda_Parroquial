<?php
include "conexion.php";
$idProducto = $_POST['idProducto'];

$con=mysqli_connect($servidor,$usuario,$contrasena);
$conectado=mysqli_select_db($con,$baseDeDatos);

$sql="SELECT id,nombre,descripcion,precio,mostrar,disponibilidad FROM productos where ID='$idProducto'";

$result = $con->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		$productos[] = array_map('utf8_encode',$row);
	}
}

echo json_encode($productos);
?>