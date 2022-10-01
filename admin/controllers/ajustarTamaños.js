$(document).ready(() => {
	ajustarTamañoImagenes();
	ajustarTamañoMenu(); 
});

$(window).resize(() => {
	ajustarTamañoImagenes();
	ajustarTamañoMenu(); 
});

function ajustarTamañoImagenes(){
	$(".articulo").css("height",$(".articulo").width()*1.5);

	anchoImagen = $(".imagen").width();
	alturaImagen = anchoImagen*1.5;
	$(".imagen").css("height",alturaImagen);
	alturaContenedorImagen = alturaImagen + 100;
}

function ajustarTamañoMenu(){
	$(".div-icono-usuario").css("height",$(".div-icono-usuario").width());
	$(".dropdown-content").css("top",$(".div-usuario").height());
}	