$.ajax({
	method: "POST",
	url: "../../models/obtenerCategorias.php",
	success: function(categorias){
		for(let i in categorias){
			let id = categorias[i].Id;
			$(".modificar-categorias-articulo").append(	
				$("<div>").addClass("div-input-categoria").append(
					$("<input>").attr("type","checkbox").attr("id","input-categoria-"+id)
						.attr("name","input-categoria").val(id),
					$("<label>").attr("for","input-categoria-"+id).text(categorias[i].nombre_categoria)
				)
			)
		}
		$("#numCategorias").val(categorias.length);
	},
	dataType: "json"
});

$.ajax({
	method: "POST",
	data: {"idArticulo": idArticulo},
	url: "../models/obtenerArticulo.php",
	success: function(articulo){
		$("#idProductoTxt").text("ID: "+articulo.id);
		$("#idProducto").val(articulo.id);

		articulo.nombre = cambiarATilde(articulo.nombre);
		$("#nombre").val(articulo.nombre);

		descripcion = cambiarATilde(articulo.descripcion);
		$("#descripcion").val(articulo.descripcion);

		$("#precio").val(articulo.precio);

		if(articulo.mostrar==1){
			$("#inputMostrar").attr("checked","checked");
			$("[for='inputMostrar']").empty();
			$("[for='inputMostrar']").text("El articulo se muestra");
		}else{
			$("#inputMostrar").removeAttr("checked");
			$("[for='inputMostrar']").empty();
			$("[for='inputMostrar']").text("El articulo no se muestra");
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
			let id = articulo.imagenes[i].id;
			let nombreFoto = articulo.imagenes[i].nombre_foto;
			$(".div-contenedora-imagenes-articulo").append(htmlImagen(id,nombreFoto));
		}

		for(let i in articulo.categorias){
			$("#input-categoria-"+articulo.categorias[i].id).attr("checked","checked");
		}
		ajustarTamañoImagenes();
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

$("#bttnDeshacer").click(() => {
	event.preventDefault();
	document.location.reload();
});

$("#bttnEditar").click(() => {
	let articulo = {
		id : $("#idProducto").val(),
		disponibilidad : $('input[name="disponibilidad"]:checked').val(),
		nombre : $("#nombre").val(),
		descripcion : $("#descripcion").val(),
		precio : $("#precio").val(),
		mostrar : $("#inputMostrar")[0].checked,
		categorias : [],
		imagenes : [],
	}
	$('input[name="input-categoria"]:checked').each((index,element) => {
		articulo.categorias.push(element.value)
	});

	$('input[name="input-imagen"]').each((index,element) => {
		articulo.imagenes.push(element.value)
	});

	$.ajax({
		method: "POST",
		data: articulo,
		url: "../models/editarArticulo.php",
		success: function(result){
			window.location.assign("listadoArticulos.php");
		},
		dataType: "text"
	});
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
		$("<input>").attr("type","hidden").attr("name","input-imagen").attr("id","input-imagen-"+id).val(id),
		$("<span>").addClass("cerrar").html("&times;").click(() => {
			$("#contenedora-imagen-"+id).css("margin",0);
			$("#contenedora-imagen-"+id).remove();
		})
	)
}

function cambiarATilde(string) {
	string = string.replace("&aacute","á");
	string = string.replace("&eacute","é");
	string = string.replace("&iacute","í");
	string = string.replace("&oacute","ó");
	string = string.replace("&uacute","ú");
	return string;
}