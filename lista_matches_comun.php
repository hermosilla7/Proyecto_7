<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

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
            
 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Matches</h1>
            </div>
        </div>
        <div class="menumatch">
        <a href="lista_matches_comun.php"><div class="secc" id="active">
        Matches</div></a>
        <a href="lista_matches_le_gusto.php"><div class="secc">
        Le gustas</div></a>
        <a href="lista_matches_me_gusta.php"><div class="secc">
        Te gustan</div></a>
        </div>
        <hr>
        <!-- /.row -->
        <?php
    $sql = "SELECT usuario.username as 'username',
    juego.usuario_otro as 'otro',
    usuario.id as 'id_usuario' 
    FROM usuario, juego  
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
    ?> 
        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                <?php
                $sql_perfil = "SELECT * FROM foto, perfil 
                WHERE foto.usuario = $usuario_mostrar[id_usuario]
                AND foto.tipo = 1
                AND perfil.usuario = $usuario_mostrar[id_usuario]";
                $resultado_perfil = mysqli_query($con, $sql_perfil);
                $foto_mostrar = mysqli_fetch_assoc($resultado_perfil);

                                
            ?>
                    <img class="img-responsive" src="<?php echo($foto_mostrar['nombre'])?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
        <h3><?php echo($usuario_mostrar['username']);?></h3>
        <?php echo "<br>";?>
        <p><?php echo utf8_encode($foto_mostrar['descripcion']);?></p>
                <a href="perfil_usuario.php?id=<?php echo $usuario_mostrar[id_usuario]; ?>" class="btn btn-primary">Ver Perfil</a></a>
                 </div>
        </div>
        <hr>
        <?php
    }
?>   
        <!-- /.row -->
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