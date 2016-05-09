<script type="text/javascript">

</script>

<?php
include 'conexion.proc.php';

$codigo=$_POST['vcod'];

$consulta_usuarios="select * from usuario where id='".$codigo."'";
$result_usuarios = mysqli_query($con, $consulta_usuarios);

if(mysqli_num_rows($result_usuarios)==0){
	 echo '<b>No hay dato</b>';

	}else{

	 $usuario=mysqli_fetch_array($result_usuarios);
     ?>
     <tr>
     <?php
                echo "<div id='clients'><b style='margin-top: 15px;'>Nombre de usuario:</b> ";
                echo utf8_encode($usuario['username']);
                echo "<br/>";
                echo "<b>Nombre:</b> ";
                echo utf8_encode($usuario['nombre']);
                echo "<br/>";
                echo "<b>Apellidos:</b> ";
                echo utf8_encode($usuario['apellidos']);
                echo "<br/>";
                echo "<b>Correo:</b> ";
                echo utf8_encode($usuario['mail']);
                echo "<br/>";
                echo "<b>Fecha nacimiento:</b> ";
                echo utf8_encode($usuario['fecha_nacimiento']);
                echo "<br/>";

?>   
                <div class="btns">
                <a href="usuarios_entradas_admin.php?id=<?php echo $usuario['id']; ?>"><i class="fa fa-sign-in fa-2x"></i></a>
                <a href="usuarios_baja_admin.proc.php?id=<?php echo $usuario['id']; ?>"><i class="fa fa-user-times fa-2x"></i></a>
                </div>     
        <?php 
                echo "<br/><br/>";
                
            }