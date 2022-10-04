$.ajax({
	method: "POST",
	url: "../db/apiFirebase.php",
	success: function(firebaseConfig){
		firebase.initializeApp(firebaseConfig);
	},
	dataType: "json",
	async: false
});

firebase.auth().onAuthStateChanged(function(user) {
	if(user){
		$("#correo").val(user.email);
	}
});

function cerrarSesion(){
	firebase.auth().signOut();
}

$(document).ready(() => {
	$("#formularioAcceder").submit(() => {
		var email = $("#correo").val();
		var password = $("#password").val();

		firebase.auth().signInWithEmailAndPassword(email, password)
		.then((user) => {
			$("#p-fallo-inicio").empty();
			window.location.href = "controllers/listadoArticulos.php";
		})
		.catch(function(error) {
			$("#p-fallo-inicio").html("Usuario o Contraseña incorrecto");
		});
		return false;
	});
});