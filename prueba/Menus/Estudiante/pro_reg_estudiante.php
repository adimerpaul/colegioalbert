<?php
	include "../../conexion.php";
$nom=$_POST["nom_estu"];
$ap_p=$_POST["ap_pat"];
$ap_m=$_POST["ap_mat"];
$ci=$_POST["ci_est"];
$naci=$_POST["fecha_nac"];
$dir=$_POST["dir_estu"];
$telf=$_POST["tel"];
$sex=$_POST["sexo"];
$rud=$_POST["cod_rude"];
$cur=$_POST["curso"];
$nom_pa=$_POST["nom_pat"];
$ci_pa=$_POST["ci_pat"];
$nom_ma=$_POST["nom_mat"];
$ci_ma=$_POST["ci_mat"];

$te_padre=$_POST["tel_padre"];
$te_madre=$_POST["tel_madre"];
$nom_tutor=$_POST["nom_tuto"];
$ci_tutor=$_POST["ci_tuto"];
$te_tutor=$_POST["tel_tuto"];	
//se agregaria 
$codiES=$_POST["cod_estu"];
$corre_es=$_POST["corre_es"];
$corre_mad=$_POST["corre_mad"];
$ocup_ma=$_POST["ocup_ma"];
$corre_pad=$_POST["corre_pad"];
$ocup_pa=$_POST["ocup_pa"];																																																																																																										
$corre_tu=$_POST["corre_tu"];
$nom_factur=$_POST["nom_factur"];
$ci_factur=$_POST["ci_factur"];	
$tipo=$_POST["tipo"];

mysqli_query($conectador,"INSERT INTO `estudiante`(`nombre`, `apellido_pat`, `apellido_mat`, `ci`, `nacimiento`, `direccion`, `telefono`, `sexo`, `rude`, `curso`, `nom_padre`, `ci_padre`, `nom_madre`, `ci_madre`, `nombre_tutor`, `telefono_padre`, `telefono_madre`, `ci_tutor`, `telefono_tutor`, `estado`, `Password`, `correo_estudiante`, `correo_padre`, `correo_madre`, `correo_tutor`, `ocup_madre`, `ocup_padre`, `nom_factura`, `ci_factura`, `Registrado`,`fecha`,`tipo`) VALUES ('$nom','$ap_p','$ap_m',$ci,'$naci','$dir',$telf,'$sex','$rud','$cur','$nom_pa',$ci_pa,'$nom_ma',$ci_ma,'$nom_tutor',$te_padre,$te_madre,$ci_tutor,$te_tutor,1,'$codiES','$corre_es','$corre_pad','$corre_mad','$corre_tu','$ocup_ma','$ocup_pa','$nom_factur',$ci_factur,'1',NOW(),'$tipo')");
$res=$rud;
header("location: ver_estudiante.php?id=$res" );//con esto llevamos esa variable
include "ver_estudiante.php";

mysqli_close($conectador);


?>