<?php

	include("header.php");
	include("conexion.proc.php");

	$sql = "SELECT * FROM filtro WHERE usuario=$_SESSION[id]";
	$query = mysqli_query($con,$sql);

	if(mysqli_num_rows($query) == 0){
		$insert = "INSERT INTO filtro(edad_minima,edad_maxima,sexo,proximidad) VALUES ($_REQUEST[eMin],$_REQUEST[eMax],$_REQUEST[sexo],$_REQUEST[proximidad])";
		$queryInsert = mysqli_query($con,$insert);
	}else{
		$update = "UPDATE filtro SET edad_minima=$_REQUEST[eMin],edad_maxima=$_REQUEST[eMax],sexo=$_REQUEST[sexo],proximidad=$_REQUEST[proximidad] WHERE usuario=$_SESSION[id]";
		$queryUpdate = mysqli_query($con,$update);
	}

	header("location: principal.php");

?>