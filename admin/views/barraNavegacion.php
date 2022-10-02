<nav class="navbar">
	<div class="contenedora-hamburguesa" id="menuHamburguesa">
		<div class="hamburger-lines">
			<span class="line line1"></span>
			<span class="line line2"></span>
			<span class="line line3"></span>
		</div>
	</div>
	<a class="navbar-titulo" href="../../index.php">Mercadillo Parroquial</a>
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
	<div class="div-añadir" id="div-añadir"></div>
	<div class="div-usuario">
		<div class="div-icono-usuario">
			<i></i>
		</div>
		<div class="dropdown-content" id="dropdown-content"></div>
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
	$("#div-añadir").append(aEnlace);

	$("#menuHamburguesa").click(() => {
		if($(".ul-navbar").css("display") == "none"){
			$(".ul-navbar").css("display","flex");
		}else{
			$(".ul-navbar").css("display","none");
		}
	});
</script>
