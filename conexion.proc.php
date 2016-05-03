<?php
	error_reporting(0);
	$con = mysqli_connect("mysql.hostinger.es", "u866801101_admin", "admin123", "u866801101_jm");

	//si no se puede realizar la conexión, mostramos error
	if (!$con) {
		echo "Error: No se puede conectar a la BD." . PHP_EOL;
		exit;
	}
?>
