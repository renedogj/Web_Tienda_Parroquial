function cambioMostrar() {
	if($("#mostrar").prop("checked")){
		$("[for='mostrar']").empty();
		$("[for='mostrar']").text("El articulo se muestra");
	}else{
		$("[for='mostrar']").empty();
		$("[for='mostrar']").text("El articulo no se muestra");
	}
}

function cambiarATilde(string) {
	string = string.replace("&aacute","á");
	string = string.replace("&eacute","é");
	string = string.replace("&iacute","í");
	string = string.replace("&oacute","ó");
	string = string.replace("&uacute","ú");
	return string;
}