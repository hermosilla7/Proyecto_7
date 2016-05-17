<?php
	session_start();
	error_reporting(0);
	$user_id = $_SESSION['id'];
	$nom_user = $_SESSION['nombre'];
	$apellidos = $_SESSION['apellidos'];
	$mail = $_SESSION['mail'];
	$sexo_id = $_SESSION['sexo'];
	include_once 'conexion.proc.php';
?>
<!DOCTYPE html>
<html>
	<head>

		<!-- TITULO PAGINA -->
		<title>Just Meet</title>

		<!-- PROPIEDADES META WEB -->
		<meta http-equiv="Content-Type" content="text/html">
		<meta name="description" content="Página web més de 65">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8"/>

		<script type="text/javascript" src="js/funciones.js"></script>
		
		<!-- ESTILOS Y FAVICON -->
		<link rel="icon" type="image/png" href="img/logo.png" />
		<link rel="stylesheet" type="text/css" href="css/estilo_index.css"/>
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/simple-sidebar.css" rel="stylesheet">
    	<link href="css/cambios.css" rel="stylesheet">
    	<link href="css/heroic-features.css" rel="stylesheet">
		<!-- JQUERY -->
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Crunchify's Scroll to Top Script -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		</script>

		<script>
			jQuery(document).ready(function() {
				var offset = 220;
				var duration = 500;
			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop() > offset) {
					jQuery('.crunchify-top').fadeIn(duration);
					} else {
					jQuery('.crunchify-top').fadeOut(duration);
				}
			});

			jQuery('.crunchify-top').click(function(event) {
				event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
				return false;
				})
			});
		</script>
	</head>
				<!-- <b id='titulo_header'>Just Meet</b> -->
<div id="sidebar-wrapper">
<ul class="sidebar-nav">	
			<div class="logo">
				<a href="principal.php"><img src="assets/img/logos/vr3.png" /></a>
			</div>
	
	<div class="login-form">

				<div class="prin-img" align="middle" style="margin-bottom: 10px;"></div>
		 			<?php
		 				if(!isset($_SESSION['id'])){
		 			
					$_SESSION['error'] = "No te saltes pasos!";
    				header("location: index.php");
						} else {
					?>
						<li><a href="perfil_propio.php"><?php echo "Bienvenido " .$nom_user?></a></li>

					<?php
						}
					?>
			 </div>
                <li class="sidebar-brand"><a href="principal.php">Meet</a></li>
		  		<li><a href="chat.php">Chat</a></li>
		  		<li><a href="match.php">Jugar</a></li>

		  		<li><a href="contacto.php">Contacto</a></li>
				<li><a href="logout.proc.php">Cerrar sesion</a></li>
			</ul>
		</div>
