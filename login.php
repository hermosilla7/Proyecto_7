<?php
	session_start();
	error_reporting(0);
	if(isset($_SESSION ['error'])){
		$error=$_SESSION['error'];
	}
	session_destroy();
?>
	<head>
		<meta charset="utf-8"/>
		<title>Just Meet</title>
		<!-- <link rel="icon" type="image/png" href="img/logo.png" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/estilo_login.css"/> -->
		<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/loginFacebook.js"></script>
		<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
			  	if (d.getElementById(id)) return;
			  	js = d.createElement(s); js.id = id;
			  	js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.6&appId=1046447695449384";
			  	fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	</head>
		<div class="login-form">
			<form name="f1" action="login.proc.php" method="get">
				<input type="text" name="mail" class="form-control" placeholder="Correo"maxlength="50">
				    <input type="password" name="pass" class="form-control" placeholder="Contraseña">
				    <button type="submit" class="btn btn-primary inverse btn-lg" name="acce">Entrar</button>
			</form>
				<fb:login-button scope="public_profile,email,user_hometown,user_birthday" onlogin="checkLoginState();">
				</fb:login-button>
				<div class="alerts">
				    <i class="fa fa-lock"></i>
					<span class="alert">Datos incorrectos</span>
					 <a href="login3.php" target="_blank"><span class="alert">Has olvidadola contraseña?</span></a>
					 
    			</div>
			</div>
		<?php
		echo "<div class='log-error'>";
			if(isset($error)){
				echo "ERROR: " . $error;
				echo "<br/><br/>";
			}
		echo "</div>";
		?>		
