<?php
$to      = 'justmeet.contacto@gmail.com';
$subject = 'Contacto';
$message = $_REQUEST['contenido'];
$headers = 'Responder a: ' . $_REQUEST['correo'] . "\r\n" .
    'Teléfono: ' . $_REQUEST['telefono'];

mail($to, $subject, $message, $headers);
?> 