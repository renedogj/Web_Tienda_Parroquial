$.ajax({
	method: "POST",
	data: {"idArticulo": idArticulo},
	url: "../models/obtenerArticulo.php",
	success: function(articulo){
		console.log(articulo)
		$("#idProductoTxt").text("ID: "+articulo.id);
		$("#idProducto").val(articulo.id);

		articulo.nombre = cambiarATilde(articulo.nombre);
		$("#nombre").val(articulo.nombre);

		descripcion = cambiarATilde(articulo.descripcion);
		$("#descripcion").val(articulo.descripcion);

		$("#precio").val(articulo.precio);

		if(articulo.mostrar==1){
			$("#mostrar").attr("checked","checked");
			$("[for='mostrar']").empty();
			$("[for='mostrar']").text("El articulo se muestra");
		}else{
			$("#mostrar").removeAttr("checked");
			$("[for='mostrar']").empty();
			$("[for='mostrar']").text("El articulo no se muestra");
		}

		switch(articulo.disponibilidad) {
			case 1:
				$("#dispoNomal").attr("checked","checked");
				break;
			case 2:
				$("#dispoAgotado").attr("checked","checked");
				break;
			case 3:
				$("#dispoUnidadesLimitadas").attr("checked","checked");
				break;
			default:
				$("#dispoNomal").attr("checked","checked");
				break;
		}
	},
	dataType: "json"
});

$.ajax({
	method: "POST",
	url: "../../models/obtenerCategorias.php",
	success: function(categorias){
		/*for(let i in categorias){
			$("#seleccionCategoria").append(
				$("<option>").attr("value",categorias[i].Id).text(categorias[i].nombre_categoria)
			);
		}*/
	},
	dataType: "json"
});