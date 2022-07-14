$("#idProductoTxt").text("ID: "+IDArticulo);
$("#idProducto").val(IDArticulo);
nombreArticulo = cambiarATilde(nombreArticulo);
$("#nombre").val(nombreArticulo);
descripcion = cambiarATilde(descripcion);
$("#descripcion").val(descripcion);
$("#precio").val(precio);

if(mostrar==1){
	$("#mostrar").attr("checked","checked");
	$("[for='mostrar']").empty();
	$("[for='mostrar']").text("El articulo se muestra");
}else{
	$("#mostrar").removeAttr("checked");
	$("[for='mostrar']").empty();
	$("[for='mostrar']").text("El articulo no se muestra");
}

switch(disponibilidad) {
	case 1:
		$("#dispoNomal").attr("checked","checked");
		break;
	case 2:
		$("#dispoAgotado").attr("checked","checked");
		break;
	case 3:
		$("#dispoUnidadesLimitadas").attr("checked","checked");
		break;
	default:
		$("#dispoNomal").attr("checked","checked");
		break;
}

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