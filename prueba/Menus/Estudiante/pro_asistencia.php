<?php
include "../../conexion.php";
$asistencia=$_POST["asistencia"];
$id=$_GET["id"];

mysqli_query($conectador,"INSERT INTO `asistencia`(`id_asistencia`, `id_estudiante`, `asistencia`, `fecha`)
            VALUES (NULL,'$id','$asistencia',NOW())");
$res=$rud;
header("location: ver_estudiante.php?id=$res" );//con esto llevamos esa variable
include "ver_estudiante.php";

mysqli_close($conectador);


?>