<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Listado Productos</title>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<link rel="shortcut icon" type="png" href="../imagenes/parroquia_200x200.jpg">

		<link rel="stylesheet" type="text/css" href="../css/body.css">
		<link rel="stylesheet" type="text/css" href="../css/menuAdministracion.css">
		<link rel="stylesheet" type="text/css" href="../css/tienda.css">
		<link rel="stylesheet" type="text/css" href="../css/animacionImagenes.css">
		<link rel="stylesheet" type="text/css" href="../css/listadoArticulos.css">
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
		<?php
			include("conexion.php");
			$con=mysqli_connect($servidor,$usuario,$contrasena);
			$conectado=mysqli_select_db($con,$baseDeDatos);
			if(!$conectado){
				echo '<script>alert("ERROR");</script>';
			}
			if(isset($_POST["idProducto"])){
				$idProducto = $_POST["idProducto"];
				$nombre = trim($_POST["nombre"]);
				$nombre = cambiarAcute(strtoupper($nombre));
				$descripcion = trim($_POST["descripcion"]);
				$descripcion = cambiarAcute(ucfirst($descripcion));
				$precio = trim($_POST["precio"]);
				$mostrar = $_POST["mostrar"];
				if($mostrar == ""){
					$mostrar = "0";
				}
				$disponibilidad = trim($_POST["disponibilidad"]);

				$sql = "UPDATE productos set nombre='$nombre', Descripcion='$descripcion', Precio=$precio, mostrar='$mostrar', disponibilidad='$disponibilidad' where ID=$idProducto";
	            mysqli_query($con,$sql);

	            //Modificar Categorias
				$numCategorias = $_POST["numCategorias"];
				$categorias = array();
				for($i=0;$i<=$numCategorias;$i++){
	                $strInputCategoria = "input-categoria-$i";
	                if(isset($_POST[$strInputCategoria])==1){
		                array_push($categorias,$_POST[$strInputCategoria]);
	                }
	            }
				$sql = "DELETE from relacion_producto_categoria where ID_producto = $idProducto";
	            mysqli_query($con,$sql);
	            for($x=0; $x<count($categorias); $x++) {
					$sql = "INSERT into relacion_producto_categoria (ID_producto,ID_categoria) values ($idProducto,$categorias[$x])";
	            	mysqli_query($con,$sql);
				}

				//Modificar Imagenes
				$numImagenes = $_POST["hiddenContadorImagenes"];
				$imagenes = array();
				for($i=0;$i<$numImagenes;$i++){
	                $strInputImagen = "input-imagen-$i";
	                if(isset($_POST[$strInputImagen])==1){
		                array_push($imagenes,$_POST[$strInputImagen]);
	                }
	            }
	            $sql = "DELETE from relacion_producto_imagen where ID_producto = $idProducto";
	            mysqli_query($con,$sql);
	            for($x=0; $x<count($imagenes); $x++) {
					$sql = "INSERT into relacion_producto_imagen (ID_producto,ID_imagen) values ($idProducto,$imagenes[$x])";
	            	mysqli_query($con,$sql);
				}
			}

			if(isset($_POST["nombreProducto"])){
				$nombre = trim($_POST["nombreProducto"]);
				$nombre = cambiarAcute(strtoupper($nombre));
				$descripcion = trim($_POST["descripcion"]);
				$descripcion = cambiarAcute(ucfirst($descripcion));
				$precio = trim($_POST["precio"]);
				$mostrar = $_POST["mostrar"];
				if($mostrar == ""){
					$mostrar = "0";
				}
				$disponibilidad = trim($_POST["disponibilidad"]);

				$sql = "INSERT into productos (nombre, descripcion, precio, mostrar, disponibilidad) values ('$nombre', '$descripcion', $precio, $mostrar, $disponibilidad);";
	            mysqli_query($con,$sql);
	            $idProducto = mysqli_insert_id($con);

	            //Añadir Categorias
				$numCategorias = $_POST["numCategorias"];
				$categorias = array();
				for($i=0;$i<=$numCategorias;$i++){
	                $strInputCategoria = "input-categoria-$i";
	                if(isset($_POST[$strInputCategoria])==1){
		                array_push($categorias,$_POST[$strInputCategoria]);
	                }
	            }

	            for($x=0; $x<count($categorias); $x++) {
					$sql = "INSERT into relacion_producto_categoria (ID_producto,ID_categoria) values ($idProducto,$categorias[$x])";
	            	mysqli_query($con,$sql);
				}

				//Añadir Imagenes
				$numImagenes = $_POST["hiddenContadorImagenes"];
				$imagenes = array();
				for($i=0;$i<$numImagenes;$i++){
	                $strInputImagen = "input-imagen-$i";
	                if(isset($_POST[$strInputImagen])==1){
		                array_push($imagenes,$_POST[$strInputImagen]);
	                }
	            }

	            for($x=0; $x<count($imagenes); $x++) {
					$sql = "INSERT into relacion_producto_imagen (ID_producto,ID_imagen) values ($idProducto,$imagenes[$x])";
	            	mysqli_query($con,$sql);
				}
			}

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
					    <li class="selecionado"><a href="listadoProductos.php">Productos</a></li>
					    <li><a href="listadoCategorias.php">Categorias</a></li>
					    <li><a href="listadoImagenes.php">Imagenes</a></li>
				    </ul>
				</div>
				<div class="div-menu-derecha">
					<div class="div-añadir">
	                    <div class="div-contenedor-añadir">
	                        <a href="añadirProducto.php">Añadir Producto</a>
	                    </div>
	                </div>
	                <div class="div-usuario dropdown">
	                    <div class="div-icono-usuario"><i></i></a>
	                    <div class="dropdown-content"></div>
	                </div>
				</div>
			</div>
		</nav>
		<div class="tienda">
		<script type="text/javascript">
		<?php
			$sql="SELECT COUNT(ID) from productos";
			$result=mysqli_query($con,$sql);
			$row = mysqli_fetch_array($result);
			$numArticulos = $row[0];
		?>
			var numArticulos= <?php echo $numArticulos; ?>;
			var numMaxArticulosPorLinea = 4;
			function calcularNumLineas (numArticulos) {
				let numLineasExactas = numArticulos/numMaxArticulosPorLinea;
				let numLineasCompletas = Math.floor(numLineasExactas);
				if(numLineasExactas>numLineasCompletas){
					numLineasCompletas++;
				}
				return numLineasCompletas;
			}
			var numLineas = calcularNumLineas(numArticulos);
			var articulos = new Array();
			var ids = new Array();
			var k = 0;

		<?php
			$sql="SELECT id,nombre,descripcion,precio,mostrar,disponibilidad from productos  order by ID DESC";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$IDArticulo = $row["id"];
					$nombreArticulo = $row["nombre"];
					$descripcion = $row["descripcion"];
					$precio = $row["precio"];
					$mostrar = $row["mostrar"];
					$disponibilidad = $row["disponibilidad"];

					$numFotos = 0;
					$fotos = array();
					$sqlImagenes="SELECT nombre_foto FROM imagenes where imagenes.ID in (SELECT ID_imagen from relacion_producto_imagen where ID_producto = '$IDArticulo')";
					$resultImagenes = $con->query($sqlImagenes);
					$j = 1;
					if ($resultImagenes->num_rows > 0) {
						while($row = $resultImagenes->fetch_assoc()){
							$fotos[$j] = $row["nombre_foto"];
							$numFotos++;
							$j++;
						}
					}
		?>
					var IDArticulo = <?php echo "$IDArticulo"; ?>;
					var nombreArticulo = <?php echo "'$nombreArticulo'"; ?>;
					var descripcion = <?php echo "'$descripcion'"; ?>;
					var precio = <?php echo "$precio"; ?>;
					var numFotos = <?php echo "$numFotos"; ?>;
					var fotos = new Array();
					var mostrar = <?php echo "$mostrar"; ?>;
					var disponibilidad = <?php echo "$disponibilidad"; ?>;
		<?php
					for($j=1;$j<=$numFotos;$j++){
						echo "fotos[$j]='$fotos[$j]';";
					}
		?>
					var indexarticulo = 1;
					var claseImagenesArticulo = 'imagenesArticulo'+ IDArticulo;
					articulos[k] = {IDArticulo,nombreArticulo,precio,descripcion,numFotos,fotos,mostrar,disponibilidad,indexarticulo,claseImagenesArticulo};
					k++;
		<?php
				}
			}
		?>

			var contadorArticulos = 0;
			for(i=0;i<=numLineas+1;i++){//Bucle linea
				document.write('<div class="linea">');
				if(numArticulos-contadorArticulos>=numMaxArticulosPorLinea){
					articulosPorLinea = numMaxArticulosPorLinea;
				}else{
					articulosPorLinea = numArticulos-contadorArticulos;
				}
				for(j=0;j<articulosPorLinea;j++){//Bucle Articulos de cada linea
					if(j==0 || j==2){
						document.write('<div class="semiLinea">');
					}
					document.write('<div class="contenedor-de-articulo"><div class="articulo"><div class="slideshow-container">');
					document.write('<div class="mySlides  fade"><img class="'+articulos[contadorArticulos].claseImagenesArticulo+'" src="../imagenes/'+articulos[contadorArticulos].fotos[1]+'"></div>');
					if(articulos[contadorArticulos].numFotos > 1 && articulos[contadorArticulos].disponibilidad != 0){
						document.write('<a class="prev" onclick="plusSlides(-1,'+contadorArticulos+')">&#10094;</a><a class="next" onclick="plusSlides(1,'+contadorArticulos+')">&#10095;</a>');
					}
					document.write('</div>');
					
					document.write('<div class="div_info_articulo"><h1 class="nombre_articulo">'+articulos[contadorArticulos].nombreArticulo+'</h1><p>art: '+articulos[contadorArticulos].IDArticulo+' - Precio: '+articulos[contadorArticulos].precio+'€</p><p class="descripcion_articulo">'+articulos[contadorArticulos].descripcion+'</p></div></div><div class="disponibilidad">');
					if(articulos[contadorArticulos].mostrar == 0){
						document.write('<p>El articulo no se muestra</p>');
					}else{
						switch (articulos[contadorArticulos].disponibilidad) {
							case 1:
								document.write('<p>El articulo se muestra normalmente</p>');
								break;
							case 2:
								document.write('<p>El articulo se muestra como agotado</p>');
								break;
							case 3:
								document.write('<p>El articulo se muestra como unidades limitadas</p>');
								break;
							default:
								document.write('<p>No está especificado como se muestra el articulo por lo que se mostrará normamente</p>');
								break;
						}
					}
					document.write('</div><div class="boton"><button onclick="irEditarArticulo('+articulos[contadorArticulos].IDArticulo+')">Editar Articulo</button></div></div>');
					if(j==1 || j==(articulosPorLinea-1)){
						document.write('</div>');
					}
					contadorArticulos++;
				}
				document.write('</div>');
			}
		</script>
		</div>
		<script type="text/javascript">
		autoPlusSlide();
		ajustarTamaño();
		function ajustarTamaño(){
			ajustarTamañoImagenes();
			ajustarTamañoMenu(); 
		}
		
		function plusSlides(num,articulo) {
			articulos[articulo].indexarticulo += num;
			mostrarSlide(articulo);
		}

		function mostrarSlide(indiceArticulo) {
			puntoClaseImagenesArticulo = "."+articulos[indiceArticulo].claseImagenesArticulo;
			if(articulos[indiceArticulo].indexarticulo > articulos[indiceArticulo].numFotos){
				articulos[indiceArticulo].indexarticulo = 1;
			}
			if(articulos[indiceArticulo].indexarticulo < 1){
				articulos[indiceArticulo].indexarticulo = articulos[indiceArticulo].numFotos;
			}
			imagenAMostrar = "../imagenes/"+articulos[indiceArticulo].fotos[articulos[indiceArticulo].indexarticulo];
			$(puntoClaseImagenesArticulo).attr("src",imagenAMostrar);
		}

		function autoPlusSlide() {
			for(i=0;i<numArticulos;i++){
				if(articulos[i].numFotos>1){
					plusSlides(1,i);
				}
			}
			setTimeout(autoPlusSlide, 7000);
		}

		function ajustarTamañoImagenes(){
			anchoArticulos = $(".articulo").width();
			alturaArticulos = anchoArticulos*1.45;
			$(".articulo").css("height",alturaArticulos);
			$(".tienda").css("height",$(".margenes").height());
			$(".tienda").css("margin-top",$("nav").height());
		}

		function irEditarArticulo(idArticulo) {
			window.location.assign("editarProducto.php?id="+idArticulo);
		}

		function ajustarTamañoMenu(){
			$(".div-icono-usuario").css("height",$(".div-icono-usuario").width());
			$(".dropdown-content").css("top",$(".div-usuario").height()-7);
			$(".dropdown-content").css("left",-($(".div-usuario").width()+130));
		}
		</script>
	</body>
</html>