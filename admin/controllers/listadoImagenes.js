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
				)
			)
		)
	}
	numImagenesCargadas += numImagenesAcargar;
	ajustarTamañoImagenes();
}