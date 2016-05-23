<?php
session_start();
error_reporting(0);
$user_id = $_SESSION['id'];
$nom_user = $_SESSION['nombre'];
$apellidos = $_SESSION['apellidos'];
$mail = $_SESSION['mail'];
$sexo_id = $_SESSION['sexo'];
include_once 'conexion.proc.php';