<?php
	include "../../conexion.php";
$carnet=$_POST["ci"];
$nom=$_POST["nombre"];
$pat=$_POST["a_pat"];
$mat=$_POST["a_mat"];
$naci=$_POST["naci"];
$dir=$_POST["dire"];
$tel=$_POST["telf"];
$corre=$_POST["corr"];

$bol=$_POST["enabled"];

$user=$_POST["usu"];
$pas=$_POST["pass"];

$nom_completo=$nom." ".$pat." ".$mat;
mysql_query("insert into docente(ci,nombre,ap_paterno,ap_materno,nacimiento,direccion,telefono,correo,estado)values('$carnet','$nom','$pat','$mat','$naci','$dir','$tel','$corre','$bol');");

mysql_query("insert into usuario(id_usuario,nombre_completo,usuario,password,categoria)values(Null,'$nom_completo','$user','$pas','Docente');");

header("Location: reg_docente.php");
mysql_close($conectador);
?>