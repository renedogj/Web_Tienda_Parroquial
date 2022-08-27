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
	<body onresize="ajustarTamaño()">
		<script type="text/javascript">
			var idArticulo = <?php echo $_GET["id"]; ?>;
		</script>
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
						<li><a href="listadoCategorias.php">Categorias</a></li>
						<li><a href="listadoImagenes.php">Imagenes</a></li>
					</ul>
				</div>
				<div class="div-menu-derecha">
					<div class="div-añadir">
						<div class="div-contenedor-añadir">
							<a href="añadirProducto.php">Añadir producto</a>
						</div>
					</div>
					<div class="div-usuario dropdown">
						<div class="div-icono-usuario"><i></i>
							<div class="dropdown-content"></div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!--<script type="text/javascript">
			var fotosArticulo = new Array();
			var idCategoriasArticulo = new Array();-->
		<?php
			
			/*if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$IDArticulo = $row["id"];
					$nombreArticulo = $row["nombre"];
					$descripcion = $row["descripcion"];
					$precio = $row["precio"];
					$mostrar = $row["mostrar"];
					$disponibilidad = $row["disponibilidad"];
					$numFotos = 0;
					
					$sqlImagenes="SELECT id,nombre_foto FROM imagenes where imagenes.ID in (SELECT ID_imagen from relacion_producto_imagen where ID_producto = '$IDArticulo')";
					$resultImagenes = $con->query($sqlImagenes);
					$j = 0;
					if ($resultImagenes->num_rows > 0) {
						while($row = $resultImagenes->fetch_assoc()){
							$idFoto = $row["id"];
							$nombreFoto = $row["nombre_foto"];
		?>
							var idFoto = <?php echo "$idFoto"; ?>;
							var nombreFoto = <?php echo "'$nombreFoto'"; ?>;
		<?php
							echo '	fotosArticulo['.$j.'] = {idFoto,nombreFoto};';
							$numFotos++;
							$j++;
						}
					}

					$sqCategorias="SELECT id FROM categorias where categorias.ID in (SELECT ID_categoria from relacion_producto_categoria where ID_producto = '$IDArticulo')";
					$resultCategorias = $con->query($sqCategorias);
					$j = 0;
					if ($resultCategorias->num_rows > 0) {
						while($row = $resultCategorias->fetch_assoc()){
							$idCategoria = $row["id"];
		?>
							var idCategoria = <?php echo "$idCategoria"; ?>;
		<?php
							echo '	idCategoriasArticulo['.$j.'] = idCategoria;';
							$j++;
						}
					}
				}
			}
		?>
			var IDArticulo = <?php echo "$IDArticulo"; ?>;
			var nombreArticulo = <?php echo "'$nombreArticulo'"; ?>;
			var descripcion = <?php echo "'$descripcion'"; ?>;
			var precio = <?php echo "$precio"; ?>;
			var numFotos = <?php echo "$numFotos"; ?>;
			var mostrar = <?php echo "$mostrar"; ?>;
			var disponibilidad = <?php echo "$disponibilidad"; ?>;

			var fotos = new Array();
			var categorias = new Array();
		<?php
			$result = $con->query("SELECT id,nombre_foto FROM imagenes");
			$j = 0;
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$idFoto = $row["id"];
					$nombreFoto = $row["nombre_foto"];
		?>							
					var idFoto = <?php echo "$idFoto"; ?>;
					var nombreFoto = <?php echo "'$nombreFoto'"; ?>;
		<?php
					echo '	fotos['.$j.'] = {idFoto,nombreFoto};';
					$j++;
				}
			}
			$result = $con->query("SELECT id,nombre_categoria FROM categorias");
			$j = 0;
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					$idCategoria = $row["id"];
					$nombreCategoria = $row["nombre_categoria"];
		?>							
					var idCategoria = <?php echo "$idCategoria"; ?>;
					var nombreCategoria = <?php echo "'$nombreCategoria'"; ?>;
		<?php
					echo '	categorias['.$j.'] = {idCategoria,nombreCategoria};';
					$j++;
				}
			}*/
		?>
		<div class="articulo">
			<form action="listadoArticulos.php" method="post">
				<div class="div-contenedora-info-articulo">
					<h3 id="idProductoTxt">ID: </h3>
					<input type="hidden" name="idProducto" id="idProducto">
					<div class="div-input div-text">
						<label for="nombre">Nombre del producto: </label><br>
						<input type="text" id="nombre" name="nombre"><br>
					</div>
					<div class="div-input div-text">
						<label for="descripcion">Descripción del producto: </label><br>
						<input type="text" id="descripcion" name="descripcion"><br>
					</div>
					<div class="div-precio-check">
						<div class="div-precio">
							<label for="precio">Precio:</label>
							<input type="number" min="0" step="0.01" id="precio" name="precio">€<br>
						</div>
						<div class="div-check">
							<input type="checkbox" id="mostrar" name="mostrar" onclick="cambioMostrar()" value="1">
							<label for="mostrar">El articulo se muestra</label><br>
						</div>
					</div>
					<div class="div-input-radio">
						<input type="radio" id="dispoNomal" name="disponibilidad" value="1">
						<label for="dispoNomal">El articulo se muestra normalmente</label><br>
						<input type="radio" id="dispoAgotado" name="disponibilidad" value="2">
						<label for="dispoAgotado">El articulo se muestra como agotado</label><br>
						<input type="radio" id="dispoUnidadesLimitadas" name="disponibilidad" value="3">
						<label for="dispoUnidadesLimitadas">El articulo se muestra como disponible con unidades limitadas</label>
					</div>
				</div>
				<!--seleccion de checkbox de las categorias-->
				<div class="modificar-categorias-articulo">
					<h3>Selecciona categoría(s)</h3>
					<input type="hidden" name="numCategorias" id="numCategorias">
					<script type="text/javascript">
						/*for(var i=0;i<categorias.length;i++){
							document.write('<div class="div-input-categoria">'+
								'<input type="checkbox" id="input-categoria-'+i+'" name="input-categoria-'+i+'" value="'+categorias[i].idCategoria+'">'+
							'<label for="input-categoria-'+i+'">'+categorias[i].nombreCategoria+'</label></div>');
							if(idCategoriasArticulo.indexOf(categorias[i].idCategoria) != -1){
								$("#input-categoria-"+i).attr("checked","checked");
							}
						}
						$("#numCategorias").val(categorias.length);*/
					</script>
				</div>
				<div class="div-añadirImagen">
					<h3>Selecciona imágenes</h3>
					<div class="div-añadirImagen-id">
						<label class="label-select-imagen-id" for="select-imagen-id">Selecciona ID de imagen: </label>
	                    <select name="select-imagen-id" id="select-imagen-id" onchange="ajustarIDNombreImagen(this.value)">
	                    	<option value="">--</option>
	                    	<script type="text/javascript">
	                    		/*for(var i=0; i<fotos.length;i++){
	                    			document.write("<option value="+i+">"+fotos[i].idFoto+"</option>");
								}*/
	                        </script>         
						</select>
					</div>
					<div class="div-añadirImagen-nombre">
						<label class="label-select-imagen-nombre" for="select-imagen-nombre">Selecciona nombre de imagen: </label>
	                    <select name="select-imagen-nombre" id="select-imagen-nombre" onchange="ajustarIDNombreImagen(this.value)">
	                    	<option value="">--</option>
	                    	<script type="text/javascript">
	                    		/*for(var i=0; i<fotos.length;i++){
	                    			document.write("<option value="+i+">"+fotos[i].nombreFoto+"</option>");
								}*/
	                        </script>         
						</select>
					</div>	
					<p onclick="sumImagen()"> Añadir foto</p>
				</div>
				<div class="div-contenedora-imagenes-articulo">
				<script type="text/javascript">
					var contadorImagenes = 0;
					for(var i=0;i<numFotos;i++){
						document.write('<div class="contenedora-imagen" id="contenedora-imagen-'+i+'">'+
							'<div class="imagen">'+
								'<img src="../imagenes/'+fotosArticulo[i].nombreFoto+'">'+
							'</div><div class="info-imagen">'+
								'<p><b>ID:</b> '+fotosArticulo[i].idFoto+'</p>'+
								'<p><b>Nombre:</b> '+fotosArticulo[i].nombreFoto+'</p>'+
							'</div>'+
							'<input type="hidden" name="input-imagen-'+i+'" id="input-imagen-'+i+'">'+
							'<span class="cerrar" onclick="resImagen('+i+')">&times;</span>'+
						'</div>');
						$("#input-imagen-"+i).val(fotosArticulo[i].idFoto);
						contadorImagenes++;
					}
				</script>
				</div>
				<input type="hidden" name="hiddenContadorImagenes" id="hiddenContadorImagenes">
				<div class="div-boton">
					<p onclick="deshacer()"> Deshacer cambios</p>
					<button>Editar</button>
				</div>
			</form>
		</div>
		<script type="text/javascript" src="editarArticulo.js"></script>
		<script type="text/javascript">
			/*var contadorImagenesReales = contadorImagenes;
			$("#hiddenContadorImagenes").val(contadorImagenesReales);
			
			function ajustarIDNombreImagen(num) {
				$("#select-imagen-id").val(num);
				$("#select-imagen-nombre").val(num);
			}

			function htmlImagen (num,idFoto,nombreFoto) {
				return '<div class="contenedora-imagen" id="contenedora-imagen-'+num+'">'+
							'<div class="imagen">'+
								'<img src="../imagenes/'+nombreFoto+'">'+
							'</div><div class="info-imagen">'+
								'<p><b>ID:</b> '+idFoto+'</p>'+
								'<p><b>Nombre:</b> '+nombreFoto+'</p>'+
							'</div>'+
							'<input type="hidden" name="input-imagen-'+num+'" id="input-imagen-'+num+'">'+
							'<span class="cerrar" onclick="resImagen('+num+')">&times;</span>'+
						'</div>';
			}

			function sumImagen(){
				var index = $("#select-imagen-id").val();
			    $(".div-contenedora-imagenes-articulo").append(htmlImagen(contadorImagenes,fotos[index].idFoto,fotos[index].nombreFoto));
			    $("#input-imagen-"+contadorImagenes).val(fotos[index].idFoto);
			    contadorImagenes++;
			    contadorImagenesReales++;
			    $("#hiddenContadorImagenes").val(contadorImagenesReales);
			    ajustarTamaño();
			}

			function resImagen(num){
			    $("#contenedora-imagen-"+num).css("margin",0);
			    $("#contenedora-imagen-"+num).remove();
			    contadorImagenesReales--;
			    if(contadorImagenesReales==0){
			        contadorImagenes = 0;
			    }
			    $("#hiddenContadorImagenes").val(contadorImagenesReales);
			    ajustarTamaño();
			}

			ajustarTamaño();
			function ajustarTamaño(){
				$(".div-icono-usuario").css("height",$(".div-icono-usuario").width());
				$(".dropdown-content").css("top",$(".div-usuario").height()-7);
				$(".dropdown-content").css("left",-($(".div-usuario").width()+130));
				$(".articulo").css("margin-top",$("nav").height());

				anchoImagen = $(".imagen").width();
				alturaImagen = anchoImagen*1.5;
				$(".imagen").css("height",alturaImagen);
				alturaContenedorImagen = alturaImagen + 100;
			    $(".div-contenedora-imagenes-articulo").css("height",(alturaContenedorImagen*Math.ceil((contadorImagenesReales)/4)));
			}

			function deshacer() {
				document.location.reload();
			}*/
		</script>
		<script type="text/javascript" src="rellenarDatosFormEditarProducto.js"></script>
	</body>
</html>