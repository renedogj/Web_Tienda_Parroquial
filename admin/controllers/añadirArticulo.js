$.ajax({
	method: "POST",
	url: "../../models/obtenerCategorias.php",
	success: function(categorias){
		for(let i in categorias){
			let id = categorias[i].Id;
			$(".modificar-categorias-articulo").append(	
				$("<div>").addClass("div-input-categoria").append(
					$("<input>").attr("type","checkbox").attr("id","inputCategoria-"+id)
						.attr("name","inputCategoria").val(id),
					$("<label>").attr("for","inputCategoria-"+id).text(categorias[i].nombre_categoria)
				)
			)
		}
		$("#numCategorias").val(categorias.length);
	},
	dataType: "json"
});

$.ajax({
	method: "POST",
	url: "../models/obtenerImagenes.php",
	success: function(imagenes){
		for(let i in imagenes){
			$("#select-imagen-id").append(
				$("<option>").val(imagenes[i].id).text(imagenes[i].id)
			);
			$("#select-imagen-nombre").append(
				$("<option>").val(imagenes[i].id).text(imagenes[i].nombre_foto)
			);
		}
	},
	dataType: "json"
});

$("#inputMostrar").change(() => {
	if($("#inputMostrar").prop("checked")){
		$("[for='inputMostrar']").empty();
		$("[for='inputMostrar']").text("El articulo se muestra");
	}else{
		$("[for='inputMostrar']").empty();
		$("[for='inputMostrar']").text("El articulo no se muestra");
	}
});

$("#formularioNuevoArticulo").submit(() => {
	if($("#formularioNuevoArticulo").valid()){
		let articulo = {
			nombre : $("#nombre").val(),
			descripcion : $("#descripcion").val(),
			disponibilidad : $('input[name="disponibilidad"]:checked').val(),
			precio : $("#precio").val(),
			mostrar : $("#inputMostrar")[0].checked,
			categorias : [],
			imagenes : [],
		}
		$('input[name="inputCategoria"]:checked').each((index,element) => {
			articulo.categorias.push(element.value)
		});

		$('input[name="inputImagen"]').each((index,element) => {
			articulo.imagenes.push(element.value)
		});

		$.ajax({
			method: "POST",
			data: articulo,
			url: "../models/newArticulo.php",
			success: function(result){
				window.location.assign("listadoArticulos.php");
			},
			dataType: "text"
		});
	}
	return false;
});

$("#bttnDeshacer").click(() => {
	document.location.reload();
});

function ajustarIDNombreImagen(id) {
	$("#select-imagen-id").val(id);
	$("#select-imagen-nombre").val(id);
}

function sumImagen(){
	let id = $("#select-imagen-id").val();
	if(id != null && id != ""){
		let nombreFoto = $("#select-imagen-nombre [value="+id+"]").text();
		if($("#input-imagen-"+id).length == 0){
			$(".div-contenedora-imagenes-articulo").append(htmlImagen(id,nombreFoto));
			ajustarTamañoImagenes();
		}
		$("#select-imagen-id")[0][0].selected = true;
		$("#select-imagen-nombre")[0][0].selected = true;
	}
}

function resImagen(id){
	$("#contenedora-imagen-"+id).css("margin",0);
	$("#contenedora-imagen-"+id).remove();
	ajustarTamañoImagenes();
}

function htmlImagen(id,nombreFoto) {
	return $("<div>").addClass("contenedora-imagen").attr("id","contenedora-imagen-"+id).append(
		$("<div>").addClass("imagen").append(
			$("<img>").attr("src","../../imagenes/"+nombreFoto)
		),
		$("<div>").addClass("info-imagen").append(
			$("<p>").html("<b>ID:</b>"+id+"</p>"),
			$("<p>").html("<b>Nombre:</b>"+nombreFoto+"</p>"),
		),
		$("<input>").attr("type","hidden").attr("name","inputImagen").attr("id","inputImagen-"+id).val(id),
		$("<span>").addClass("cerrar").html("&times;").click(() => {
			$("#contenedora-imagen-"+id).css("margin",0);
			$("#contenedora-imagen-"+id).remove();
		})
	)
}