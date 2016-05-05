<?php
	session_start();
	if(isset($_SESSION['error'])){
		echo $_SESSION['error'];
	}
?>
<?php

	$fecha_nacimiento1 = substr($_REQUEST["fecha"], 0,2);
	$fecha_nacimiento2 = substr($_REQUEST["fecha"], 3,2);
	$fecha_nacimiento3 = substr($_REQUEST["fecha"], 6);
	$fecha_nacimiento = $fecha_nacimiento2 + $fecha_nacimiento1 + $fecha_nacimiento3;

	include("conexion.php");

	if($_REQUEST["genero"] == "male"){
		$genero = "Hombre";
	}else if($_REQUEST["genero"] == "female"){
		$genero = "Mujer";
	}
	$sqlSexo = "SELECT * FROM sexo WHERE nombre=$genero";
	$querySexo = mysqli_query($con,$sqlSexo);
	$datosSexo = mysqli_fetch_array($querySexo);
	$idSexo = $datosSexo["id"];

	$sql="SELECT * FROM usuario WHERE username='$_REQUEST[id]'";
	$datos=mysqli_query($con,$sql);
	if (mysqli_num_rows($datos)==0){
		
		$insert="INSERT INTO usuario(nombre,apellidos,username,mail,fecha,sexo_id) VALUES ('$_REQUEST[fname]','$_REQUEST[lname]','$_REQUEST[id]','$_REQUEST[mail]','$fecha_nacimiento',$idSexo)";
		$datosInsert=mysqli_query($con,$insert);
		
	}

	$sql="SELECT * FROM usuario WHERE username='$_REQUEST[id]'";
	$datos=mysqli_query($con,$sql);
	if (mysqli_num_rows($datos)==1){
		while($usu=mysqli_fetch_array($datos)){
			$_SESSION['mail']=$usu['mail'];
			$_SESSION['nombre']=$usu['nombre'];
			$_SESSION['apellidos']=$usu['apellidos'];
			$_SESSION['username']=$usu['username'];
		}
		
		header("Location: principal.php");
	}

?>