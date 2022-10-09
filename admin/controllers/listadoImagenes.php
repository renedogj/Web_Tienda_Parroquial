<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listado Imagenes</title>
	<link rel="shortcut icon" type="png" href="../../imagenes/general/parroquia_200x200.jpg">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../../css/body.css">
	<link rel="stylesheet" type="text/css" href="../../css/menuAdministracion.css">
	<link rel="stylesheet" type="text/css" href="../../css/listadoImagenes.css">
	<link rel="stylesheet" type="text/css" href="../../css/dialog.css">
</head>
<body>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
	<script type="text/javascript" src="../../db/firebaseConfig.js"></script>
	<?php
	include_once "../views/barraNavegacion.php";
	include "../views/eliminarImagenDialog.html";
	?>
	<div class="imagenes" id="contenedoraImagenes"></div>

	<script type="text/javascript" src="listadoImagenes.js"></script>
	<script type="text/javascript" src="ajustarTamaños.js"></script>
</body>
</html>