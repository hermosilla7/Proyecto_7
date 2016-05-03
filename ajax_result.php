<script type="text/javascript">
    function PrintElem(elem)
    {
        alert("printElemen");
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=50,width=50');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>

<?php
include 'conexion.proc.php';
include_once 'qr/src/QrCode.php';
include_once 'qr/Exceptions/QrCode.php';
include_once 'qr/Exceptions/.php';

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
                 <button onClick="PrintElem('#clients')">Imprimir carnet</button>  
                </div>     
        <?php 
                echo "<br/><br/>";
                
            }