<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery picEyes Plugin Demo</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<style>
.demo { margin: 30px auto; max-width:960px;}
.demo > li {float:left;}
.demo > li img { width:220px; margin:10px; cursor:pointer;}
</style>
</head>
<body>
<div id="wrapper">
<?php
    include "header.php";

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
            <?php

    $sql = "SELECT usuario.username AS 'nombre_usuario', perfil.fecha_nacimiento AS 'fecha_nacimiento', perfil.descripcion AS 'descripcion', perfil.altura AS 'altura', complexion.nombre AS 'complexion', ojos.color AS 'color_ojos', pelo_color.color AS 'color_pelo', pelo_tipo.tipo AS 'tipo_pelo', sexo.nombre AS 'sexo'
    FROM usuario, perfil, complexion, pelo_color, pelo_tipo, ojos, sexo
    WHERE usuario.id = $_SESSION[id]
    AND perfil.usuario = usuario.id
    AND perfil.complexion_id = complexion.id
    AND perfil.ojos_id = ojos.id
    AND perfil.pelo_color_id = pelo_color.id
    AND perfil.pelo_tipo_id = pelo_tipo.id
    AND perfil.sexo_id = sexo.id";

    $resultado = mysqli_query($con,$sql);
    if(mysqli_num_rows($resultado)==1){
        $datos_usuario=mysqli_fetch_array($resultado);

    }
            ?>
            
        </div>
        </div>   
        <div class="jumbotron hero-spacer">
        </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="desc">
            <div class="perfimg">
            <h1><?php echo($datos_usuario['nombre_usuario']);?></h1>
                <img src="img/6.jpg"/>
            <?php echo($datos_usuario['fecha_nacimiento']);?>
            </div>
            </div>
            </div>
        <div class="col-lg-3">
            <div class="desc">
            <h1>Apariencia</h1>
            <h3>Altura</h3>
            <?php echo($datos_usuario[altura]);  ?>cm.
            <br>
            <h3>Complexión</h3>
            <?php echo($datos_usuario[complexion]);?>
            <br>
            <h3>Color de ojos</h3>
            <?php echo($datos_usuario[color_ojos]);?>
            <br>
            <h3>Pelo</h3>
            <?php echo($datos_usuario[color_pelo]);?>, 
            <?php echo($datos_usuario[tipo_pelo]);?>
            </div>
            </div>
        <div class="col-lg-6">
            <div class="desc">
            <h1>Descripción</h1>
            <p><?php echo($datos_usuario['descripcion']);?></p>
            </div>
        </div>
        </div>
            <div class="row">
            <div class="col-lg-12">
            <h1 style="margin-top:30px; text-align:center; font-size:32px;">Galeria de Imagenes</h1>

            <ul class="clearfix demo">
                <li class="gal"><img src="https://unsplash.it/600/400?image=984"/></li>
                <?php
                $sql_galeria = "SELECT * FROM foto WHERE usuario = $user_id";
                $resultado = mysqli_query($con, $sql_galeria);
                while ($imagen = mysqli_fetch_assoc($resultado)) {
                    ?>
                    <li class="gal"><img src="<?php echo($imagen['nombre'])?>"></li>
                    <?php
                }
                ?>
            </ul>
            <?php
            include "simple.php";
            ?>
            <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
            <script src="jquery.picEyes.js"></script>
            <script>
            $(function(){

                //picturesEyes($('li'));
                $('.gal').picEyes();

            });
            </script>
            <script type="text/javascript">

              var _gaq = _gaq || [];
              _gaq.push(['_setAccount', 'UA-36251023-1']);
              _gaq.push(['_setDomainName', 'jqueryscript.net']);
              _gaq.push(['_trackPageview']);

              (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
              })();

            </div>
        </div><!-- /.row -->
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