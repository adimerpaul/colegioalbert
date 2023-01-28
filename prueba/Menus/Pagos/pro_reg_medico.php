<?php
include "../../conexion.php";
$nom=$_POST["nom_estu"];
$usuario=$_POST["usuario"];
$id=$_GET["id"];

$pa=$_POST["pa"];
$fc=$_POST["fc"];
$fr=$_POST["fr"];
$temp=$_POST["temperatura"];
$saturacion=$_POST["saturacion"];
$subjetivo=$_POST["subjetivo"];
$objetivo=$_POST["objetivo"];
$analisis=$_POST["analisis"];
$plan=$_POST["plan"];

mysqli_query($conectador,"INSERT INTO `registro_medico`(`id_registro_medico`,`id_estudiante`, `pa`, `fc`, `fr`, `temp`, `saturacion`, `subjetivo`, `objetivo`, `analisis`, `plan`,`usuario`) 
                                             VALUES (NULL,$id,'$pa','$fc','$fr','$temp','$saturacion', '$subjetivo', '$objetivo','$analisis', '$plan','$usuario')");

include "form_consulta.php";
//header("location: ver_estudiante.php?id=$res" );//con esto llevamos esa variable
mysqli_close($conectador);


?>