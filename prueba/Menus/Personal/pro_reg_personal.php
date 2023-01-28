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
//datos de registro para usuario
$user=$_POST["usu"];
$pas=$_POST["pass"];

mysqli_query($conectador,"insert into personal(ci,expedido,nombre,ap_paterno,ap_materno,sexo,nacimiento,direccion,telefono,celular,
	correo,formacion,info_formacion,nua,cargo,fecha_ingreso,estado)values('$carnet','$expedido','$nom','$pat','$mat','$sexo',
	'$naci','$dir','$tel','$cel','$corre','$for','$info_for','$nu','$car','$f_ingre',1);");

mysqli_query($conectador,"insert into usuario(id_usuario,usuario,password,categoria,ci_personal)values(Null,'$user','$pas','$cat_usu','$carnet');");
header("Location: reg_personal.php");
mysqli_close($conectador);
?>