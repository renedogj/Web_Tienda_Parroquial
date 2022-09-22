<?php
$temp_dir = "../../temp";
$target_dir = "../../imagenes/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$nombreFoto = trim($_POST["nombreFoto"]) . "." . $imageFileType;


$result = [];
$check = getimagesize($_FILES["foto"]["tmp_name"]);
if($check !== false) {
	if (($_FILES["foto"]["type"] == "image/pjpeg")
		|| ($_FILES["foto"]["type"] == "image/jpeg")
		|| ($_FILES["foto"]["type"] == "image/png")
		|| ($_FILES["foto"]["type"] == "image/gif")) {	
		if(!file_exists($target_file)){
			if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
				rename($target_file,$target_dir.$nombreFoto);

				if(file_exists("../../temp")){
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
				echo $result["error"] = 0;
			}
		} else {
			echo $result["error"] = 1;
		}
	} else {
		echo $result["error"] = 0;
	}
} else {
	echo $result["error"] = 0;
}
echo json_encode($result);
?>

