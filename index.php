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

	<link rel="shortcut icon" type="png" href="imagenes/general/parroquia_200x200.jpg">

	<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/informacion.css">
	<link rel="stylesheet" type="text/css" href="css/tienda.css">
	<link rel="stylesheet" type="text/css" href="css/animacionImagenes.css">
	<link rel="stylesheet" type="text/css" href="css/contactar.css">
	<link rel="stylesheet" type="text/css" href="css/disponibilidad.css">
</head>
<body>
	<?php
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
	include_once "views/tienda.html";
	?>
	<script type="text/javascript" src="controllers/ajustarImagenes.js"></script>
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
	<script type="text/javascript" src="controllers/validarFormulario.js"></script>
</body>
</html>
