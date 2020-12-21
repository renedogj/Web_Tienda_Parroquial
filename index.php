<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mercadillo Solidario &#8211; Parroquia De San Leandro</title>
		<meta name=author content="Javier Renedo">
		<meta name="descripcion" content="Mercadillo parroquia San Leandro, Mercadillo, Parroquia San Leandro, Mercadillo San Leandro, Mercadillo solidario parroquia San Leandro"/>
		<meta name="keywords" content="Mercadillo parroquia San Leandro, Mercadillo, Parroquia San Leandro, Mercadillo San Leandro, Mercadillo solidario parroquia San Leandro"/>
		<link rel="shortcut icon" type="png" href="imagenes/parroquia_200x200.jpg">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link rel="stylesheet" type="text/css" href="css/informacion.css">
		<link rel="stylesheet" type="text/css" href="css/tienda.css">
		<link rel="stylesheet" type="text/css" href="css/animacionImagenes.css">
		<link rel="stylesheet" type="text/css" href="css/contactar.css">
		<link rel="stylesheet" type="text/css" href="css/agotado.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
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
    	    $correoEnviado=$_GET['enviado'];
    	    if(!$correoEnviado){
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
			<script type="text/javascript">
				var fotosSahara = new Array();
				fotosSahara[0] = "imagenes/CartelSahara.jpg";
				fotosSahara[1] = "imagenes/MapaSahara.png";
				fotosSahara[2] = "imagenes/MisionSahara_1.png";
				var fotosTalleres = new Array();
				fotosTalleres[0] = "imagenes/Foto talleres 1.jpg";
				fotosTalleres[1] = "imagenes/Foto talleres 2.jpg";
				slideSaharaTalleres();
				function slideSaharaTalleres() {
					if($("#imagenesSahara").attr("src")==fotosSahara[0]){
						$("#imagenesSahara").attr("src",fotosSahara[1]);
					}else if($("#imagenesSahara").attr("src")==fotosSahara[1]){
						$("#imagenesSahara").attr("src",fotosSahara[2]);
					}else{
						$("#imagenesSahara").attr("src",fotosSahara[0]);
					}

					if($(".imagenesTalleres").attr("src")==fotosTalleres[0]){
						$(".imagenesTalleres").attr("src",fotosTalleres[1]);
					}else{
						$(".imagenesTalleres").attr("src",fotosTalleres[0]);
					}
					setTimeout(slideSaharaTalleres, 7000);
				}
			</script>
		</div>
		<div class="tienda" id="tienda">
			<div class="titulo-tienda">
				<h1>PRODUCTOS SOLIDARIOS</h1>
			</div>
			<div class="margenes" id="margenes">
			<div class="formulario-filtrar">
				<form id="formulario-selecion" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
					<div class="select">
						<select name="seleccion_Categoria">
				        	<option value="0">Todos</option>
				        	<option value="1">Bolsas</option>
				        	<option value="2">Cojines</option>
				        	<option value="3">Cuellos</option>
				        	<option value="4">Bolsos</option>
				        	<option value="5">Diademas</option>
				        	<option value="6">Neceser</option>
				        	<option value="7">Llaveros</option>
				        	<option value="8">Pulseras y gargantillas</option>
				        	<option value="9">Navidad</option>
				        	<option value="10">Carpetas</option>
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
					include("conexion.php");
					$con=mysqli_connect($servidor,$usuario,$contrasena);
					$conectado=mysqli_select_db($con,$baseDeDatos);
					if(!$conectado){
						echo 'alert("Se ha producido un error al conectarse con la base datos por favor intentelo más tarde");';
					}
					$sql="SELECT COUNT(ID) from productos".$categoriaSql;
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
				$sql="SELECT id from productos".$categoriaSql.$ordenSql;
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
						document.write('<div class="div_info_articulo"><h1 class="nombre_articulo">'+articulos[contadorArticulos].nombreArticulo+'</h1><p>art: '+articulos[contadorArticulos].IDArticulo+' - Precio: '+articulos[contadorArticulos].precio+'€</p><p class="descripcion_articulo">'+articulos[contadorArticulos].descripcion+'</p></div></div>');	
					}else{
						j--;
					}
					contadorArticulos++;
				}
				document.write('</div>');
			}
			</script>
			</div>
		</div>
		<script type="text/javascript">
			ajustarTamañoImagenes();
			function ajustarTamañoImagenes(){
				anchoFotosSaharaTalleres = $(".SaharaTalleres").width();
				alturaFotosSaharaTalleres = anchoFotosSaharaTalleres*0.6;
				$(".SaharaTalleres").css("height",alturaFotosSaharaTalleres);
			
				anchoArticulos = $(".articulo").width();
				alturaArticulos = anchoArticulos*1.45;
				$(".articulo").css("height",alturaArticulos);
				$(".tienda").css("height",$(".margenes").height());

				anchoLogo = $(".div-imagen-logo img").width();
				alturaLogo = anchoLogo;
				$(".div-imagen-logo img").css("height",alturaLogo);
			}
		</script>
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
					<form id="formularioPedirArticulos" action="correo.php" method="post">
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
								<input type="mail" name="correoElectronico" id="correoElectronico"><br>
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
			$(document).ready(function(){
				$("#formularioPedirArticulos").validate({
					rules:{
						nombre:{
							required: true,
							minlength: 3,
						},
						apellido:{
							required: true,
							minlength: 3,
						},
						correoElectronico:{
							required: true,
							email: true,
						},
						articulosPedidos:{
							required: true,
						},
					},
					messages: {
						nombre:{
							required: "Es necesario rellenar este campo",
							minlength: "El campo nombre debe tener al menos 3 caracteres",
						},
						apellido:{
							required: "Es necesario rellenar este campo",
							minlength: "El campo apellido debe tener al menos 3 caracteres",
						},
						correoElectronico:{
							required: "Es necesario rellenar este campo",
							email: "El campo correo debe tener formato de corrreo electrónico",
						},
						articulosPedidos:{
							required: "Es necesario rellenar este campo",
						},
					},
				});
			});
		</script>
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
		<script type="text/javascript">
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
				imagenAMostrar = "imagenes/"+articulos[indiceArticulo].fotos[articulos[indiceArticulo].indexarticulo];
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
			autoPlusSlide();
		</script>
		<?php
			function seleccionCategoria($numCategoriaSelecionada){
				switch($numCategoriaSelecionada) {
					case 0:
						$categoriaSql="";
						break;
					case 1:
						$categoriaSql=" where Categoria='Bolsas'";
						break;
					case 2:
						$categoriaSql=" where Categoria='Cojines'";
						break;
					case 3:
						$categoriaSql=" where Categoria='Cuellos'";
						break;
					case 4:
						$categoriaSql=" where Categoria='Bolsos'";
						break;
					case 5:
						$categoriaSql=" where Categoria='Diademas'";
						break;
					case 6:
						$categoriaSql=" where Categoria='Neceser'";
						break;
					case 7:
						$categoriaSql=" where Categoria='Llaveros'";
						break;
					case 8:
						$categoriaSql=" where Categoria='Pulseras y Gargantillas'";
						break;
					case 9:
						$categoriaSql=" where Categoria='Navidad'";
						break;
					case 10:
						$categoriaSql=" where Categoria='Carpetas'";
						break;
					default:
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
	</body>
</html>