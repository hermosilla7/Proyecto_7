        <script type="text/javascript" src="js/busqueda.js"></script>
        <?php
        	include_once 'conexion.proc.php';
        ?>
        <!-- Page Content -->
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
                        <!-- Jumbotron Header -->
                        <div class="jumbotron hero-spacer">
                            <h1>Filtro</h1>
                            <?php
                            include("conexion.proc.php");

                            $sql = "SELECT * FROM filtro WHERE usuario=$_SESSION[id]";
                            $filtro = mysqli_query($con,$sql);

                            if(mysqli_num_rows($filtro)>0){
                                $datos = mysqli_fetch_array($filtro);
                                $edadMin = $datos["edad_minima"];
                                $edadMax = $datos["edad_maxima"];
                                $sexo = $datos["sexo"];
                                $proximidad = $datos["proximidad"];
                                ?>

                                <div>
                                    <form action="busqueda2.php" method="POST">
                                        <fieldset>
                                            <legend>Filtro</legend>
                                            <legend>Edad:</legend>
                                            <span>18</span><input type="range" min="18" max="65" value="<?php echo $edadMin; ?>" onchange="cambiarValorEdadMin(this.value); validarEdadMin(this.value);" id="eMin" name="eMin"><span>65</span>
                                            <br /><div id="edadMin"><?php echo $edadMin; ?></div><br />
                                            <span>18</span><input type="range" min="18" max="65" value="<?php echo $edadMax; ?>" onchange="cambiarValorEdadMax(this.value); validarEdadMax(this.value);" id="eMax" name="eMax"><span>65</span>
                                            <br /><div id="edadMax"><?php echo $edadMax; ?></div><br />
                                            <legend>Proximidad:</legend>
                                            <span>1km</span><input type="range" min="1" max="500" value="<?php echo $proximidad; ?>" onchange="cambiarValorProx(this.value);" id="proximidad" name="proximidad"><span>500km</span>
                                            <br /><div id="prox"><?php echo $proximidad; ?>km</div><br />
                                            <legend>Sexo:</legend>
                                            <?php
                                            if($sexo == 1){
                                            ?>
                                            <span>Hombre</span><input type="radio" value="Hombre" id="sexo" name="sexo" checked>
                                            <span>Mujer</span><input type="radio" value="Mujer" id="sexo" name="sexo">
                                            <?php
                                            }else{
                                            ?>
                                            <span>Hombre</span><input type="radio" value="1" id="sexo" name="sexo">
                                            <span>Mujer</span><input type="radio" value="2" id="sexo" name="sexo" checked>
                                            <?php
                                            }
                                            ?>
                                            <br/><br/>
                                            <input type="submit" id="enviar">
                                        </fieldset>
                                    </form>
                                </div>
                                <?php
                                }else{
                                ?>
                                <div class="row">
                                <div class="col-lg-6">
                                    <form action="" method="POST">
                                        <div class="col-lg-6">
                                            <legend>Edad minima</legend>
                                            <span class="min">18</span><span class="max">65</span><input type="range" min="18" max="65" value="39" onchange="cambiarValorEdadMin(this.value); validarEdadMin(this.value);" id="eMin">
                                            <br /><div class="edadMin" id="edadMin">39</div><br />
                                        </div>
                                        <div class="col-lg-6">
                                            <legend>Edad maxima</legend>
                                            <span class="min">18</span><span class="max">65</span><input type="range" min="18" max="65" value="40" onchange="cambiarValorEdadMax(this.value); validarEdadMax(this.value);" id="eMax">
                                            <br /><div class="edadMin"id="edadMax">40</div><br />
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <legend>Proximidad:</legend>
                                            <span class="min">1km</span><span class="max">500km</span><input type="range" min="1" max="500" onchange="cambiarValorProx(this.value);">
                                            <br /><div class="edadMin" id="prox">250km</div><br />
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-12">
                                            <legend>Sexo:</legend>
                                            <span>Hombre</span><input type="radio" value="Hombre" name="Hombre" selected>
                                            <span>Mujer</span><input type="radio" value="Mujer" name="Mujer">
                                            <br/><br/>
                                            <input type="submit">
                                        
                                    </form>
                                
                            </div>
                                <?php
                                }
                                ?>
                            </div>
                            <hr>

                            <!-- Title -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Usuarios</h3>
                                </div>
                            </div>
                            <!-- /.row -->

                            <!-- Page Features -->
                            <div class="row text-center">

                                <?php
                                $sqlFiltro = "SELECT * FROM filtro WHERE usuario=$_SESSION[id]";
                                $queryFiltro = mysqli_query($con,$sqlFiltro);
                                if(mysqli_num_rows($queryFiltro)==1){
                                    $datosFiltro = mysqli_fetch_array($queryFiltro);
                                    $edadMinima = $datosFiltro["edad_minima"];
                                    $edadMaxima = $datosFiltro["edad_maxima"];
                                    $sexoF = $datosFiltro["sexo"];
                                    $proximidadF = $datosFiltro["proximidad"];

                                    $sqlPerfil = "SELECT * FROM perfil WHERE usuario!=$_SESSION[id] AND sexo_id=$sexoF AND TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE())>$edadMinima AND TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE())<$edadMaxima";
                                    $queryPerfil = mysqli_query($con,$sqlPerfil);
                                    if(mysqli_num_rows($queryPerfil)>0){
                                        while($datosPerfil = mysqli_fetch_array($queryPerfil)){
                                            $sqlUser = "SELECT * FROM usuario WHERE id=$datosPerfil[usuario]";
                                            $queryUser = mysqli_query($con,$sqlUser);
                                            $user = mysqli_fetch_array($queryUser);
                                            $sqlEdad = "SELECT TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE()) AS 'edad' FROM perfil WHERE usuario=$datosPerfil[usuario]";
                                            $queryEdad = mysqli_query($con,$sqlEdad);
                                            $datosEdad = mysqli_fetch_array($queryEdad);
                                ?>
                                <div class="col-md-3 col-sm-6 hero-feature">
                                    <div class="thumbnail">
                                        <img src="http://placehold.it/800x500" alt="">
                                        <div class="caption">
                                            <h3><?php echo utf8_encode($user["username"] . ', ');
                                            echo($datosEdad["edad"]);?></h3>
                                            <p>
                                                <a href="perfil_usuario.php?id=<?php echo $datosPerfil[usuario]; ?>" class="btn btn-primary">Ver Perfil</a></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        }
                                    }
                                }
                                ?>

                            </div>
                        </div>
                        <!-- /#page-content-wrapper -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /#wrapper -->

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