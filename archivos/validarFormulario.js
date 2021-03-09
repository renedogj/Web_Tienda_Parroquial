$(document).ready(function(){
	$("#formularioPedirArticulos").validate({
		rules:{
			nombre:{
				required: true,
				minlength: 3,
			},
			apellido:{
				required: true,
				minlength: 3,
			},
			correoElectronico:{
				required: true,
				email: true,
			},
			articulosPedidos:{
				required: true,
			},
		},
		messages: {
			nombre:{
				required: "Es necesario rellenar este campo",
				minlength: "El campo nombre debe tener al menos 3 caracteres",
			},
			apellido:{
				required: "Es necesario rellenar este campo",
				minlength: "El campo apellido debe tener al menos 3 caracteres",
			},
			correoElectronico:{
				required: "Es necesario rellenar este campo",
				email: "El campo correo debe tener formato de corrreo electrónico",
			},
			articulosPedidos:{
				required: "Es necesario rellenar este campo",
			},
		},
	});
});