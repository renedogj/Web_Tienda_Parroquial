$.ajax({
	method: "POST",
	url: "../../models/obtenerCategorias.php",
	success: function(categorias){
		//console.log(categorias);
		let textoMostrarCategoria;
		for(let i in categorias){
			if(categorias[i].mostrar_categoria != 0){
				textoMostrarCategoria = "Si se muestran los articulos de esta categoria";
			}else{
				textoMostrarCategoria = "No se muestran los articulos de esta categoria";
			}

			$("#tablaCategorias").append(
				$("<tr>").append(
					$("<td>").append(
						$("<button>").text("Editar").click(() => {
							window.location.assign("editarCategoria.php?id="+categorias[i].Id);
						})
						),
					$("<td>").text(categorias[i].nombre_categoria),
					$("<td>").text(textoMostrarCategoria)
					)
				)
		}
	},
	dataType: "json"
});