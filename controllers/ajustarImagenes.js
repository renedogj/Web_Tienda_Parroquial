var imagenes = new Array();

$.ajax({
	method: "POST",
	url: "models/obtenerImagenes.php",
	success: function(gruposImagenes){
		imagenes = gruposImagenes;
		slideSaharaTalleres()
	},
	dataType: "json"
});

ajustarTamañoImagenes();

$(window).resize(() => {
	ajustarTamañoImagenes();
});

function slideSaharaTalleres() {
	for(let grupoImagenes in imagenes){
		let dir = "imagenes/" + grupoImagenes + "/";
		let nombreFotoActual = "";
		if($("#imagenes"+grupoImagenes).attr("src") !== undefined){
			nombreFotoActual = $("#imagenes"+grupoImagenes).attr("src").replace(dir,"");
		}
		let numImagen = imagenes[grupoImagenes].indexOf(nombreFotoActual);
		numImagen++;
		if(numImagen >= imagenes[grupoImagenes].length){
			numImagen = 0;
		}
		$("#imagenes"+grupoImagenes).attr("src",dir + imagenes[grupoImagenes][numImagen]);
	}
	setTimeout(slideSaharaTalleres, 7000);
}

function ajustarTamañoImagenes(){
	anchoFotosProyectoTalleres = $(".proyectoTalleres").width();
	alturaFotosProyectoTalleres = anchoFotosProyectoTalleres*0.6;
	$(".proyectoTalleres").css("height",alturaFotosProyectoTalleres);

	$(".articulo").css("height",$(".articulo").width()*1.5);
}
