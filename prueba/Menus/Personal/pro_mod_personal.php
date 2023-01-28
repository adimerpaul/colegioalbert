<?php
	include "../../conexion.php";
$carnet=$_POST["ci"];
$expedido=$_POST["ext"];
$nom=$_POST["nombre"];
$pat=$_POST["a_pat"];
$mat=$_POST["a_mat"];
$sexo=$_POST["sex"];
$naci=$_POST["naci"];
$dir=$_POST["dire"];
$tel=$_POST["telf"];
$cel=$_POST["cel"];
$corre=$_POST["corr"];
$for=$_POST["formacion"];
$info_for=$_POST["info_formacion"];
$f_ingre=$_POST["fecha_ing"];
$nu=$_POST["nua"];
$car=$_POST["cargo"];
$cat_usu=$_POST["cat"];
$est=$_POST["estado"];
mysqli_query($conectador,"update personal set expedido='$expedido',nombre='$nom',ap_paterno='$pat',
	ap_materno='$mat',sexo='$sexo',nacimiento='$naci',direccion='$dir',telefono='$tel',celular='$cel',
	correo='$corre',formacion='$for',info_formacion='$info_for',nua='$nu',cargo='$car',fecha_ingreso='$f_ingre',estado='$est'
	where ci='$carnet';");
mysqli_query($conectador,"update usuario set categoria='$cat_usu' where ci_personal='$carnet';");
header("Location: mostrar_personal.php");
mysqli_close($conectador);
?>