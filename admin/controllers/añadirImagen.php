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
	<link rel="stylesheet" type="text/css" href="../../css/addImagenes.css">
</head>
<body>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
	<script type="text/javascript" src="../../db/firebaseConfig.js"></script>
	<?php
	include "../views/barraNavegacion.php";
	?>
	<div class="contenedora-form-addimagen">
		<h1>Añadir una imagen nueva:</h1>
		<div class="contenedora-imagen contenedora-imgTemporal" id="contenedora-imagen">
			<div class="imagen div-imgTemporal">
				<img id="imgTemporal" src="../../imagenes/20210307_190652.jpg">
			</div>
		</div>
		<div class="form-addImagen">
			<input type="file" name="inputFoto" id="inputFoto" required />
			<br>
			<input type="text" name="inputNombreFoto" id="inputNombreFoto"/>
			<br>
			<label id="inputNombreFoto-error" class="error" for="inputNombreFoto"></label>
			<button id="bttnSubirImagen" class="button">Añadir Imagen</button>
		</div>
	</div>
	<div id="result"></div>
	<script type="text/javascript" src="añadirImagen.js"></script>
	<script type="text/javascript" src="ajustarTamaños.js"></script>
</body>
</html>