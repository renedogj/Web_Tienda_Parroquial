var fotosSahara = new Array();
fotosSahara[0] = "imagenes/IMG-20211019-WA0007 (2).jpg";
fotosSahara[1] = "imagenes/mapaSenegal.png";
fotosSahara[2] = "imagenes/proyecto misionero presentación_Página_1.jpg";
var fotosTalleres = new Array();
fotosTalleres[0] = "imagenes/Foto talleres 1.jpg";
fotosTalleres[1] = "imagenes/Foto talleres 2.jpg";

autoPlusSlide();
ajustarTamañoImagenes();
slideSaharaTalleres();

function slideSaharaTalleres() {
	if($("#imagenesSahara").attr("src")==fotosSahara[0]){
		$("#imagenesSahara").attr("src",fotosSahara[1]);
	}else if($("#imagenesSahara").attr("src")==fotosSahara[1]){
		$("#imagenesSahara").attr("src",fotosSahara[2]);
	}else{
		$("#imagenesSahara").attr("src",fotosSahara[0]);
	}

	if($(".imagenesTalleres").attr("src")==fotosTalleres[0]){
		$(".imagenesTalleres").attr("src",fotosTalleres[1]);
	}else{
		$(".imagenesTalleres").attr("src",fotosTalleres[0]);
	}
	setTimeout(slideSaharaTalleres, 7000);
}

function plusSlides(num,countArticulo) {
	articulos[countArticulo].indexImagenesArticulo += num;
	mostrarSlide(countArticulo);
}

/*function mostrarSlide(indiceArticulo) {
	puntoClaseImagenesArticulo = "."+articulos[indiceArticulo].claseImagenesArticulo;
	if(articulos[indiceArticulo].indexImagenesArticulo > articulos[indiceArticulo].imagenes.length){
		articulos[indiceArticulo].indexImagenesArticulo = 1;
	}
	if(articulos[indiceArticulo].indexImagenesArticulo < 1){
		articulos[indiceArticulo].indexImagenesArticulo = articulos[indiceArticulo].imagenes.length;
	}
	imagenAMostrar = "imagenes/"+articulos[indiceArticulo].fotos[articulos[indiceArticulo].indexarticulo];
	$("puntoClaseImagenesArticulo").attr("src",imagenAMostrar);
}*/

function autoPlusSlide() {
	for(i=0;i<numArticulos;i++){
		if(articulos[i].imagenes.length>1){
			plusSlides(1,i);
		}
	}
	setTimeout(autoPlusSlide, 7000);
}

function ajustarTamañoImagenes(){
	anchoFotosSaharaTalleres = $(".SaharaTalleres").width();
	alturaFotosSaharaTalleres = anchoFotosSaharaTalleres*0.6;
	$(".SaharaTalleres").css("height",alturaFotosSaharaTalleres);

	anchoArticulos = $(".articulo").width();
	alturaArticulos = anchoArticulos*1.5;
	$(".articulo").css("height",alturaArticulos);
	$(".tienda").css("height",$(".margenes").height());

	anchoLogo = $(".div-imagen-logo img").width();
	alturaLogo = anchoLogo;
	$(".div-imagen-logo img").css("height",alturaLogo);
}
