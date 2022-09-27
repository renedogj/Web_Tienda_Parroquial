$("#inputFoto").change(() => {
	if((($("#inputFoto")[0].files[0].size/1024)/1024).toFixed(4) <= 1 /*MB*/){
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
					$("#imgTemporal").attr("src","../../temp/"+result.nombre_foto);
					//$("#div-contenedora-imagen").show();
					$("#inputNombreFoto").val(result.nombre_sinExtension);
				}else if(result.error == 1){
					$("#inputNombreFoto-error").text("Ya existe una foto con ese mismo nombre");
				}else{
					alert("Se ha producido un error al subir el archivo")
				}
			},
			dataType: "json"
		});
	}else{
		alert("No se puede subir la imagen " + $("#inputFoto")[0].files[0].name + ", es muy pesada");
		$("#imgTemporal").attr("src","");
		//$("#div-contenedora-imagen").hide();
		$("#inputNombreFoto").val("");
	}
});

$("#bttnSubirImagen").click(() => {
	var nombreFoto = $("#inputNombreFoto").val().trim();
	if(nombreFoto != "" && nombreFoto.length < 50){
		var formData = new FormData();
		var files = $("#inputFoto")[0].files[0];
		formData.append("foto",files);
		formData.append("nombreFoto",nombreFoto);
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
				}else if(result.error == 2){
					$("#inputNombreFoto-error").text("El nombre del archivo tiene que tener menos de 50 caracteres");
				}else{
					alert("Se ha producido un error al subir el archivo")
				}
			},
			error: function(xhr,status,error){
				alert("Se ha producido un error al subir el archivo");
			},
			dataType: "json"
		});
	}else{
		$("#inputNombreFoto-error").text("El nombre del archivo tiene que tener menos de 50 caracteres");
	}
});