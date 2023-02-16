<?php
$serverName="localhost";
$usuario="root";
$password="";
$dataBaseName="tienda_parroquial";

try {
	$conexion = new PDO("mysql:host=$serverName;dbname=$dataBaseName", $usuario, $password);	
	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 	 	 	 	
} catch (PDOException $e) {
	echo $e->getMessage();	
}

function obtenerArraySQL($conexion, $sql){
	$stmt = $conexion->prepare($sql);
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

	//return new RecursiveArrayIterator($stmt->fetchAll());
	return $stmt->fetchAll();
}

function simplificarArray($conexion, $sql, $columna){
	$arrayComplejo = obtenerArraySQL($conexion, $sql);

	$array = [];
	foreach($arrayComplejo as $i){
		array_push($array,$i[$columna]);
	}
	return $array;
}
?>
