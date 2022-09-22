$("#inputFoto").change(() => {
	var formData = new FormData();
	var files = $("#inputFoto")[0].files[0];
	formData.append("foto",files);
	$.ajax({
		method: "POST",
		data: formData,
		contentType: false,
		processData: false,
		url: "../models/mostrarImagenTemporal.php",
		success: function(result){
			if(result.error == null){
				$(".div-contenedora-imagen").empty();
				$(".div-contenedora-imagen").append(
					$("<div>").addClass("contenedora-imagen").append(
						$("<div>").addClass("imagen").append(
							$("<img>").attr("src","../../temp/"+result.nombre_foto)
						)
					)
				);
				$("#inputNombreFoto").val(result.nombre_sinExtension);
			}else if(result.error == 1){
				$("#inputNombreFoto-error").text("Ya existe una foto con ese mismo nombre");
			}else{
				alert("Se ha producido un error al subir el archivo")
			}
		},
		dataType: "json"
	});
});

$("#bttnSubirImagen").click(() => {
	if($("#inputNombreFoto").val().trim() != ""){
		var formData = new FormData();
		var files = $("#inputFoto")[0].files[0];
		formData.append("foto",files);
		formData.append("nombreFoto",$("#inputNombreFoto").val());
		$.ajax({
			method: "POST",
			data: formData,
			contentType: false,
			processData: false,
			url: "../models/subirImagen.php",
			success: function(result){
				if(result.error == null){
					window.location.assign('listadoImagenes.php');
				}else if(result.error == 1){
					$("#inputNombreFoto-error").text("Ya existe una foto con ese mismo nombre");
				}else{
					alert("Se ha producido un error al subir el archivo")
				}
			},
			dataType: "text"
		});
	}
});