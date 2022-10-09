<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listado Articulos</title>
	<link rel="shortcut icon" type="png" href="../../imagenes/general/parroquia_200x200.jpg">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../../css/body.css">
	<link rel="stylesheet" type="text/css" href="../../css/menuAdministracion.css">
	<link rel="stylesheet" type="text/css" href="../../css/tienda.css">
	<link rel="stylesheet" type="text/css" href="../../css/disponibilidad.css">
	<link rel="stylesheet" type="text/css" href="../../css/animacionImagenes.css">
	<link rel="stylesheet" type="text/css" href="../../css/listadoArticulos.css">
</head>
<body>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
	<script type="text/javascript" src="../../db/firebaseConfig.js"></script>
	<?php
	include "../views/barraNavegacion.php";
	include_once "../views/listadoArticulos.html";
	?>
	<script type="text/javascript" src="listadoArticulos.js"></script>
	<script type="text/javascript" src="ajustarTamaños.js"></script>
</body>
</html>