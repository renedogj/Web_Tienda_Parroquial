<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mercadillo Solidario &#8211; Parroquia De San Leandro</title>
		<meta name=author content="Javier Renedo">
		<meta name="descripcion" content="Mercadillo parroquia San Leandro, Mercadillo, Parroquia San Leandro, Mercadillo San Leandro, Mercadillo solidario parroquia San Leandro"/>
		<meta name="keywords" content="Mercadillo parroquia San Leandro, Mercadillo, Parroquia San Leandro, Mercadillo San Leandro, Mercadillo solidario parroquia San Leandro"/>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

		<link rel="shortcut icon" type="png" href="imagenes/parroquia_200x200.jpg">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/informacion.css">
		<link rel="stylesheet" type="text/css" href="css/tienda.css">
		<link rel="stylesheet" type="text/css" href="css/animacionImagenes.css">
		<link rel="stylesheet" type="text/css" href="css/contactar.css">
		<link rel="stylesheet" type="text/css" href="css/disponibilidad.css">
	</head>
	<body onresize="ajustarTamañoImagenes()">
		<?php
			$categoria = 0;
			$orden = 0;
			if(isset($_POST['submit'])){ 
			   	$categoria = $_POST['seleccion_Categoria'];
			   	$orden = $_POST['seleccion_Orden'];
			   	echo '<script>window.location.assign("#tienda");</script>';
			}

			$correoEnviado;
			if(isset($_GET['enviado'])){
	    	    $correoEnviado=$_GET['enviado'];
	    	    if(!$correoEnviado){
	    	        $correoEnviado=0;
	    	    }
			}else{
				$correoEnviado=0;
			}
    	?>
		<header>
			<div class="header-imagen-superior">
				<div class="div-background"></div>
				<div class="div-contenedora-header">
					<div class="div-contenedor">
						<div class="div-imagen-logo">
							<a href="http://www.parroquiasanleandro.es">
								<img src="imagenes/cropped-logo_parro_transparente-1.png" alt="" loading="lazy">
							</a>
						</div>
						<div class="div-letras-San-Leandro">
							<h1>
								<a href="http://www.parroquiasanleandro.es/">Parroquia De San Leandro</a>
							</h1>
						</div>
						<div class="redes">
						<div class="div-redes-sociales">
							<div class="div-facebook">
								<a class="a-facebook" href="https://www.facebook.com/parroquiasanleandro" target="_blank">
									<span class="span-facebook">Facebook</span>
									<i class="i-facebook"></i>					
								</a>
							</div>
							<div class="div-twitter">
								<a class="a-twitter" href="https://twitter.com/psanleandro" target="_blank">
									<span class="span-twitter">Twitter</span>
									<i class="i-twitter"></i>					
								</a>
							</div>
							<div class="div-youtube">
								<a class="a-youtube" href="https://www.youtube.com/c/ParroquiaSanLeandro/featured?view_as=subscriber" target="_blank">
									<span class="span-youtube">Youtube</span>
									<i class="i-youtube"></i>					
								</a>
							</div>
							<div class="div-instagram">
								<a class="a-instagram" href="https://www.instagram.com/psanleandro/?hl=es" target="_blank">
									<span class="span-instagram">Instagram</span>
									<i class="i-instagram"></i>			
								</a>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			<nav class="menu">
				<div class="div-mercadillo-letras">
					<h1>MERCADILLO SOLIDARIO</h1>
				</div>
				<div class="div-menu">
					<ul class="ulA">
						<div class="div-liA">
							<a href="#formulario-comprar"><li class="liA">Hacer pedido</li></a>
							<a href="#tienda"><li class="liA">Tienda</li></a>
						</div>
					</ul>
				</div>
			</nav>
		</header>
		<div class="info">
			<div class="info-contenedora">
				<h1>PROYECTO MIGRANTES DAKHLA</h1>
				<h1>¡¡Bienvenido a nuestro catálogo de Productos Solidarios!!</h1>
				<p>Como todos los años, desde la parroquia vamos a colaborar con un proyecto misionero, en esta ocasión el proyecto Migrantes Dakhla, en la  <b>Misión del Sahara</b>.</p>
				<ul>El proyecto MIGRANTES DAKHLA  tiene como principales objetivos:
					<li>Apoyo psicológico y acompañamiento a mujeres vulnerables y niños, proporcionando formación a las mujeres para favorecer su autonomía y guardería para los niños.</li>
					<li>Organización de campañas de sensibilización y formación para migrantes, según sus necesidades.</li>
					<li>Ayudas mediante micro-financiación para la puesta en marcha de proyectos y pequeños puestos de trabajo.</li>
				</ul>
				<p>Puedes encontrar información más detallada sobre el proyecto Migrantes Dakhla en la página web de la <a href="http://www.parroquiasanleandro.es/">parroquia de San Leandro</a></p>
				<p>Necesitamos tu colaboración para sacar adelante estos objetivos.</p>
				<p>DONATIVOS: <b>ES47 0075 0321 3506 0044 1971</b>&nbsp;&nbsp;&nbsp;&nbsp;Indicar: PROYECTO SOLIDARIO + NOMBRE Y APELLIDOS</p>
				<h2>¡CON LA AYUDA DE TODOS CONTRIBUÍMOS A FINANCIAR ESTE MARAVILLOSO PROYECTO!</h2>
				<p>Como todos los años, hemos organizado talleres de diferentes manualidades y queremos que conozcas los trabajos que con tanto cariño hemos realizado.</p>
				<a href="#instrucciones" class="boton-Haz-tu-pedido">¡HAZ TU PEDIDO YA!</a>
			</div>
			<div class="info-fotos">
				<div class="info-fotos-proyecto SaharaTalleres">
					<img class="imagenesSahara" id="imagenesSahara" src="imagenes/MisionSahara_1.png">	
				</div>
				<div class="info-fotos-talleres SaharaTalleres">
					<img class="imagenesTalleres" src="imagenes/Foto talleres 1.jpg">
				</div>
			</div>
		</div>
		<div class="tienda" id="tienda">
			<div class="titulo-tienda">
				<h1>PRODUCTOS SOLIDARIOS</h1>
			</div>
			<div class="margenes" id="margenes">
				<script type="text/javascript">
					var categorias = new Array();
					var mostrar_categoria = new Array();
				<?php
					include("archivos/conexion.php");
					$con=mysqli_connect($servidor,$usuario,$contrasena);
					$conectado=mysqli_select_db($con,$baseDeDatos);
					if(!$conectado){
						echo 'alert("Se ha producido un error al conectarse con la base datos por favor intentelo más tarde");';
					}
					$sql = "SELECT COUNT(ID) from categorias";
					$result=mysqli_query($con,$sql);
					$row = mysqli_fetch_array($result);
					$numCategorias = $row[0];
					$categorias = array();
					$sql="SELECT nombre_categoria,mostrar_categoria from categorias";
					$result = $con->query($sql);
					$j = 1;
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$categorias[$j] = $row["nombre_categoria"];
							echo "categorias[$j]='$categorias[$j]';";
							$mostrar_categoria[$j] = $row["mostrar_categoria"];
							echo "mostrar_categoria[$j]='$mostrar_categoria[$j]';";
							$j++;
						}
					}
				?>
					var numCategorias = <?php echo $numCategorias; ?>;
				</script>
			<div class="formulario-filtrar">
				<form id="formulario-selecion" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
					<div class="select">
						<select name="seleccion_Categoria">
							<option value="0">Todos</option>
							<script type="text/javascript">
								for(i=1; i<=numCategorias;i++){
									if(mostrar_categoria[i] == 1){
										document.write('<option value="'+i+'">'+categorias[i]+'</option>');
									}
								}
							</script>
				        </select>
				    </div>
				    <div class="select">
				        <select name="seleccion_Orden">
				        	<option value="0">Novedades</option>
				        	<option value="1">Nombre</option>
				        	<option value="2">Precio menor a mayor</option>
				        	<option value="3">Precio mayor a menor</option>
				        </select>
				    </div>
			        <div class="enviar-filtrar">
			        	<input type="submit" name="submit" value="Filtrar">
			        </div>
				</form>
			</div>
			
			<script type="text/javascript">
			<?php

				$categoriaSql = seleccionCategoria($categoria);
				$ordenSql = seleccionOrden($orden);
				$sql="SELECT COUNT(ID) from productos where disponibilidad in (0,1,3)".$categoriaSql;
				echo "console.log('$sql');";
				$result=mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				$numArticulos = $row[0];
			?>
				var numArticulos= <?php echo $numArticulos; ?>;
				var numMaxArticulosPorLinea = 4;
				function calcularNumLineas (numArticulos) {
					let numLineasExactas = numArticulos/numMaxArticulosPorLinea;
					let numLineasCompletas =Math.floor(numLineasExactas);
					if(numLineasExactas>numLineasCompletas){
						numLineasCompletas++;
					}
					return numLineasCompletas;
				}
				var numLineas = calcularNumLineas(numArticulos);
				var articulos = new Array();
				var ids = new Array();
			<?php
				$sql="SELECT id from productos where disponibilidad in (0,1,3)".$categoriaSql.$ordenSql;
				$result = $con->query($sql);
				if ($result->num_rows > 0) {
					$i = 0;
					$ids = array();
					while($row = $result->fetch_assoc()){
						$ids[$i] = $row ["id"];
						echo "ids[".$i."]=".$row["id"].";";
						$i++;
					}
				}else {
					echo "alert(No hay articulos en la tienda!!!);";
				}
				for($i=0;$i<$numArticulos;$i++){
					$IDArticulo = $ids[$i];
					$nombreArticulo;
					$descripcion;
					$precio;
					$numFotos = 0;
					$fotos = array();

					$sql="SELECT nombre,descripcion,precio,disponibilidad from productos where id='$ids[$i]'";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							$nombreArticulo = $row["nombre"];
							$descripcion = $row["descripcion"];
							$precio = $row["precio"];
							$disponibilidad = $row["disponibilidad"];
						}
					}

					$sql="SELECT nombre_foto FROM imagenes where imagenes.ID in (SELECT ID_imagen from relacion_producto_imagen where ID_producto = '$ids[$i]')";
					$result = $con->query($sql);
					$j = 1;
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
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
				var disponibilidad = <?php echo "$disponibilidad"; ?>;
			<?php
				for($j=1;$j<=$numFotos;$j++){
					echo "fotos[$j]='$fotos[$j]';";
				}
			?>
				var indexarticulo = 1;
				var claseImagenesArticulo = 'imagenesArticulo'+ IDArticulo;
				articulos[<?php echo "$i"; ?>] = {IDArticulo,nombreArticulo,precio,descripcion,numFotos,fotos,disponibilidad,indexarticulo,claseImagenesArticulo};
			<?php
				}
			?>
			var contadorArticulos=0;
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
					if(articulos[contadorArticulos].disponibilidad != 2){
						document.write('<div class="articulo"><div class="slideshow-container">');
						document.write('<div class="mySlides  fade"><img class="'+articulos[contadorArticulos].claseImagenesArticulo+'" src="imagenes/'+articulos[contadorArticulos].fotos[1]+'"></div>');
						if(articulos[contadorArticulos].numFotos > 1 && articulos[contadorArticulos].disponibilidad != 1){
							document.write('<a class="prev" onclick="plusSlides(-1,'+contadorArticulos+')">&#10094;</a><a class="next" onclick="plusSlides(1,'+contadorArticulos+')">&#10095;</a>');
						}
						document.write('</div>');
						if(articulos[contadorArticulos].disponibilidad == 1){
							document.write('<div class="agotado"><div class="banda_agotado"><h1>PRODUCTO AGOTADO</h1></div></div>');
						}
						if(articulos[contadorArticulos].disponibilidad == 3){
							console.log('3');
							document.write('<div class="unidadesLimitadas"><h2>Unidades limitadas</h2></div>');
						}
						document.write('<div class="div_info_articulo"><h1 class="nombre_articulo">'+articulos[contadorArticulos].nombreArticulo+'</h1><p>art: '+articulos[contadorArticulos].IDArticulo+' - Precio: '+articulos[contadorArticulos].precio+'€</p><p class="descripcion_articulo">'+articulos[contadorArticulos].descripcion+'</p></div></div>');	
					}else{
						j--;
					}
					if(j==1 || j==(articulosPorLinea-1)){
						document.write('</div>');
					}
					contadorArticulos++;
				}
				document.write('</div>');
			}
			</script>
			</div>
		</div>
		<div class="contactar" id="formulario-comprar">
			<div class="como-comprar" id="comprar">
				<div class="instrucciones" id="instrucciones">
					<h1>COMO HACER TU PEDIDO</h1>
					<p><span class="intro-instrucciones">Ponte en contacto con nosotros por uno de estos medios:</span><br>
						<ul>
							<li>Envía un <b>WhatsApp</b> al número <b>609 64 30 36</b> indicando tu nombre, qué artículo te interesa y la cantidad.</li>
							<li>O a través del formulario que aparece a continuación.</li>	
						</ul>
					</p>
				</div>
			</div>
			<div class="como-contactar">
				<div class="correo">
					<h2>PEDIR UN ARTICULO POR CORREO</h2>
					<form id="formularioPedirArticulos" action="archivos/correo.php" method="post">
						<div class="label">
							<label for="nombre">
								Nombre: <span class="obligatorio">*</span><br>
								<input type="text" name="nombre" id="nombre"><br>
							</label>
						</div>
						<div class="label">
							<label for="apellido">
								Apellidos: <span class="obligatorio">*</span><br>
								<input type="text" name="apellido" id="apellido"><br>
							</label>
						</div>
						<div class="label">
							<label for=correoElectronico>
								Correo: <span class="obligatorio">*</span><br>
								<input type="email" name="correoElectronico" id="correoElectronico"><br>
							</label>
						</div>
						<div class="label">
							<label for="articulosPedidos">
								Código y nombre de los articulos (en caso de ser varios, por favor, sepáralos con comas): <span class="obligatorio">*</span><br>
								<input type="text" name="articulosPedidos" id="articulosPedidos">
							</label>
						</div>
						<button class="boton-solicitar-pedido" onclick="enviarcorreo()">Hacer Pedido</button>
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			var correoEnviado;
			correoEnviado = <?php echo $correoEnviado; ?>;
			if(correoEnviado > 0 && correoEnviado < 3){
				if(correoEnviado == 1){
					alert("Pedido realizado con éxito, nos pondremos en contacto contigo pronto. Gracias por tu aportación");
				}else{
					alert("Se ha producido un error al enviar el correo, por favor, revise todos los campos y vuelva a intentarlo más tarde");
					window.location.assign("#formulario-comprar");
				}
			}   	    
		</script>
		<?php
			function seleccionCategoria($numCategoriaSelecionada){
				if($numCategoriaSelecionada != 0){
					$categoriaSql =" and ID in (select ID_producto from relacion_producto_categoria where ID_categoria=$numCategoriaSelecionada)";
				}else{
					$categoriaSql="";
				}
				return $categoriaSql;
			}
			
			function seleccionOrden($numOrdenSelecionado){
				switch ($numOrdenSelecionado) {
					case 0:
						$ordenSql=" order by ID DESC";
						break;
					case 1:
						$ordenSql=" order by nombre";
						break;
					case 2:
						$ordenSql=" order by precio ASC";
						break;
					case 3:
						$ordenSql=" order by precio DESC";
						break;
					default:
						$ordenSql=" order by ID DESC";
				}
				return $ordenSql;
			}
		?>
		<script type="text/javascript" src="archivos/validarFormulario.js"></script>
		<script type="text/javascript" src="archivos/ajustarImagenes.js"></script>
	</body>
</html>