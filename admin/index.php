<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Iniciar Sesión</title>
		<meta name=author content="Javier Renedo">
		
		<script src="https://cdnjs.cloudflarecom/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<link rel="shortcut icon" type="png" href="../imagenes/parroquia_200x200.jpg">
		
		<link rel="stylesheet" type="text/css" href="../css/body.css">
		<link rel="stylesheet" type="text/css" href="../css/menuAdministracion.css">
		<link rel="stylesheet" type="text/css" href="../css/iniciarSesionAdministracion.css"/>
	</head>
	<body>
		<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
		<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
		<script type="text/javascript" src="controllers/iniciarSesion.js"></script>

		<?php
		include_once "views/barraNavegacion.php";
		include_once "views/iniciarSesion.html";
		?>
	</body>
</html>