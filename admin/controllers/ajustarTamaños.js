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
	//$(".div-contenedora-imagenes-articulo").css("height",(alturaContenedorImagen*Math.ceil((contadorImagenesReales)/4)));
}

function ajustarTamañoMenu(){
	$(".div-icono-usuario").css("height",$(".div-icono-usuario").width());
	$(".dropdown-content").css("top",$(".div-usuario").height()-7);
	$(".dropdown-content").css("left",-($(".div-usuario").width()+130));
	//$(".categoria").css("margin-top",$("nav").height());
}