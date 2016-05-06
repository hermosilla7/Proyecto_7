<?php
$to      = 'justmeet.contacto@gmail.com';
$subject = 'Contacto';
$message = 'Mensaje del usuario X:';
$headers = 'From: mail_usuario@example.com' . "\r\n" .
    'Reply-To: mail_usuario@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 