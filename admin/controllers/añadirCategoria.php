<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Añadir Categoria</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<link rel="shortcut icon" type="png" href="../imagenes/parroquia_200x200.jpg">

	<link rel="stylesheet" type="text/css" href="../css/body.css">
	<link rel="stylesheet" type="text/css" href="../css/menuAdministracion.css">
	<link rel="stylesheet" type="text/css" href="../css/editar.css">
</head>
<body onresize="ajustarTamaño()">
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
	<script type="text/javascript" src="../../db/firebaseConfig.js"></script>
	<?php
	include "../views/barraNavegacion.php";
	?>
	<div class="categoria">
		<form action="listadoCategorias.php" method="post">
			<div class="div-contenedora-info-articulo">
				<h3>Nueva Categoria</h3>
				<div class="div-input div-text">
					<label for="nombreCategoria">Nombre de la categoria: </label><br>
					<input type="text" id="nombreCategoria" name="nombreCategoria"><br>
				</div>
				<div class="div-check">
					<input type="checkbox" id="mostrar" name="mostrar" onclick="cambioMostrar()" value="1" checked>
					<label for="mostrar">Los articulos de esta categoria se muestran</label><br>
				</div>
			</div>
			<div class="div-boton">
				<p onclick="deshacer()"> Deshacer cambios</p>
				<button>Añadir categoria</button>
			</div>
		</form>
	</div>
	<script type="text/javascript">
		function cambioMostrar() {
			if($("#mostrar").prop("checked")){
				$("[for='mostrar']").empty();
				$("[for='mostrar']").text("Los articulos de esta categoria se muestran");
			}else{
				$("[for='mostrar']").empty();
				$("[for='mostrar']").text("Los articulos de esta categoria no se muestran");
			}
		}

		ajustarTamaño();
		function ajustarTamaño(){
			$(".div-icono-usuario").css("height",$(".div-icono-usuario").width());
			$(".dropdown-content").css("top",$(".div-usuario").height()-7);
			$(".dropdown-content").css("left",-($(".div-usuario").width()+130));
			$(".categoria").css("margin-top",$("nav").height());
		}

		function deshacer() {
			document.location.reload();
		}
	</script>
	<script type="text/javascript" src="ajustarTamaños.js"></script>
</body>
</html>