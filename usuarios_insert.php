<?php
	include_once 'conexion.proc.php';
	session_start();
	error_reporting(0);
?>

	<script src="miruta/mysqlwslib.js"></script>
		<div class="mod-form">
     		<div class="form-group ">
				<form name="f1" action="usuarios_insert.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
					<div class="col-md-4 col-sm-4" >
						Nombre<br>
						<i class="fa fa-user"></i><input type="text" name="nombre" class="form-control" placeholder="Nombre" required><br>
						Apellidos<br>
						<i class="fa fa-user"></i><input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required><br>
						Nombre de usuario<br>
						<i class="fa fa-user"></i><input type="text" name="username" class="form-control" placeholder="Nombre de usuario" onblur="validausername()" required><br>
						Correo<br>
						<i class="fa fa-at"></i><input type="text" name="correo" class="form-control" placeholder="Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" onblur="validamail()" required title="Formato en minúsculas. Ejemplo: info@gmail.com"><br>
					</div>
					<div class="col-md-4 col-sm-4" >
						Contraseña<br>
						<i class="fa fa-lock"></i><input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" maxlength="50" required><br>
						Repite contraseña<br>
						<i class="fa fa-lock"></i><input type="password" id="repassword" name="repassword" class="form-control" placeholder="Repetir contraseña"  maxlength="50" onblur="validapass()" required><br>
						Fecha de nacimiento<br>
						<i class="fa fa-calendar"></i><input type="date" name="fecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento" required><br>
						Sexo<br>
					<input id="radio" type="radio" name="sexo" value='1' >Hombre	
					<input id="radio" type="radio" name="sexo" value='2' >Mujer</br><br>
					<button type="submit" class="btn btn-primary inverse btn-lg" onClick="validar()" name="acce">Registrar</button>
				</form>
			</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4" >
			<img src="assets/img/p03.png" class="img-responsive scrollpoint sp-effect5" alt="">
	</div>

