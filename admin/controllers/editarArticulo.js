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

		for(let i in articulo.imagenes){
			$("#select-imagen-id").append(
				$("<option>").val(articulo.imagenes[i].id).text(articulo.imagenes[i].id)
			);
			$("#select-imagen-nombre").append(
				$("<option>").val(articulo.imagenes[i].nombre_foto).text(articulo.imagenes[i].nombre_foto)
			);
		}
	},
	dataType: "json"
});

$.ajax({
	method: "POST",
	url: "../../models/obtenerCategorias.php",
	success: function(categorias){
		console.log(categorias)
		for(let i in categorias){
			$(".modificar-categorias-articulo").append(	
				$("<div>").addClass("div-input-categoria").append(
					$("<input>").attr("type","checkbox").attr("id","input-categoria-"+i)
						.attr("name","input-categoria-"+i).val(categorias[i].Id),
					$("<label>").attr("for","input-categoria-"+i).text(categorias[i].nombre_categoria)
				)
			)
		}
		$("#numCategorias").val(categorias.length);
	},
	dataType: "json"
});