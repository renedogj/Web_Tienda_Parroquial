$(window).resize(() => {
	ajustarTamañoImagenes();
});

function ajustarTamañoImagenes(){
	$(".articulo").css("height",$(".articulo").width()*1.5);
}