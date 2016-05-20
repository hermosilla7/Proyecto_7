<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    
    <title>Expandable Image Gallery | Codyhouse</title>
</head>
    <div id="wrapper">
<?php
    include_once 'header.php';
?>
<div id="page-content-wrapper">
            <div class="menu">
                <a href="#menu-toggle" id="menu-toggle"><img src="img/menu.png" alt=""></a>
            </div>
        <div class="container-fluid">
                <!-- Portfolio Item Heading -->
        <div class="container">
            <?php

    $sql = "SELECT usuario.username as 'username',
    juego.usuario_otro as 'otro' FROM usuario, juego  
    LEFT JOIN (SELECT usuario_propio AS 'propio', usuario_otro FROM juego 
    WHERE juego.usuario_propio != $user_id
    AND juego.usuario_otro = $user_id
    AND juego.tipo = 1) AS qryReverso 
    ON juego.usuario_propio = qryReverso.usuario_otro 
    WHERE juego.usuario_propio = $user_id
    AND juego.usuario_otro = propio
    AND juego.tipo = 1
    AND usuario.id = juego.usuario_otro";

    // echo $sql;
    $resultado = mysqli_query($con,$sql);
    while ($usuario_mostrar = mysqli_fetch_assoc($resultado)) {        
        echo($usuario_mostrar['username']);
        echo "<br>";
    }
?>



<!--         <div class="cd-item-info">
            <h2><?php echo utf8_encode(($usuario_mostrar['username']) . ', ' . ($usuario_mostrar['edad']));?></h2>

            <p><?php echo utf8_encode($usuario_mostrar['descripcion']);?></p> -->
                     

    
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
</div>
</div>
</div>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>

</html>