<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Listado Imagenes</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<link rel="shortcut icon" type="png" href="../../imagenes/parroquia_200x200.jpg">

	<link rel="stylesheet" type="text/css" href="../../css/body.css">
	<link rel="stylesheet" type="text/css" href="../../css/menuAdministracion.css">
	<link rel="stylesheet" type="text/css" href="../../css/listadoImagenes.css">
</head>
<body>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
	<script type="text/javascript" src="../../db/firebaseConfig.js"></script>
	<?php
	include "../views/barraNavegacion.php";
	?>
	<div class="form-añadir-imagen">
		<form action="procesarAñadirImagen.php" method="post" enctype="multipart/form-data">
			<p>Añadir una imagen nueva:</p>
			<input type="file" name="foto" id="foto" required />
			<input type="submit" name="submit" id="submit" value="Añadir imagen"/>
		</form>
	</div>
	<div class="imagenes" id="contenedoraImagenes"></div>

	<script type="text/javascript" src="listadoImagenes.js"></script>
	<script type="text/javascript">
		function mostrarAñadirImagen(){
			if($(".form-añadir-imagen").css("display") == "none"){
				$(".imagenes").css("margin-top",0);
				$(".form-añadir-imagen").css("margin-top",$("nav").height());
				$(".form-añadir-imagen").css("display","block");
			}else{
				$(".imagenes").css("margin-top",$("nav").height());
				$(".form-añadir-imagen").css("margin-top",0);
				$(".form-añadir-imagen").css("display","none");
			}
		}
	</script>
	<script type="text/javascript" src="ajustarTamaños.js"></script>
</body>
</html>