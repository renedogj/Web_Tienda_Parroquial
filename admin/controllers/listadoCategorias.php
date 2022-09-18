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
<body>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
	<script type="text/javascript" src="../../db/firebaseConfig.js"></script>
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
	<script type="text/javascript" src="listadoCategorias.js"></script>
</body>
</html>