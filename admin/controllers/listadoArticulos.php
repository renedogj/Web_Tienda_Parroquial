<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Listado Articulos</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<link rel="shortcut icon" type="png" href="../imagenes/parroquia_200x200.jpg">

	<link rel="stylesheet" type="text/css" href="../../css/body.css">
	<link rel="stylesheet" type="text/css" href="../../css/menuAdministracion.css">
	<link rel="stylesheet" type="text/css" href="../../css/tienda.css">
	<link rel="stylesheet" type="text/css" href="../../css/animacionImagenes.css">
	<link rel="stylesheet" type="text/css" href="../../css/listadoArticulos.css">
</head>
<body>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
	<script type="text/javascript">
		var firebaseConfig = {
			apiKey: "AIzaSyD8INPLN05ja3GxHm-7r69zytBj_hQ75lM",
			authDomain: "pruebausuarios-81a47.firebaseapp.com",
			databaseURL: "https://pruebausuarios-81a47-default-rtdb.firebaseio.com",
			projectId: "pruebausuarios-81a47",
			storageBucket: "pruebausuarios-81a47.appspot.com",
			messagingSenderId: "928136037074",
			appId: "1:928136037074:web:a8ce760d154fa133daa30b",
			measurementId: "G-574YQRLJM6"
		};
		firebase.initializeApp(firebaseConfig);

		firebase.auth().onAuthStateChanged(function(user) {
			if(user){
				var email = user.email;
				$(".div-icono-usuario i").empty();
				$(".div-icono-usuario i").html(email.substr(0,1).toUpperCase());
				$(".dropdown-content").empty();
				$(".dropdown-content").append(
					$("<div>").addClass("dropdown-contenedora").append(
						$("<a>").addClass("cambiar-pwd").text("Cambiar contraseña").click(() => {cambiarContraseña()}),
						$("<a>").addClass("logout").text("Cerrar Sesión").click(() => {cerrarSesion()})
						)
					);
			}else{
				window.location.assign("iniciarSesion.php");
			}
		});

		function cerrarSesion(){
			firebase.auth().signOut();
		}
	</script>
	<?php
	include "../views/barraNavegacion.html";
	include_once "../views/listadoArticulos.html";
	?>
	<script type="text/javascript" src="listadoArticulos.js"></script>
	<script type="text/javascript" src="imagenes.js"></script>
</body>
</html>