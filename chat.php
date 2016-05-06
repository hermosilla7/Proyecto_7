<!DOCTYPE html>
<html>
	<head>
		<title>Just Meet: Chat</title>
		<link rel="stylesheet" type="text/css" href="css/estiloChat.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/cargarChats.js"></script>
    </head>
    <body>
    	<?php
		//include "header.php";
		?><div id="cajaChats">
            <div id="chats"></div>
    		<div id="wrapper">
                <div id="menu">
                    <p class="welcome">Welcome, <b></b></p>
                    <div style="clear:both"></div>
                </div>     
                <div id="chatbox"></div>
                <form name="message">
                    <input name="usermsg" type="text" id="usermsg" size="63" />
                    <input name="submitmsg" id="submitmsg" value="Send" />
                </form>
            </div>
        </div>
        <?php
	    //include "footer.php";
		?>
    </body>
</html>