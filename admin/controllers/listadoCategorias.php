<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Listado Categorias</title>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<link rel="shortcut icon" type="png" href="../../imagenes/parroquia_200x200.jpg">
		
		<link rel="stylesheet" type="text/css" href="../../css/body.css">
		<link rel="stylesheet" type="text/css" href="../../css/menuAdministracion.css">
		<link rel="stylesheet" type="text/css" href="../../css/tienda.css">
		<link rel="stylesheet" type="text/css" href="../../css/animacionImagenes.css">
		<link rel="stylesheet" type="text/css" href="../../css/listadoCategorias.css">
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
                	//window.location.assign("iniciarSesion.php");
                }
            });

            function cerrarSesion(){
                firebase.auth().signOut();
            }
		</script>
		<?php
			include_once "../../db/db.php";
			//include("conexion.php");
			/*$con=mysqli_connect($servidor,$usuario,$contrasena);
			$conectado=mysqli_select_db($con,$baseDeDatos);
			if(!$conectado){
				echo '<script>alert("ERROR");</script>';
			}*/

			/*if(isset($_POST["idCategoria"])){
				$idCategoria = $_POST["idCategoria"];
				$nombre = trim($_POST["nombre"]);
				$nombre = cambiarAcute(ucfirst(strtolower($nombre)));
				$mostrar = $_POST["mostrar"];
				if($mostrar == ""){
					$mostrar = "0";
				}

				$sql = "UPDATE categorias set nombre_categoria='$nombre', mostrar_categoria='$mostrar' where ID=$idCategoria";
	            mysqli_query($con,$sql);

				$sql = "UPDATE productos set mostrar=$mostrar where ID in (select ID_producto from relacion_producto_categoria where ID_categoria=$idCategoria)";
				mysqli_query($con,$sql);
			}
			
			if(isset($_POST["nombreCategoria"])){
				$nombre = trim($_POST["nombreCategoria"]);
				$nombre = cambiarAcute(ucfirst(strtolower($nombre)));
				$mostrar = $_POST["mostrar"];
				if($mostrar == ""){
					$mostrar = "0";
				}
				$sql = "INSERT into categorias (nombre_categoria, mostrar_categoria) values ('$nombre','$mostrar')";
	            mysqli_query($con,$sql);
			}*/

			function cambiarAcute($string){
				$string = str_replace("á", "&aacute", $string);
				$string = str_replace("é", "&eacute", $string);
				$string = str_replace("í", "&iacute", $string);
				$string = str_replace("ó", "&oacute", $string);
				$string = str_replace("ú", "&uacute", $string);
				$string = str_replace("Á", "&Aacute", $string);
				$string = str_replace("É", "&Eacute", $string);
				$string = str_replace("Í", "&Iacute", $string);
				$string = str_replace("Ó", "&Oacute", $string);
				$string = str_replace("Ú", "&Uacute", $string);
				return $string;
			}
		?>
		<nav class="navbar">
			<div class="container-fluid">
				<div class="div-menu-izquierda">
					<div class="navbar-header">
						<a class="navbar-brand" href="../index.php">Mercadillo Parroquial</a>
					</div>
					<ul class="ul-navbar">
						<li><a href="listadoProductos.php">Productos</a></li>
						<li class="selecionado"><a href="listadoCategorias.php">Categorias</a></li>
						<li><a href="listadoImagenes.php">Imagenes</a></li>
					</ul>
				</div>
				<div class="div-menu-derecha">
					<div class="div-añadir">
						<div class="div-contenedor-añadir">
							<a href="añadirCategoria.php">Añadir Categoria</a>
						</div>
					</div>
					<div class="div-usuario dropdown">
						<div class="div-icono-usuario">
							<i></i>
							<div class="dropdown-content"></div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div class="categorias">
			<table id="tablaCategorias">
				<tr>
					<th colspan=3>CATEGORIAS</th>
				</tr>
			</table>
		</div>
		<script type="text/javascript">
			$.ajax({
				method: "POST",
				url: "../../models/obtenerCategorias.php",
				success: function(categorias){
					console.log(categorias);
					let textoMostrarCategoria;
					for(let i in categorias){
						if(categorias[i].mostrar_categoria != 0){
							textoMostrarCategoria = "Si se muestran los articulos de esta categoria";
						}else{
							textoMostrarCategoria = "No se muestran los articulos de esta categoria";
						}

						$("#tablaCategorias").append(
							$("<tr>").append(
								$("<td>").append(
									$("<button>").text("Editar").click(() => {
										window.location.assign("editarCategoria.php?id="+categorias[i].Id);
									})
								),
								$("<td>").text(categorias[i].nombre_categoria),
								$("<td>").text(textoMostrarCategoria)
							)
						)
					}
				},
				dataType: "json"
			});

			ajustarTamaño();
			function ajustarTamaño(){
				$(".div-icono-usuario").css("height",$(".div-icono-usuario").width());
				$(".dropdown-content").css("top",$(".div-usuario").height()-7);
				$(".dropdown-content").css("left",-($(".div-usuario").width()+130));
				$(".categorias").css("margin-top",$("nav").height());
			}
		</script>
	</body>
</html>