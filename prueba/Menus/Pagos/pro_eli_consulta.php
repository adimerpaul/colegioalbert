<?php
include ('../../conexion.php');
//obteniedo el id de pago del formulario info_cobros
$dato=$_GET['id'];
//obteniendo el id de usuario
$usuario=$_GET['user'];
mysqli_query($conectador,"delete from registro_medico where id_registro_medico='$dato';");
mysqli_close($conectador);

echo "<h1 style='color:red;'><center>Registro Eliminado</center> </h1>";
echo "</br>";
echo "<h1 style='color:green;'> <center><a href='javascript:history.back()'><b> VOLVER </b> </h1></a></center>";

header ("location: info_consultas.php?id=$usuario");
?>