<?php
	include "header.php";

    echo "CONTENIDO PRINCIPAL:";
    if ($sexo_id = 1) {
    	echo "HOMBRE";
    }
    else{
    	echo "MUJER";
    }
    echo $sexo_id;

    if(isset($_POST['button_si']) || isset($_POST['button_no'])){
	$sql = "SELECT nombre FROM usuario WHERE sexo_id != 1 ORDER BY RAND() LIMIT 1";
	$resultado = mysqli_query($con,$sql);
	if(mysqli_num_rows($resultado)==1){
	$datos_usuario=mysqli_fetch_array($resultado);
	$siguiente = $datos_usuario['nombre'];
	echo($siguiente);
	}
}
?>
	<form action='' method='POST'>
    	<button type="submit" name="button_si">SI</button>
    	<button type="submit" name="button_no">NO</button>
 	</form

<?php



    include "footer.php";
?>