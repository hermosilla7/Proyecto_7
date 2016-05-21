<?php

include_once 'bootstrap.php';

if (isset($_FILES['file'])) {
	$nombre_archivo = gen_uuid().'.jpg';
	$ruta_archivo = 'img/' . $nombre_archivo;
	if (move_uploaded_file($_FILES['file']['tmp_name'], $ruta_archivo)) {
		$sql = "INSERT INTO foto (nombre, usuario, tipo) VALUES ('$ruta_archivo', $user_id, 2)";
		if (!mysqli_query($con, $sql)) {
			http_response_code(500);
		}
	}
}

function gen_uuid() {
    return sprintf( '%04x%04x%04x%04x%04x%04x%04x%04x',
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
        mt_rand( 0, 0xffff ),
        mt_rand( 0, 0x0fff ) | 0x4000,
        mt_rand( 0, 0x3fff ) | 0x8000,
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}