$.ajax({
	method: "POST",
	url: "../../db/apiFirebase.php",
	success: function(firebaseConfig){
		firebase.initializeApp(firebaseConfig);
	},
	dataType: "json",
	async: false
});

firebase.auth().onAuthStateChanged(function(user) {
	if(user){
		var email = user.email;
		$(".div-icono-usuario i").empty();
		$(".div-icono-usuario i").html(email.substr(0,1).toUpperCase());
		$(".dropdown-content").empty();
		$(".dropdown-content").append(
			$("<div>").addClass("dropdown-contenedora").append(
				$("<a>").addClass("cambiar-pwd").text("Cambiar contraseña").click(() => {cambiarContraseña()}),
				$("<a>").addClass("logout").text("Cerrar Sesión").click(() => {cerrarSesion()})
				)
			);
	}else{
		window.location.assign("../index.php");
	}
});

function cerrarSesion(){
	firebase.auth().signOut();
}
