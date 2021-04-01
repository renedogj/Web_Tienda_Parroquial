<!DOCTYPE html>
<html>
	<head>
		<title>Mercadillo Solidario &#8211; Parroquia De San Leandro</title>
	</head>
	<body>
		<?php
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$email = $_POST['correoElectronico'];
			$pedido = $_POST['articulosPedidos'];
			$asunto = $nombre . " " . $apellido;
			$contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nCorreo: " . $email . "\nArticulos pedidos: " . $pedido;
			$mail=mail("mercadillosanleandro@gmail.com",$asunto,$contenido);
			if($mail){
				echo "<meta HTTP-EQUIV =refresh content='0;../index.php?enviado=1'>";
			}else{
				echo "<meta HTTP-EQUIV =refresh content='0;../index.php?enviado=2'>";
			}
		?>
	</body>
</html>