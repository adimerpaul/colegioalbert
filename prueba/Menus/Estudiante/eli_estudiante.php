<?php
include "../../conexion.php";
$dato=$_GET['id'];
$user=$_GET['d2'];
mysqli_query($conectador,"delete from estudiante where rude='$dato';");
mysqli_close($conectador);
header ("location: mostrar_estudiante.php?id=$user");
?>