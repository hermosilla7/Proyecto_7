<?php

	session_start();
	error_reporting(0);
	$user_id = $_SESSION['id'];
	$nom_user = $_SESSION['nombre'];
	$apellidos = $_SESSION['apellidos'];
	$telf = $_SESSION['telefono'];
	$mail = $_SESSION['mail'];

	include("conexion.proc.php");

	$sql = "SELECT * FROM mensaje WHERE usuario1=$_SESSION[id] OR usuario2=$_SESSION[id]";
	$query = mysqli_query($con,$sql);

	$arrayChats = array();

	while($chats = mysqli_fetch_array($query)){

		if($chats["usuario1"] == $_SESSION["id"]){
			$user = $chats["usuario2"];
		}else{
			$user = $chats["usuario1"];
		}


		$sql2 = "SELECT * FROM usuario WHERE id=$user";
		$query2 = mysqli_query($con,$sql2);
		$usuario = mysqli_fetch_array($query2);

		$id = $usuario["id"];
		$nombre = $usuario["nombre"];
		$apellidos = $usuario["apellidos"];

		$comprobar = false;
		foreach ($arrayChats as $key) {
			if($key["id"] == $id){
				$comprobar = true;
			}
		}
		if($comprobar == false){
			$arrayChats[] = array('id'=> $id, 'nombre'=> $nombre, 'apellidos'=> $apellidos);
		}
	}

	$json_string = json_encode($arrayChats);
    echo $json_string;

?>