
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
    // if ($sexo_id = 1) {
    //     echo "HOMBRE";
    // }
    // else{
    //     echo "MUJER";
    // }
    echo $sexo_id;

    //if(isset($_POST['button_si']) || isset($_POST['button_no'])){

    $sql = "SELECT usuario.username AS 'username', 
    perfil.descripcion AS 'descripcion',
    TIMESTAMPDIFF(YEAR,perfil.fecha_nacimiento,CURDATE()) AS 'edad'
    FROM usuario, perfil
    WHERE perfil.usuario = usuario.id 
    AND perfil.sexo_id != $sexo_id
    ORDER BY RAND() 
    LIMIT 5";

    echo("$sql");

    $resultado = mysqli_query($con,$sql);
    // $resultado_aux = $resultado;
    // $datos_usuario=mysqli_fetch_array($resultado);
    $array_usuarios = array();
    $i = 0;
    while ($registro =mysqli_fetch_array($resultado)) {
        $array_usuarios[$i]['username'] = $registro['username'];
        $array_usuarios[$i]['edad'] = $registro['edad'];
        $array_usuarios[$i]['descripcion'] = $registro['descripcion'];
        $i++;
    };

    echo "POSICION:";
    echo "<br>";
    echo($array_usuarios[0]['username']);
    echo($array_usuarios[0]['descripcion']);
    echo "<br>";
    echo($array_usuarios[1]['username']);
    echo "<br>";
    echo($array_usuarios[2]['username']);
    echo "<br>";
    echo($array_usuarios[3]['username']);
    echo "<br>";
    echo($array_usuarios[4]['username']);
?>

    <section class="cd-single-item">
        <div class="cd-slider-wrapper">
            <ul class="cd-slider">
                <li class="selected"><img src="img/img-1.jpg" alt="Product Image 1"></li>
                <li><img src="img/img-2.jpg" alt="Product Image 1"></li>
                <li><img src="img/img-3.jpg" alt="Product Image 2"></li>
            </ul> <!-- cd-slider -->

            <ul class="cd-slider-navigation">
                <li><a href="#0" class="cd-prev inactive">Next</a></li>
                <li><a href="#0" class="cd-next">Prev</a></li>
            </ul> <!-- cd-slider-navigation -->

            <a href="#0" class="cd-close">Close</a>
        </div> <!-- cd-slider-wrapper -->

        <div class="cd-item-info">
            <!-- <h2><?php echo utf8_encode(($datos_usuario['username']) . ', ' . ($datos_usuario['edad']));?></h2>

            <p><?php echo utf8_encode($datos_usuario['descripcion']);?></p> -->
                     
        </div> <!-- cd-item-info -->
    </section> <!-- cd-single-item -->

    <section class="cd-content">
        <form action='' method='POST'>
        <button type="submit" name="button_si"><img src="img/comprobar.png" alt=""></button>
        <button type="submit" name="button_no"><img src="img/cerrar.png" alt=""></button>
    </form>
    </section>
            <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="img/2.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
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