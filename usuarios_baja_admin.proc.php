<?php
	session_start();
	error_reporting(0);
	include_once 'conexion.proc.php';	

	// $nomUsuari = $_SESSION['nombre'];
	// $user_id = $_SESSION['id'];
	$usuario_id = $_REQUEST['id'];

	
	$sql_update="DELETE FROM usuario where id = $usuario_id";

	echo($sql_update);
		mysqli_query($con,$sql_update)
		  or die("Problemas en el delete".mysqli_error($con));

		mysqli_close($con);


	header("Location: usuarios_admin.php");
?>