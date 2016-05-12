<!DOCTYPE html>
<html>
	<head>
		<title>Just Meet: Chat</title>
		<link rel="stylesheet" type="text/css" href="css/estiloChat.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/cargarChats.js"></script>
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
            <h1>Chat</h1>
            <div class="desc">
            <div class="row">
            <div class="col-lg-3">
            <div id="menuchat">
            <p class="welcome">Welcome, <b></b></p>
            <div style="clear:both"></div>
            </div>
            </div>
             <div class="col-lg-9">  
        <div id="cajaChats">
            <div id="chats"></div>
                <div id="chatbox"></div>
                <form name="message">
                    <input name="usermsg" type="text" id="usermsg" size="63" />
                    <input name="submitmsg" id="submitmsg" value="Send" class="btn btn-primary2"/>
                </form>
            </div>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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