<?php

// ------------------------ Enviar correo para ponerse en contacto -------------------- //

    $email="justmeet.contacto@gmail.com";

    $mailorigen="justmeet.contacto@gmail.com";
    $passwordorigen="adminjm1234";

    $copy="justmeet.contacto@gmail.com";
    $copyCentre="justmeet.contacto@gmail.com";

    $subject=generarTitolEmail();
    $text= generarCosEmail();

    include "mail/email.func.php";

    $okMail = enviaMail($mailorigen, $passwordorigen, $email, $subject, $text, $copy, $copyCentre);

    function generarCosEmail(){
        $msg = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
        $msg .= "<p>Mensaje recibido:</p></br></br>";
        $msg .= "<ul><li><b>Nombre y Apellidos:</b></li>";
        $msg .= "<li><b>Correo electr&oacute;nico:</b></li>";
        $msg .= "<li><b>Tel&eacute;fono: </b></li></ul>";
        $msg .= "<p>Just Meet - Localiza nuevos contactos</p></br></br>";
        
        //ChromePhp::log($msg);
        return $msg;
    }

    function generarTitolEmail(){
        $titol = utf8_decode('Just Meet - Un usuario se ha puesto en contacto');
        return $titol;
    }

    // --------------------------------------------------------------------------------------------//

?>