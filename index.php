<?php
	session_start();
	error_reporting(0);
	if(isset($_SESSION ['error'])){
		$error=$_SESSION['error'];
	}
	session_destroy();
?>
<!DOCTYPE html>
<html>
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
	<body>
		<div class="login-form">
			<div class="prin-img" align="middle" style="margin-bottom: 10px;">
			<!-- <input type="image" src="img/logo150.png" style="width: 100px; height: 100px;"> -->
		</div>
     		<div class="form-group ">
				<form name="f1" action="login.proc.php" method="get">
					<input type="text" name="mail" class="form-control" placeholder="Correo"maxlength="50">
			</div>
				    <div class="form-group">
				       <input type="password" name="pass" class="form-control" placeholder="Contraseña">
				       <i class="fa fa-lock"></i>
				    </div>
					<span class="alert">Invalid Credentials</span>
    				<button type="submit" class="log-btn" name="acce">Entrar</button>
				</form>
				<fb:login-button scope="public_profile,email,user_hometown,user_birthday" onlogin="checkLoginState();">
				</fb:login-button>
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
	</body>
</html>