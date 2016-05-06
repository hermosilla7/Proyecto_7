<?php
	include "header.php";

    echo "TU PERFIL:";

	$sql = "SELECT * FROM usuario WHERE id = $user_id";
	$resultado = mysqli_query($con,$sql);
	if(mysqli_num_rows($resultado)==1){
	$datos_usuario=mysqli_fetch_array($resultado);
	echo($datos_usuario['nombre']);
	echo($datos_usuario['apellidos']);
    echo($datos_usuario['username']);
    echo($datos_usuario['fecha_nacimiento']);
	}



    include "footer.php";
?>