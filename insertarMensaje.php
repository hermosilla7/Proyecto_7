<?php
session_start();
	error_reporting(0);
	$user_id = $_SESSION['id'];
	$nom_user = $_SESSION['nombre'];
	$apellidos = $_SESSION['apellidos'];
	$telf = $_SESSION['telefono'];
	$mail = $_SESSION['mail'];

	include("conexion.proc.php");

	$insert="INSERT INTO mensaje(mensaje,usuario1,usuario2,fecha) VALUES ('$_REQUEST[mensaje]',$user_id,$_REQUEST[otroUser],now())";
	echo $insert;
	$datosInsert=mysqli_query($con,$insert);

?>