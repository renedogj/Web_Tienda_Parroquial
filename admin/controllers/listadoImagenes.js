var numImagenesCargadas = 0;
var totalImagenes;
var imagenes;

$.ajax({
	method: "POST",
	url: "../models/obtenerImagenes.php",
	success: function(resultImagenes){
		imagenes = resultImagenes;
		totalImagenes = imagenes.length;
		cargarImagenes();
	},
	dataType: "json"
});

$(window).scroll(function(){
	if($(window).scrollTop() + $(window).height() == $(document).height()){
		if(numImagenesCargadas < totalImagenes){
			cargarImagenes();
		}
	}
});

function cargarImagenes(){
	let numImagenesAcargar = 18;
	if(numImagenesCargadas + numImagenesAcargar > totalImagenes){
		numImagenesAcargar = totalImagenes - numImagenesCargadas;
	}
	for(let i = numImagenesCargadas; i < numImagenesCargadas + numImagenesAcargar; i++){
		$("#contenedoraImagenes").append(
			$("<div>").addClass("contenedora-imagen").append(
				$("<div>").addClass("imagen").append(
					$("<img>").attr("src", "../../imagenes/"+imagenes[i].nombre_foto)
				),
				$("<div>").addClass("info-imagen").append(
					$("<p>").html("<b>Id:</b> "+imagenes[i].id),
					$("<p>").html("<b>Nombre:</b> "+imagenes[i].nombre_foto)
				),
				$("<span>").addClass("cerrar").html("&times;").click(() => {
					//alert(imagenes[i].id + " => " + imagenes[i].nombre_foto);
					$("#bIdImagen").text(imagenes[i].id);
					$("#bNombreImagen").text(imagenes[i].nombre_foto);
					$("#imgDialog").attr("src","../../imagenes/" + imagenes[i].nombre_foto);
					$("#dialog-eliminarImagen").css("display","grid");		
				})
			).attr("id","idImagen-"+imagenes[i].id)
		)
	}
	numImagenesCargadas += numImagenesAcargar;
	ajustarTamañoImagenes();
}

$("#bttnCancelarEliminar").click(() => {
	$("#dialog-eliminarImagen").hide();	
})

$("#bttnEliminar").click(() => {
	var id = $("#bIdImagen").text();
	$.ajax({
		method: "POST",
		data:{ 
			id: id,
			nombre: $("#bNombreImagen").text()
		},
		url: "../models/eliminarImagen.php",
		success: function(result){
			if(!result.error){
				$("#dialog-eliminarImagen").hide();
				$("#idImagen-"+id).remove();
			}else{
				alert("No se ha podido elimiar la imagen");
			}
		},
		dataType: "json"
	});
})