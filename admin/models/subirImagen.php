<?php
$temp_dir = "../../temp";
$target_dir = "../../imagenes/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$nombreFoto = trim($_POST["nombreFoto"]) . "." . $imageFileType;

if($nombreFoto != "" && strlen($nombreFoto) <= 50){
	$result = [];
	$check = getimagesize($_FILES["foto"]["tmp_name"]);
	if($check !== false) {
		if (($_FILES["foto"]["type"] == "image/pjpeg")
			|| ($_FILES["foto"]["type"] == "image/jpeg")
			|| ($_FILES["foto"]["type"] == "image/png")
			|| ($_FILES["foto"]["type"] == "image/gif")) {	
			if(!file_exists($target_file) && !file_exists($target_dir.$nombreFoto)){
				if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
					rename($target_file,$target_dir.$nombreFoto);

					if(file_exists($temp_dir)){
						$files= scandir($temp_dir);
						foreach ($files as $file) {
							if($file != "." && $file != ".."){
								unlink($temp_dir ."/" . $file);
							}
						}
						rmdir($temp_dir);
					}

					include_once "../../db/db.php";
					$sql = "INSERT into imagenes (nombre_foto) values ('$nombreFoto')";
					$conexion->exec($sql);

					$result["error"] = null;
				} else {
					$result["error"] = 0;
				}
			} else {
				$result["error"] = 1;
			}
		} else {
			$result["error"] = 0;
		}
	} else {
		$result["error"] = 0;
	}
} else {
	$result["error"] = 2;
}
echo json_encode($result);
?>

