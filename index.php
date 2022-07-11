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

	<link rel="stylesheet" type="text/css" href="css/body.css">
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
	/*$categoria = 0;
	$orden = 0;
	if(isset($_POST['submit'])){
		$categoria = $_POST['seleccion_Categoria'];
		$orden = $_POST['seleccion_Orden'];
		echo '<script>window.location.assign("#tienda");</script>';
	}*/

	$correoEnviado;
	if(isset($_GET['enviado'])){
		$correoEnviado=$_GET['enviado'];
		if(!$correoEnviado){
			$correoEnviado=0;
		}
	}else{
		$correoEnviado=0;
	}

	include_once "views/header.html";
	include_once "views/info.html";
	?>
	<div class="tienda" id="tienda">
		<div class="titulo-tienda">
			<h1>PRODUCTOS SOLIDARIOS</h1>
		</div>
		<div class="formulario-filtrar">
			<form id="formulario-selecion" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
				<div class="select">
					<select name="seleccionCategoria" id="seleccionCategoria">
						<option value="0">Todos</option>
					</select>
				</div>
				<div class="select">
					<select name="seleccionOrden" id="seleccionOrden">
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
		<div class="margenes" id="articulosTienda">
			
		</div>
	</div>
	<script type="text/javascript" src="controllers/tienda.js"></script>
	<?php
	include_once "views/contactar.html";
	?>


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
	/*function seleccionCategoria($numCategoriaSelecionada){
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
	}*/
	?>
	<script type="text/javascript" src="archivos/validarFormulario.js"></script>
	<script type="text/javascript" src="archivos/ajustarImagenes.js"></script>
</body>
</html>
