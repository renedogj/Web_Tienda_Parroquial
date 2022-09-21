$("#bttnAñadir").click(() => {
	var nombre = $("#nombre").val().trim();
	if(nombre != null && nombre != ""){	
		$.ajax({
			method: "POST",
			data: {
				nombre : nombre,
				mostrar : $("#inputMostrar")[0].checked
			},
			url: "../models/newCategoria.php",
			success: function(result){
				window.location.assign("listadoCategorias.php");
			},
			dataType: "text"
		});
	}
});

$("#inputMostrar").change(() => {
	if($("#inputMostrar").prop("checked")){
		$("[for='inputMostrar']").empty();
		$("[for='inputMostrar']").text("Los articulos de esta categoria se muestran");
	}else{
		$("[for='inputMostrar']").empty();
		$("[for='inputMostrar']").text("Los articulos de esta categoria no se muestran");
	}
});

$("#bttnDeshacer").click(() => {
	event.preventDefault();
	document.location.reload();
});