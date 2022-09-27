<?php
$result = [];
if(!file_exists("../../temp")){
	mkdir("../../temp");
}

$check = getimagesize($_FILES["foto"]["tmp_name"]);
if($check !== false) {
	if (($_FILES["foto"]["type"] == "image/pjpeg")
		|| ($_FILES["foto"]["type"] == "image/jpeg")
		|| ($_FILES["foto"]["type"] == "image/png")
		|| ($_FILES["foto"]["type"] == "image/gif")) {	

		if (move_uploaded_file($_FILES["foto"]["tmp_name"], "../../temp/".$_FILES["foto"]['name'])) {
			include_once "../../db/db.php";
			$nombre = $_FILES["foto"]['name'];
			$target_file = "../../imagenes/" . basename($nombre);

			$sql = "SELECT * from imagenes where nombre_foto='$nombre'";
			$result = obtenerArraySQL($conexion, $sql);
			if($result != [] || file_exists($target_file)){
				$result = $result[0];
				$result["existeFoto"] = true;
				$result["nombre_sinExtension"] = pathinfo($nombre, PATHINFO_FILENAME);
			}else{
				$result["nombre_foto"] = $nombre;
				$result["existeFoto"] = false;
				$result["nombre_sinExtension"] = pathinfo($nombre, PATHINFO_FILENAME);
			}
			$result["error"] = null;
		} else {
			$result["error"] = 0;
		}	
	} else {
		$result["error"] = 0;
	}
} else {
	$result["error"] = 0;
}
echo json_encode($result);
?>