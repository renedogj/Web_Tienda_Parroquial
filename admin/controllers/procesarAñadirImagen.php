<!DOCTYPE html>
<html>
	<head>
		<title>listadoImagenes</title>
		<link rel="shortcut icon" type="png" href="../imagenes/parroquia_200x200.jpg">
	</head>
	<body>
		<?php
			$target_dir = "../imagenes/";
			$target_file = $target_dir . basename($_FILES["foto"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["foto"]["tmp_name"]);
				if($check !== false) {
					$uploadOk = 1;
				} else {
					echo "<p>El archivo no es una imagen</p>";
					$uploadOk = 0;
				}
			}

			// Check if file already exists
			if (file_exists($target_file)) {
				echo "<p>El archivo ya existe</p>";
				$uploadOk = 0;
			}

			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "<p>Lo siento, solo estan permitidos archivos con las JPG, JPEG, PNG o GIF</p>";
				$uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "<p>Lo siento, no se ha podido subir la foto<p>
					<button onclick=\"window.location.assign('listadoImagenes.php')\">Volver</button>";
			} else {
				if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
					echo "<p>The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.</p>";
					include("conexion.php");
					$con=mysqli_connect($servidor,$usuario,$contrasena);
					$conectado=mysqli_select_db($con,$baseDeDatos);
					$nombre = $_FILES["foto"]["name"];
					$sql = "INSERT into imagenes (nombre_foto) values ('$nombre')";
			        mysqli_query($con,$sql);
			        echo "<script>window.location.assign('listadoImagenes.php');</script>";
				}else{
					echo "<p>Lo siento, ha ocurrido un error al subir la foto</p>
					<button onclick=\"window.location.assign('listadoImagenes.php')\">Volver</button>";
				}
			}
		?>
	</body>
</html>

