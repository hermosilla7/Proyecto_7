<?php
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
input[type=text]
{
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  width:200px;
  min-height: 28px;
  padding: 4px 20px 4px 8px;
  font-size: 12px;
  -moz-transition: all .2s linear;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}
input[type=text]:focus
{
  width: 200px;
  border-color: #51a7e8;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px rgba(81,167,232,0.5);
  outline: none;
}
input[type=password]
{
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  width:200px;
  min-height: 28px;
  padding: 4px 20px 4px 8px;
  font-size: 12px;
  -moz-transition: all .2s linear;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}
input[type=password]:focus
{
  width: 200px;
  border-color: #51a7e8;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1),0 0 5px rgba(81,167,232,0.5);
  outline: none;
}
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
</style>  
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>
 <b>'.$message.'</b>
<div id="tabs" style="width: 280px;">
  <ul>
    <li><a href="#tabs-1">Cambiar la contraseña</a></li>
    
  </ul>                 
  <div id="tabs-1">
  <form action="" method="post" id="login">
    <p><input id="email" name="email" type="text" placeholder="Email"></p>
    <p><input id="password" name="password" type="password" placeholder="Password">
    <input name="action" type="hidden" value="login" /></p>
    <p><input type="submit" value="Login" />&nbsp;&nbsp;<a href="#forget" onclick="forgetpassword();" id="forget">Forget Password?</a></p>
  </form>
  <form action="" method="post" id="passwd" style="display:none;">
    <p><input id="email" name="email" type="text" placeholder="Email to get Password"></p>
    <input name="action" type="hidden" value="password" /></p>
    <p><input type="submit" value="Reset Password" /></p>
  </form>
  </div>
  
  </form>
  </div>
</div>';


$pre = 1;
include("html.inc");            
?>