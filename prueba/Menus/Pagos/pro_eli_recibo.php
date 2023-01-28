<?php
include ('../../conexion.php');
//obteniedo el id de recibo del formulario info_cobros
$dato=$_GET['re'];
//obteniendo el id de usuario
$usuario=$_GET['user'];
mysqli_query($conectador,"delete from recibo where id_recibo='$dato';");
mysqli_close($conectador);
header ("location: info_cobros.php?id=$usuario");
?>