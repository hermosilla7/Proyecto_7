<?php

    session_start();
    error_reporting(0);
    $user_id = $_SESSION['id'];
    $nom_user = $_SESSION['nombre'];
    $apellidos = $_SESSION['apellidos'];
    $telf = $_SESSION['telefono'];
    $mail = $_SESSION['mail'];

    include("conexion.proc.php");

    $sql = "SELECT * FROM mensaje WHERE (usuario1=$_SESSION[id] AND usuario2=$_REQUEST[otroUser]) OR (usuario1=$_REQUEST[otroUser] AND usuario2=$_SESSION[id])";

    $datos=mysqli_query($con,$sql);
    $mensajes = array();
    if(mysqli_num_rows($datos)>0){
        while($lista=mysqli_fetch_array($datos)){
            $id = $lista['id'];
            $mensa = $lista['mensaje'];
            $fnacimiento = $lista['fecha'];
            $mensajes[] = array('id'=> $id, 'mensaje'=> $mensa, 'fecha'=> $fnacimiento);
        }
    }

    $json_string = json_encode($mensajes);
    echo $json_string;

?>