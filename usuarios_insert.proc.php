<?php
	include_once 'conexion.proc.php';
	error_reporting(0);
?>
<html>
	<body>
		<?php
			$sql = "INSERT INTO usuario (nombre, apellidos, username, password, mail, fecha_nacimiento, sexo_id) VALUES ('$_REQUEST[nombre]', '$_REQUEST[apellidos]', '$_REQUEST[username]', md5('$_REQUEST[password]'), '$_REQUEST[correo]', '$_REQUEST[fecha_nacimiento]', '$_REQUEST[sexo]')";
			$sql=utf8_decode($sql);
			//lanzamos la sentencia sql
			mysqli_query($con, $sql);

			$message = 'Te has dado de alta satisfactoriamente';
			echo "<SCRIPT type='text/javascript'> //not showing me this
		        alert('$message');
		        window.location.replace(\"index.php\");
		    </SCRIPT>";
		?>
	</body>
</html>
