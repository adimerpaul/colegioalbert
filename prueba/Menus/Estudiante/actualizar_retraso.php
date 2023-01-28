<?php
include "../../conexion.php";

$rude=$_GET["rude"];

mysqli_query($conectador,"INSERT INTO `asistencia`(`id_asistencia`, `id_estudiante`, `asistencia`, `fecha`)
            VALUES (NULL,'$rude','R',NOW())");

header("location: history.back(-2)" );//con esto llevamos esa variable
//include "listas_control.php";

mysqli_close($conectador);


?>