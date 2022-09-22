$(document).ready(function(){
	$("#formularioNuevoArticulo").validate({
		rules:{
			nombre:{
				required: true,
				minlength: 3,
			},
			descripcion:{
				required: true,
				minlength: 3,
			},
			precio:{
				required: true,
				number: true,
			},
			disponibilidad:{
				required: true,
			}
		},
		messages: {
			nombre:{
				required: "Es necesario rellenar este campo",
				minlength: "El campo nombre debe tener al menos 3 caracteres",
			},
			descripcion:{
				required: "Es necesario rellenar este campo",
				minlength: "El campo descripción debe tener al menos 3 caracteres",
			},
			precio:{
				required: "Es necesario rellenar este campo",
			},
			disponibilidad:{
				required: "Es necesario rellenar este campo",
			}
		},
	});
});