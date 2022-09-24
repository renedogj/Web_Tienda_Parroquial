<nav class="navbar">
	<div class="container-fluid">
		<div class="div-menu-izquierda">
			<div class="navbar-header">
				<a class="navbar-brand" href="../index.php">Mercadillo Parroquial</a>
			</div>
			<ul class="ul-navbar">
				<li id="listadoArticulos">
					<a href="listadoArticulos.php">Articulos</a>
				</li>
				<li id="listadoCategorias">
					<a href="listadoCategorias.php">Categorias</a>
				</li>
				<li id="listadoImagenes">
					<a href="listadoImagenes.php">Imagenes</a>
				</li>
			</ul>
		</div>
		<div class="div-menu-derecha">
			<div class="div-añadir">
				<div class="div-contenedor-añadir" id="div-contenedor-añadir"></div>
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
<script type="text/javascript">
	var nombreArchivo = <?php
	$arrayPath = explode("/",$_SERVER["SCRIPT_FILENAME"]);
	$nombreArchivo = $arrayPath[count($arrayPath)-1];
	echo '"' . basename($nombreArchivo,".php") . '"';
	?>;

	$("#"+nombreArchivo).addClass("selecionado");

	switch(nombreArchivo){
		case "listadoArticulos":
		case "editarArticulo":
		var aEnlace = $("<a>").attr("href","añadirArticulo.php").text("Añadir Articulo");
		break;
		case "listadoCategorias":
		case "editarCategoria":
		var aEnlace = $("<a>").attr("href","añadirCategoria.php").text("Añadir Categoria");
		break;
		case "listadoImagenes":
		var aEnlace = $("<a>").attr("href","añadirImagen.php").text("Añadir Imagen");
		break;
	}
	$("#div-contenedor-añadir").append(aEnlace);
</script>