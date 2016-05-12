<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Just Meet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.png">
    
    <!-- Bootstrap 3.3.2 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/cambios.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/js/rs-plugin/css/settings.css">

    <link rel="stylesheet" href="assets/css/styles.css">


    <script type="text/javascript" src="assets/js/modernizr.custom.32033.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <div class="pre-loader">
        <div class="load-con">
            <img src="assets/img/logos/logo.png" class="animated fadeInDown" alt="">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>
   
    <header>
        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/logos/vr2.png" alt="" class="logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                        include "login.php";
                    ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>

        
        <!--RevSlider-->
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="assets/img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption lfl fadeout hidden-xs"
                            data-x="left"
                            data-y="bottom"
                            data-hoffset="30"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="assets/img/freeze/Slides/hand-freeze.png" alt="">
                        </div>

                        <div class="tp-caption lfl fadeout visible-xs"
                            data-x="left"
                            data-y="center"
                            data-hoffset="700"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="assets/img/freeze/iphone-freeze.png" alt="">
                        </div>

                        <div class="tp-caption large_white_bold sft" data-x="550" data-y="center" data-hoffset="0" data-voffset="-80" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                            Just Meet
                        </div>
                        <div class="tp-caption large_white_light sfb" data-x="550" data-y="center" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1500" data-easing="Power4.easeOut">
                            Localiza nuevos contactos.
                        </div>

                        <div class="tp-caption sfb hidden-xs" data-x="550" data-y="center" data-hoffset="0" data-voffset="85" data-speed="1000" data-start="1700" data-easing="Power4.easeOut">
                            <a href="#features" class="btn btn-primary inverse btn-lg">Saber Mas</a>
                        </div>
                        <div class="tp-caption sfr hidden-xs" data-x="730" data-y="center" data-hoffset="0" data-voffset="85" data-speed="1500" data-start="1900" data-easing="Power4.easeOut">
                            <a href="#about" class="btn btn-primary inverse btn-lg">Registro</a>
                        </div>

                    </li>
                    <!-- SLIDE 2 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        <img src="assets/img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption lfb fadeout hidden-xs"
                            data-x="center"
                            data-y="bottom"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="assets/img/tablet3.png" alt="">
                        </div>
                        
                        
                    </li>
                    
                </ul>
            </div>
        </div>


    </header>


    <div class="wrapper">
        

        <section id="features">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Just Meet</h1>
                    <div class="divider"></div>
                    <p>Un mundo social nuevo por vivir!</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 scrollpoint sp-effect1">
                        <div class="media text-right feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-cogs fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Tu perfil</h3>
                                Dispondras de un perfil propio y editable a tus gustos.
                            </div>
                        </div>
                        <div class="media text-right feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-users fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Tu lista de amigos</h3>
                                Da corazones y crea amplias listas de afinidades.
                            </div>
                        </div>
                        <div class="media text-right feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-comments fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Chatea</h3>
                                Conoce gente interesante mediante nuestro chat.
                            </div>
                        </div>
                        <div class="media text-right feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-calendar fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Eventos?</h3>
                                Interactua con los demas miembros y realiza interesantes quedadas.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4" >
                        <img src="assets/img/freeze/iphone-freeze.png" class="img-responsive scrollpoint sp-effect5" alt="">
                    </div>
                    <div class="col-md-4 col-sm-4 scrollpoint sp-effect2">
                        <div class="media feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-map-marker fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Alguien cerca?</h3>
                                Gracias a Just Meet podras compartir tus ubicaciones con los miembros interesados.
                            </div>
                        </div>
                        
                        <div class="media feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-compass fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Diseño intuitivo</h3>
                                Just Meet incluye un diseño intuitivo para una navegación veloz y fluida.
                            </div>
                        </div>
                        <div class="media feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-picture-o fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Tu galeria de fotos</h3>
                                Just Meet ofrece una galeria para potenciar tu perfil con tus imagenes.
                            </div>
                        </div>
                        <div class="media active feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-plus fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Y mucho más!</h3>
                                Registrate y descubre un nuevo mundo social.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div id="dg">
            <div class="container">
            <div class="row centered">
                <h1>Registro</h1>
                <div class="divider"></div>
                 <p>Registrate, miles de contactos y futuras amistades te esperan en nuestra web, entra y disfruta del nuevo mundo social.</p>
                </div>
                    <?php
                        include "usuarios_insert.php";
                    ?>

            </div><!-- row -->
        </div><!-- container -->
         </div><!-- DG -->
        </section>

        <section id="screens">
            <div class="container">

                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Screens</h1>
                    <div class="divider"></div>
                    <p>See what’s included in the App</p>
                </div>

                <div class="filter scrollpoint sp-effect3">
                    <a href="javascript:void(0)" class="button js-filter-all active">All Screens</a>
                    <a href="javascript:void(0)" class="button js-filter-one">User Access</a>
                    <a href="javascript:void(0)" class="button js-filter-two">Social Network</a>
                    <a href="javascript:void(0)" class="button js-filter-three">Media Players</a>
                </div>
                <div class="slider filtering scrollpoint sp-effect5" >
                    <div class="one">
                        <img src="assets/img/freeze/screens/profile.jpg" alt="">
                        <h4>Profile Page</h4>
                    </div>
                    <div class="two">
                        <img src="assets/img/freeze/screens/menu.jpg" alt="">
                        <h4>Toggel Menu</h4>
                    </div>
                    <div class="three">
                        <img src="assets/img/freeze/screens/weather.jpg" alt="">
                        <h4>Weather Forcast</h4>
                    </div>
                    <div class="one">
                        <img src="assets/img/freeze/screens/signup.jpg" alt="">
                        <h4>Sign Up</h4>
                    </div>
                    <div class="one">
                        <img src="assets/img/freeze/screens/calendar.jpg" alt="">
                        <h4>Event Calendar</h4>
                    </div>
                    <div class="two">
                        <img src="assets/img/freeze/screens/options.jpg" alt="">
                        <h4>Some Options</h4>
                    </div>
                    <div class="three">
                        <img src="assets/img/freeze/screens/sales.jpg" alt="">
                        <h4>Sales Analysis</h4>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <a href="#" class="scrollpoint sp-effect3">
                    <img src="assets/img/vr2.png" alt="" class="logo">
                </a>
                <div class="social">
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
                </div>
                <div class="rights">
                    <p>Copyright &copy; 2014</p>
                    <p>Template by <a href="http://www.scoopthemes.com" target="_blank">ScoopThemes</a></p>
                </div>
            </div>
        </footer>

        

    </div>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/placeholdem.min.js"></script>
    <script src="assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            appMaster.preLoader();
        });
    </script>
</body>

</html>
