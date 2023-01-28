<?php
include "../../conexion.php";
$dato=$_GET['id'];
$user=$_GET['d2'];
mysqli_query($conectador,"delete from personal where ci='$dato';");
mysqli_close($conectador);
header ("location: mostrar_personal.php?id=$user");
?>