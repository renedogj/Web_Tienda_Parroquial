<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Iniciar Sesión</title>
		<meta name=author content="Javier Renedo">
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<link rel="shortcut icon" type="png" href="../imagenes/parroquia_200x200.jpg">
		
		<link rel="stylesheet" type="text/css" href="../css/body.css">
		<link rel="stylesheet" type="text/css" href="../css/iniciarSesionAdministracion.css"/>
	</head>
	<body>
		<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
		<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
		<script>
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
  			// Initialize Firebase
  			firebase.initializeApp(firebaseConfig);

			function cerrarSesion(){
				firebase.auth().signOut();
			}

			function acceder () {
				var email = document.getElementById('correo').value;
		        var pass = document.getElementById('pass').value;

		        firebase.auth().signInWithEmailAndPassword(email, pass)
		        .then((user) => {
		        	$("#p-fallo-inicio").empty();
		        	window.location.href = "listadoProductos.php";
				})
		        .catch(function(error) {
		            $("#p-fallo-inicio").html("Usuario o Contraseña incorrecto");
		        });
			}
		</script>

		<nav id="barraNavegacion" class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
			    	<div class="div-contenedora-logoMenu">
						<a target="iframe" href="principal.html" id="logoA" class="logo">TIENDA PARROQUIAL</a>
						<a target="iframe" href="principal.html" id="logoB" class="logo">TIENDA PARROQUIAL</a>
					</div>
			    </div>
			</div>
		</nav>
		<div class="contenedora">
			<div class="div-contenedora-iniciosesion">
				<div class="iniciosesion">
					<div class="form-inicio-sesion">
						<h1>Iniciar Sesión</h1>
						<div class="div-contenedora-labelinput">
							<label for="correo">Correo electronico:</label>
							<input id="correo" type="email" size="50" maxlength="25" placeholder=" Correo electronico"/>
						</div>
						<div class="div-contenedora-labelinput">
							<label for="pass">Contraseña:</label>
							<input id="pass" type="password" size="50" maxlength="25" placeholder=" Contraseña"/>
						</div>
						<div class="div-fallo-inicio">
							<p id="p-fallo-inicio"></p>
						</div>
						<button onclick="acceder()" class="boton-iniciarsesion" id="boton" type="submit">Iniciar Sesión</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>