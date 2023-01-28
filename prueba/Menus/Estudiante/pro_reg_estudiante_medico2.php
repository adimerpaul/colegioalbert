<?php
include "../../conexion.php";
error_reporting(E_ALL);
ini_set('display_errors', true);
$nom=$_POST["nom_estu"];
$peso=$_POST["peso"];
$ap_p=$_POST["ap_pat"];
$ap_m=$_POST["ap_mat"];
$estatura=$_POST["estatura"];
$tiene_s=$_POST["tiene_s"];
$lugar_nac=$_POST["lugar_nac"];
$seguro=$_POST["seguro"];
$fecha_nac=$_POST["fecha_nac"];
$sangre=$_POST["sangre"];
$tel_p=$_POST["tel_p"];
$tel_m=$_POST["tel_m"];
$tel_t=$_POST["tel_t"];
$tiene_al=$_POST["tiene_al"];
$alergia=$_POST["alergia"];

$recibe_trat=$_POST["recibe_trat"];
$llamar=$_POST["llamar"];
$tratamiento=$_POST["tratamiento"];
$apf=$_POST["apf"];
$app=$_POST["app"];	
//se agregaria 
$fracturas=$_POST["fracturas"];
$cirugias=$_POST["cirugias"];
$curso=$_POST["curso"];
$base=$_POST["base"];
$REGISTRADO=1;
mysqli_query($conectador,"INSERT INTO `ficha_medica`(`id_ficha_estudiante`,`nombre`,`apellido_pat`,`apellido_mat`,`curso`,`lugar_nacimiento`,`fecha_nac`,`telf_padre`,`telf_madre`,`telf_tutor`,`llamar_a`,`peso`,`estatura`,`tiene_seguro`,`seguro_medico`,`grupo_sanguineo`,`tiene_alergia`,`alergia`,`recibe_tratamiento`,`tratamiento`,`ante_pato_perso`,`ante_pato_fam`,`fracturas`,`cirugias`,`enfermedad_base`,`registrado`) 
                                             VALUES (NULL,'$nom','$ap_p','$ap_m','$curso','$lugar_nac','$fecha_nac',$tel_p, $tel_m,$tel_t,'$llamar',$peso,$estatura,'$tiene_s','$seguro','$sangre','$tiene_al','$alergia','$recibe_trat','$tratamiento','$app','$apf','$fracturas','$cirugias','$base',$REGISTRADO)");
echo "<h1 style='color:red;'><center>Registro guardado</center> </h1>";
echo "</br>";
echo "<h1 style='color:green;'> <center><a href='../menu_medico.php'><b> VOLVER </b> </h1></a></center>";

//include "ver_estudiante.php";
//header("location: ver_estudiante.php?id=$res" );//con esto llevamos esa variable
//header("location:http://colegioalberteinstein.edu.bo");
mysqli_close($conectador);


?>