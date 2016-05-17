<?php
	include_once 'conexion.proc.php';
	error_reporting(0);
?>
<html>
	<body>
		<?php
			$sql_usuario = "INSERT INTO usuario (usuario.nombre, usuario.apellidos, usuario.username, usuario.password, usuario.mail) VALUES ('$_REQUEST[nombre]', '$_REQUEST[apellidos]', '$_REQUEST[username]', md5('$_REQUEST[password]'), '$_REQUEST[correo]')";
			$sql_usuario=utf8_decode($sql_usuario);
			mysqli_query($con, $sql_usuario);

			$sql_id_usuario = "SELECT id FROM usuario ORDER BY id DESC LIMIT 1";
			$resultado = mysqli_query($con, $sql_id_usuario);
			$registro =mysqli_fetch_array($resultado);

			$id_usuario_result = $registro['id'];

			$sql_perfil = "INSERT INTO perfil (perfil.usuario, perfil.fecha_nacimiento, perfil.sexo_id) VALUES ('$id_usuario_result', '$_REQUEST[fecha_nacimiento]', '$_REQUEST[sexo]')";
			mysqli_query($con, $sql_perfil);

			$message = 'Te has dado de alta satisfactoriamente';
			echo "<SCRIPT type='text/javascript'> //not showing me this
		        alert('$message');
		        window.location.replace(\"index.php\");
		    </SCRIPT>";
		?>
	</body>
</html>
