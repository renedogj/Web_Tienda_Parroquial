$.ajax({
	method: "POST",
	url: "models/obtenerCategorias.php",
	//data: {},
	success: function(categorias){
		for(let i in categorias){
			$("#seleccionCategoria").append(
				$("<option>").attr("value",categorias[i].ID).text(categorias[i].nombre_categoria)
			);
		}
		$("#seleccionCategoria").change(() => {
			cargarArticulos();
		});
		$("#seleccionOrden").change(() => {
			cargarArticulos();
		});
	},
	dataType: "json"
});

cargarArticulos();

function cargarArticulos(){
	$.ajax({
		method: "POST",
		url: "models/obtenerArticulos.php",
		data: {
			seleccionCategoria: $("#seleccionCategoria").val(),
			seleccionOrden: $("#seleccionOrden").val()
		},
		success: mostrarArticulos,
		dataType: "json"
	});
}

function mostrarArticulos(articulos){
	console.log(articulos);
	$("#articulosTienda").empty();
	for(let i in articulos){
		articulos[i].indexImagenesArticulo = 0;
		$("#articulosTienda").append(
			$("<div>").addClass("articulo").attr("id","articulo"+articulos[i].id).append(
				$("<div>").addClass("slideshow-container"),
				$("<div>").addClass("mySlides").addClass("fade").append(
					$("<img>").attr("id","imagenesArticulo"+articulos[i].id).attr("src","imagenes/"+articulos[i].imagenes[0])
				),
				$("<div>").addClass("div_info_articulo").append(
					$("<h1>").addClass("nombre_articulo").text(articulos[i].nombre),
					$("<p>").text("art:" + articulos[i].id + " - Precio: " + articulos[i].precio),
					$("<p>").addClass("descripcion_articulo").text(articulos[i].descripcion)
				)
			)
		);
		if(articulos[i].imagenes.length > 1 && articulos[i].disponibilidad != 2){
			$("#articulo"+articulos[i].id).append(
				$("<a>").addClass("prev").html("&#10094;").click(() => {
					articulos[i].indexImagenesArticulo -= 1;
					if(articulos[i].indexImagenesArticulo < 0){
						articulos[i].indexImagenesArticulo = articulos[i].imagenes.length-1;
					}
					mostrarImagen(articulos[i]);
				}),
				$("<a>").addClass("next").html("&#10095;").click(() => {
					articulos[i].indexImagenesArticulo += 1;
					if(articulos[i].indexImagenesArticulo >= articulos[i].imagenes.length){
						articulos[i].indexImagenesArticulo = 0;
					}
					mostrarImagen(articulos[i]);
				})
			)
		}		
	}
}

function mostrarImagen(articulo) {
	imagenAMostrar = "imagenes/"+articulo.imagenes[articulo.indexImagenesArticulo];
	$("#imagenesArticulo"+articulo.id).attr("src",imagenAMostrar);
}