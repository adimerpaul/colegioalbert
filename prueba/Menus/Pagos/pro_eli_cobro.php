<?php
include ('../../conexion.php');
//obteniedo el id de pago del formulario info_cobros
$dato=$_GET['idf'];
//obteniendo el id de usuario
$usuario=$_GET['user'];
mysqli_query($conectador,"delete from pago_estudiantes where id_pago='$dato';");
mysqli_close($conectador);
header ("location: info_cobros.php?id=$usuario");
?>