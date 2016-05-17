<head>
    <meta charset="utf-8"/>
    <title>Just Meet</title>
    <!-- <link rel="icon" type="image/png" href="img/logo.png" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/estilo_login.css"/> -->
    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/loginFacebook.js"></script>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.6&appId=1046447695449384";
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
  </head>
<?php
error_reporting(0);
include('db.php');
if(isset($_POST['action']))
{          
	if($_POST['action']=="password")
    {
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
        }
        else
        {
            $query = "SELECT * FROM usuario where mail='".$email."'";
            $result = mysqli_query($connection,$query);
            $Results = mysqli_fetch_array($result);
            
            if(count($Results)>=1)
            {
                $encrypt = md5(90*13+$Results['id']);
                $message = "Revisa tu correo para resetear la contraseña";
                $to=$email;
                $subject="Contraseña olvidada";
                $from = 'justmeet.contacto@gmail.com';
                $body='Hola, Click para reiniciar la contraseña: http://prueba-tema.esy.es/login_reset/reset.php?encrypt='.$encrypt.'&action=reset';
                $headers = "From: " . strip_tags($from) . "\r\n";
                $headers .= "Responder a: ". strip_tags($from) . "\r\n";
                
                mail($to,$subject,$body,$headers);

            }
            else
            {
                $message = "Correo no encontrado";
            }
        }
    }
}


$content ='<script type="text/javascript" src="jquery-1.8.0.min.js"></script> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">
function forgetpassword() {
  $("#login").hide();
  $("#passwd").show();
}
</script>
<style type="text/css">

.ui-tabs.ui-widget.ui-widget-content.ui-corner-all {
  background: rgba(0, 0, 0, 0) linear-gradient(-25deg, #e99d94 0%, #e8e8e8 74%) repeat scroll 0 0;
}
.ui-widget-header {
  color: #222222;
  font-weight: bold;
}
.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
  background: transparent none repeat scroll 0 0;
  border: medium none;
  color: #212121;
  font-weight: normal;
}
.fb_iframe_widget {
  display: inline-block;
  position: relative;
  margin-left: 3%;
}
</style>  
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>

</head>
<body>
 <b>'.$message.'</b>
 <div class="login-form">
<div id="tabs">                 
  <div id="tabs-1">
<form name="f1" action="login.proc.php" method="get">
        <input type="text" name="mail" class="form-control" placeholder="Correo"maxlength="50">
            <input type="password" name="pass" class="form-control" placeholder="Contraseña">
            <button type="submit" class="btn btn-primary inverse btn-lg" name="acce">Entrar</button>
      </form><br>
    <fb:login-button scope="public_profile,email,user_hometown,user_birthday" onlogin="checkLoginState();">
    </fb:login-button>
            <div class="alerts">
            <i class="fa fa-lock"></i>
          <span class="alert">Datos incorrectos</span>
           <a href="#forget" onclick="forgetpassword();" id="forget">Forget Password?</a>
           
          </div>
  <form action="" method="post" id="passwd" style="display:none;">
    <input id="email" name="email" type="text" class="form-control" placeholder="Email to get Password">
    <input name="action" type="hidden" value="password" class="form-control"/>
    <input type="submit" value="Reset Password" class="btn btn-primary inverse btn-lg"/>
  </form>
  </div>
  
  </form>
  </div>
  </div>
</div>';


$pre = 1;
include("html.inc");            
?>
    <?php
    echo "<div class='log-error'>";
      if(isset($error)){
        echo "ERROR: " . $error;
        echo "<br/><br/>";
      }
    echo "</div>";
    ?>  