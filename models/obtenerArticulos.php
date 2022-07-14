<?php
$seleccionCategoria = $_POST['seleccionCategoria'];

$seleccionOrden = $_POST['seleccionOrden'];

if($seleccionCategoria != 0){
	$categoriaSql =" and articulos.ID in (select ID_producto from relacion_producto_categoria where ID_categoria=$seleccionCategoria)";
}else{
	$categoriaSql="";
}

switch ($seleccionOrden) {
	case 0:
	$ordenSql=" order by ID DESC";
	break;
	case 1:
	$ordenSql=" order by nombre";
	break;
	case 2:
	$ordenSql=" order by precio ASC";
	break;
	case 3:
	$ordenSql=" order by precio DESC";
	break;
	default:
	$ordenSql=" order by ID DESC";
}

include_once "../db/db.php";

$sql = "SELECT articulos.id,nombre_foto
	FROM articulos
	INNER JOIN relacion_producto_imagen on relacion_producto_imagen.ID_producto = articulos.id
	LEFT JOIN imagenes on relacion_producto_imagen.ID_imagen = imagenes.ID
	WHERE articulos.mostrar=1".$categoriaSql;


$stmt = $conexion->prepare($sql);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

while($result = $stmt->fetch()){
	if(!isset($imagenes[$result['id']])){
		$imagenes[$result['id']] = array();
	}
    array_push($imagenes[$result['id']],$result["nombre_foto"]);
}

$sql="SELECT id,nombre,descripcion,precio,disponibilidad from articulos where mostrar = 1".$categoriaSql.$ordenSql;

$stmt = $conexion->prepare($sql);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

$articulos = array();
while($articulo = $stmt->fetch()){ 
	$articulo["imagenes"] = $imagenes[$articulo['id']];
	array_push($articulos, $articulo);
}

echo json_encode($articulos);
?>