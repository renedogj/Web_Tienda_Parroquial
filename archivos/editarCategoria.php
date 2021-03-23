<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Editar Categoria</title>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="../css/body.css">
		<link rel="stylesheet" type="text/css" href="../css/menuAdministracion.css">
		<link rel="stylesheet" type="text/css" href="../css/editarArticulos.css">
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
					    <li><a href="listadoImagenes.php">Imagenes</a></li>
				    </ul>
				</div>
				<div class="div-menu-derecha">
					<div class="div-añadir">
	                    <div class="div-contenedor-añadir">
	                        <a href="#">Añadir Categoria</a>
	                    </div>
	                </div>
	                <div class="div-usuario dropdown">
	                    <div class="div-icono-usuario"><i></i></a>
	                    <div class="dropdown-content"></div>
	                </div>
				</div>
			</div>
		</nav>
		<script type="text/javascript">
			<?php
				include("conexion.php");
				$con=mysqli_connect($servidor,$usuario,$contrasena);
				$conectado=mysqli_select_db($con,$baseDeDatos);
				if(!$conectado){
					echo 'alert("ERROR")';
				}
				$IDCategoria = $_GET["id"];
				$sql="SELECT nombre_categoria,mostrar_categoria from categorias where id = $IDCategoria";
				$result = $con->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$nombreCategoria = $row["nombre_categoria"];
						$mostrarCategoria = $row["mostrar_categoria"];					
					}
				}
			?>
			var IDCategoria = <?php echo "$IDCategoria"; ?>;
			var nombreCategoria = <?php echo "'$nombreCategoria'"; ?>;
			var mostrarCategoria = <?php echo "'$mostrarCategoria'"; ?>;
		</script>
		<div class="categoria">
			<form action="listadoCategorias.php" method="post">
				<div class="div-contenedora-info-articulo">
					<h3 id="idCategoriaTxt">ID: </h3>
					<input type="hidden" name="idCategoria" id="idCategoria">
					<div class="div-input div-text">
						<label for="nombre">Nombre de la categoria: </label><br>
						<input type="text" id="nombre" name="nombre"><br>
					</div>
					<div class="div-check">
						<input type="checkbox" id="mostrar" name="mostrar" onclick="cambioMostrar()" value="1">
						<label for="mostrar">La categoria se muestra</label><br>
					</div>
				</div>
				<div class="div-boton-editar">
					<button>EDITAR</button>
				</div>
			</form>
		</div>
		<script type="text/javascript">
			$("#idCategoriaTxt").text("ID: "+IDCategoria);
			$("#idCategoria").val(IDCategoria);
			nombreCategoria = cambiarATilde(nombreCategoria);
			$("#nombre").val(nombreCategoria);

			if(mostrarCategoria==1){
				$("#mostrar").attr("checked","checked");
				$("[for='mostrar']").empty();
				$("[for='mostrar']").text("Los articulos de esta categoria se muestran");
			}else{
				$("#mostrar").removeAttr("checked");
				$("[for='mostrar']").empty();
				$("[for='mostrar']").text("Los articulos de esta categoria no se muestran");
			}

			function cambioMostrar() {
				if($("#mostrar").prop("checked")){
					$("[for='mostrar']").empty();
					$("[for='mostrar']").text("Los articulos de esta categoria se muestran");
				}else{
					$("[for='mostrar']").empty();
					$("[for='mostrar']").text("Los articulos de esta categoria no se muestran");
				}
			}

			function cambiarATilde(string) {
				string = string.replace("&aacute","á");
				string = string.replace("&eacute","é");
				string = string.replace("&iacute","í");
				string = string.replace("&oacute","ó");
				string = string.replace("&uacute","ú");
				return string;
			}

			ajustarTamaño();
			function ajustarTamaño(){
				$(".div-icono-usuario").css("height",$(".div-icono-usuario").width());
				$(".dropdown-content").css("top",$(".div-usuario").height()-7);
				$(".dropdown-content").css("left",-($(".div-usuario").width()+130));
				$(".categoria").css("margin-top",$("nav").height());
			}
		</script>
	</body>
</html>