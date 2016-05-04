<?php
	include_once 'conexion.proc.php';
	include_once 'header.php';
	session_start();
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
	<body>
	<script src="miruta/mysqlwslib.js"></script>
		<div class="mod-form">
		<br></br></br>
     		<div class="form-group ">
				<form name="f1" action="usuarios_insert.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
					<div class="form-group">
						<i class="fa fa-user"></i><input type="text" name="nombre" class="form-control" placeholder="Nombre" required><br>
					</div>
					<div class="form-group">
						<i class="fa fa-user"></i><input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required><br>
					</div>
					<div class="form-group">
						<i class="fa fa-user"></i><input type="text" name="username" class="form-control" placeholder="Nombre de usuario" onblur="validausername()" required><br>
					</div>
					<div class="form-group">
					<i class="fa fa-lock"></i><input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" maxlength="50" required><br>
					</div>
					<div class="form-group">
					<i class="fa fa-lock"></i><input type="password" id="repassword" name="repassword" class="form-control" placeholder="Repetir contraseña"  maxlength="50" onblur="validapass()" required><br>
					</div>
					<div class="form-group">
						<i class="fa fa-at"></i><input type="text" name="correo" class="form-control" placeholder="Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" onblur="validamail()" required title="Formato en minúsculas. Ejemplo: info@gmail.com"><br>
					</div>	
					<div class="form-group">
						<i class="fa fa-calendar"></i><input type="date" name="fecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento" required><br>
					</div>	
					<input id="radio" type="radio" name="sexo" value='1' >Hombre	
					<input id="radio" type="radio" name="sexo" value='2' >Mujer</br><br>
					<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
				</form
			</div>
		</div>
	</body>
</html>