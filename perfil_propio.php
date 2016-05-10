<?php
	include "header.php";

    echo "TU PERFIL:";

	$sql = "SELECT usuario.username AS 'nombre_usuario', usuario.fecha_nacimiento AS 'fecha_nacimiento', perfil.descripcion AS 'descripcion', perfil.altura AS 'altura', complexion.nombre AS 'complexion', ojos.color AS 'color_ojos', pelo_color.color AS 'color_pelo', pelo_tipo.tipo AS 'tipo_pelo', sexo.nombre AS 'sexo'
	FROM usuario, perfil, complexion, pelo_color, pelo_tipo, ojos, sexo
	WHERE usuario.id = 1
	AND usuario.perfil_id = perfil.id
	AND perfil.complexion_id = complexion.id
	AND perfil.ojos_id = ojos.id
	AND perfil.pelo_color_id = pelo_color.id
	AND perfil.pelo_tipo_id = pelo_tipo.id
	AND perfil.sexo_id = sexo.id";

	$resultado = mysqli_query($con,$sql);
	if(mysqli_num_rows($resultado)==1){
		$datos_usuario=mysqli_fetch_array($resultado);
		echo($datos_usuario[nombre_usuario]);
		echo($datos_usuario[fecha_nacimiento]);
		echo($datos_usuario[descripcion]);
		echo($datos_usuario[altura]);
		echo($datos_usuario[complexion]);
		echo($datos_usuario[color_ojos]);
		echo($datos_usuario[color_pelo]);
		echo($datos_usuario[tipo_pelo]);
		echo($datos_usuario[sexo]);
	}

    include "footer.php";
?>