<?php
if(isset($_GET["id"]) && $_GET["id"] != "" && $_GET["id"] != null){
	$IdArticulo = $_GET["id"];
}else{
	header("Location: listadoArticulos.php");
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Editar Producto</title>
	<link rel="shortcut icon" type="png" href="../../imagenes/parroquia_200x200.jpg">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../../css/body.css">
	<link rel="stylesheet" type="text/css" href="../../css/menuAdministracion.css">
	<link rel="stylesheet" type="text/css" href="../../css/listadoImagenes.css">
	<link rel="stylesheet" type="text/css" href="../../css/editar.css">
</head>
<body>
	<script type="text/javascript">
		var idArticulo = <?php echo $IdArticulo; ?>;
	</script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
	<script type="text/javascript" src="../../db/firebaseConfig.js"></script>
	<?php
	include "../views/barraNavegacion.php";
	include_once "../views/editarArticulo.html";
	?>
	<script type="text/javascript" src="editarArticulo.js"></script>
	<script type="text/javascript" src="ajustarTamaños.js"></script>
</body>
</html>