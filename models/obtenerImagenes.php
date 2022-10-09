<?php
$gruposImagenes = array(
		"proyecto"=>array(),
		"talleres"=>array()
	);

foreach($gruposImagenes as $grupo => $x){
	$imagenes = scandir("../imagenes/" . $grupo, 1);
	array_pop($imagenes);
	array_pop($imagenes);
	$gruposImagenes[$grupo] = $imagenes;
}

echo json_encode($gruposImagenes);
?>