// Creamos unas variables globales
var fname, lname, id, fecha, mail, genero;
var comprobar = false;

// Función que actúa en función del estado de conexión con Facebook
function statusChangeCallback(response) {

	// Si se conecta
	if (response.status === 'connected') {

		// Nos logueamos en la página con Facebook
		loginFB();
		setInterval(function(){
			if(comprobar == true){
				window.location.replace("insert.php?id="+id+"&fname="+fname+"&lname="+lname+"&fecha="+fecha+"&mail="+mail+"&genero="+genero);
			}
		},1000)

	} else {

		// Si está logueado en Facebook pero no en la página
		if (response.status === 'not_authorized') {

			document.getElementById('status').innerHTML = 'Please log ' + 'into this app.';
		
		} else {

			// Si no está logueado en Facebook
			document.getElementById('status').innerHTML = 'Please log ' + 'into Facebook.';
		}
	}
}

// Obtenemos los datos de Facebook de la persona que necesitamos
function loginFB(){

	// Identificador unico de la persona en Facebook
	id = FB.getAuthResponse().userID;
	
	// Nombre de la persona en Facebook
    FB.api('/me', {fields: 'first_name'}, function(response) {
		fname = response.first_name;
	  	comprobar = true;
	});
	
	// Apellidos de la persona en Facebook
	FB.api('/me', {fields: 'last_name'}, function(response) {
		lname = response.last_name;
	});
		
	FB.api('/me', {fields: 'birthday'}, function(response) {
		fecha = response.birthday;
	});

	FB.api('/me', {fields: 'mail'}, function(response) {
		mail = response.mail;
	});

	FB.api('/me', {fields: 'gender'}, function(response) {
		genero = response.gender;
	});

}

// Comprobamos el estado del Login
function checkLoginState() {
	FB.getLoginStatus(function(response) {
  		statusChangeCallback(response);
	});
}

// Especificamos el ID de nuestra aplicación registrada y la versión
window.fbAsyncInit = function() {
	FB.init({
		appId      : '1046652862095534',
		xfbml      : true,
		version    : 'v2.6'
	});
};
