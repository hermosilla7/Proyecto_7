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

    $sexo_id = $_SESSION['sexo'];   

    $sql_count = "SELECT COUNT(*) FROM juego j WHERE j.usuario_propio = $user_id AND DATE(j.fecha) = DATE(NOW()) ";
    $resultado = mysqli_query($con,$sql_count);
    $vistos_maximo = 10;
    $vistos_hoy =mysqli_fetch_row($resultado)[0];  
    if ($vistos_hoy >= $vistos_maximo) {
        echo("Has superado el límite diario, vuelve mañana para seguir jugando :)");
        throw new \Exception("Exception");
    }

    $sql = "SELECT u.id AS 'id_mostrar', u.username AS 'username', 
    p.descripcion AS 'descripcion',
    TIMESTAMPDIFF(YEAR,p.fecha_nacimiento,CURDATE()) AS 'edad'
    FROM usuario u
    INNER JOIN perfil p ON p.usuario = u.id
    WHERE p.sexo_id != $sexo_id
    AND NOT EXISTS(SELECT * FROM juego j WHERE j.usuario_propio = $user_id AND j.usuario_otro = u.id)
    ORDER BY RAND()
    LIMIT 1";

    // echo($sql);
    $resultado = mysqli_query($con,$sql);
    $usuario_mostrar =mysqli_fetch_assoc($resultado);


    if(isset($_POST['button_si'])){
        $sql_insert_si = "INSERT INTO juego (usuario_propio, usuario_otro, tipo) VALUES ($user_id, $usuario_mostrar[id_mostrar], 1)";
        mysqli_query($con,$sql_insert_si);
        if ($vistos_hoy+1 >= $vistos_maximo) {
        echo("Has superado el límite diario, vuelve mañana para seguir jugando :)");
        throw new \Exception("Exception");
    }
    }
    if(isset($_POST['button_no'])){
        $sql_insert_no = "INSERT INTO juego (usuario_propio, usuario_otro, tipo) VALUES ($user_id, $usuario_mostrar[id_mostrar], 2)";
        mysqli_query($con,$sql_insert_no);
        if ($vistos_hoy+1 >= $vistos_maximo) {
        echo("Has superado el límite diario, vuelve mañana para seguir jugando :)");
        throw new \Exception("Exception");
    }
    }
?>
<?php
    include_once 'sliderm.php';
?>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
$("body").keydown(function(e) {
  if(e.which == 37) { // left     
      $("#btn_si").trigger("click");
  }
  else if(e.which == 39) { // right     
      $("#btn_no").trigger("click");
  }
});
</script>
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