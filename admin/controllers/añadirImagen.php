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
		<p>Añadir una imagen nueva:</p>
		<input type="file" name="inputFoto" id="inputFoto" required />
		<button id="bttnSubirImagen">Añadir Imagen</button>
		<div class="div-contenedora-imagen" id="div-contenedora-imagen">
			<div class="contenedora-imagen">
				<div class="imagen">
					<img id="imgTemporal">
				</div>
			</div>
		</div>
		<input type="text" name="inputNombreFoto" id="inputNombreFoto"/>
		<label id="inputNombreFoto-error" class="error" for="inputNombreFoto"></label>
	</div>
	<div id="result"></div>
	<script type="text/javascript" src="añadirImagen.js"></script>
	<script type="text/javascript" src="ajustarTamaños.js"></script>
</body>
</html>