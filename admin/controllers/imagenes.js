$(window).resize(() => {
	ajustarTamañoImagenes();
});

function ajustarTamañoImagenes(){
	$(".articulo").css("height",$(".articulo").width()*1.5);

	anchoImagen = $(".imagen").width();
	alturaImagen = anchoImagen*1.5;
	$(".imagen").css("height",alturaImagen);
	alturaContenedorImagen = alturaImagen + 100;
	//$(".div-contenedora-imagenes-articulo").css("height",(alturaContenedorImagen*Math.ceil((contadorImagenesReales)/4)));
}