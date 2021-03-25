<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Listado Imagenes</title>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<link rel="shortcut icon" type="png" href="../imagenes/parroquia_200x200.jpg">
		
		<link rel="stylesheet" type="text/css" href="../css/body.css">
		<link rel="stylesheet" type="text/css" href="../css/menuAdministracion.css">
		<link rel="stylesheet" type="text/css" href="../css/listadoImagenes.css">
	</head>
	<body onresize="ajustarTamaño()">
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
                    $(".dropdown-content").html("<div class='dropdown-contenedora'>"+
	                    	"<a class='cambiar-pwd' onclick='cambiarContraseña'>Cambiar contraseña</a>"+
                    		"<a class='logout' onclick='cerrarSesion()'>Cerrar Sesión</a>"+
                    	"</div>");
                }else{
                	window.location.assign("iniciarSesion.php");
                }
            });

            function cerrarSesion(){
                firebase.auth().signOut();
            }
		</script>
		<nav class="navbar">
			<div class="container-fluid">
				<div class="div-menu-izquierda">
					<div class="navbar-header">
			    	<a class="navbar-brand" href="../index.php">Mercadillo Parroquial</a>
				    </div>
				    <ul class="ul-navbar">
					    <li><a href="listadoProductos.php">Productos</a></li>
					    <li><a href="listadoCategorias.php">Categorias</a></li>
					    <li class="selecionado"><a href="listadoImagenes.php">Imagenes</a></li>
				    </ul>
				</div>
				<div class="div-menu-derecha">
					<div class="div-añadir">
	                    <div class="div-contenedor-añadir">
	                        <a onclick="mostrarAñadirImagen()">Añadir Imagen</a>
	                    </div>
	                </div>
	                <div class="div-usuario dropdown">
	                    <div class="div-icono-usuario"><i></i></a>
	                    <div class="dropdown-content"></div>
	                </div>
				</div>
			</div>
		</nav>
		<div class="form-añadir-imagen">
			<form action="procesarAñadirImagen.php" method="post" enctype="multipart/form-data">
				<p>Añadir una imagen nueva:</p>
				<input type="file" name="foto" id="foto" required />
				<input type="submit" name="submit" id="submit"/>
			</form>
		</div>
		<div class="imagenes">
			<?php
				include("conexion.php");
				$con=mysqli_connect($servidor,$usuario,$contrasena);
				$conectado=mysqli_select_db($con,$baseDeDatos);
				if(!$conectado){
					echo '<script>alert("ERROR");</script>';
				}

				$sql="SELECT id,nombre_foto from imagenes order by ID DESC";
				$result = $con->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$idFoto = $row["id"];
						$nombreFoto = $row["nombre_foto"];
						echo '
						<div class="contenedora-imagen">
					<div class="imagen">
						<img src="../imagenes/'.$nombreFoto.'">
					</div>
					<div class="info-imagen">
						<p><b>ID:</b> '.$idFoto.'</p>
						<p><b>Nombre:</b> '.$nombreFoto.'</p>
					</div>
				</div>';
					}
				}
			?>
		</div>
		<script type="text/javascript">
			ajustarTamaño();
			function ajustarTamaño(){
				$(".div-icono-usuario").css("height",$(".div-icono-usuario").width());
				$(".dropdown-content").css("top",$(".div-usuario").height()-7);
				$(".dropdown-content").css("left",-($(".div-usuario").width()+130));
				$(".imagenes").css("margin-top",$("nav").height());
				if($(".form-añadir-imagen").css("display") == "none"){
					$(".form-añadir-imagen").css("margin-top",0);
					$(".imagenes").css("margin-top",$("nav").height());
				}else{
					$(".form-añadir-imagen").css("margin-top",$("nav").height());
					$(".imagenes").css("margin-top",0);
				}

				anchoImagen = $(".imagen").width();
				alturaImagen = anchoImagen*1.5;
				$(".imagen").css("height",alturaImagen);
			}

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
	</body>
</html>