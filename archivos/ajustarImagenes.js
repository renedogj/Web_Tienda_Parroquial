var fotosSahara = new Array();
fotosSahara[0] = "imagenes/CartelSahara.jpg";
fotosSahara[1] = "imagenes/MapaSahara.png";
fotosSahara[2] = "imagenes/MisionSahara_1.png";
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

function plusSlides(num,articulo) {
	articulos[articulo].indexarticulo += num;
	mostrarSlide(articulo);
}

function mostrarSlide(indiceArticulo) {
	puntoClaseImagenesArticulo = "."+articulos[indiceArticulo].claseImagenesArticulo;
	if(articulos[indiceArticulo].indexarticulo > articulos[indiceArticulo].numFotos){
		articulos[indiceArticulo].indexarticulo = 1;
	}
	if(articulos[indiceArticulo].indexarticulo < 1){
		articulos[indiceArticulo].indexarticulo = articulos[indiceArticulo].numFotos;
	}
	imagenAMostrar = "imagenes/"+articulos[indiceArticulo].fotos[articulos[indiceArticulo].indexarticulo];
	$(puntoClaseImagenesArticulo).attr("src",imagenAMostrar);
}

function autoPlusSlide() {
	for(i=0;i<numArticulos;i++){
		if(articulos[i].numFotos>1){
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
	alturaArticulos = anchoArticulos*1.45;
	$(".articulo").css("height",alturaArticulos);
	$(".tienda").css("height",$(".margenes").height());

	anchoLogo = $(".div-imagen-logo img").width();
	alturaLogo = anchoLogo;
	$(".div-imagen-logo img").css("height",alturaLogo);
}
