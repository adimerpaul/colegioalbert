<?php
	include "../../conexion.php";
	error_reporting(E_ALL);
    ini_set('display_errors', true);

	$nom=$_POST["nom_estu"];
	$ap_p=$_POST["ap_pat"];
	$ap_m=$_POST["ap_mat"];
	$ci=$_POST["ci_est"];
	$naci=$_POST["fecha_nac"];
	$dir=$_POST["dir_estu2"];
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
	$est=$_POST["estado"];	
    
    
    

    $codi_estu=$_POST["codi_estu"];
	//se agregaria
	$correo_es=$_POST["correo_es"];	

	$correo_pa=$_POST["correo_pa"];	
	$correo_ma=$_POST["correo_ma"];	
	$correo_tu=$_POST["correo_tu"];	
	
	$ocup_padre=$_POST["ocup_padre"];
	$ocup_madre=$_POST["ocup_madre"];
	
	
	$nom_factur=$_POST["nom_factur"];
	$ci_factur=$_POST["ci_factur"];
	$tipo=$_POST["tipo"];

    $REGISTRADO=1;
	mysqli_query($conectador,"update estudiante set `nombre`='$nom',`apellido_pat`='$ap_p',`apellido_mat`='$ap_m',`ci`='$ci',`nacimiento`='$naci',direccion='$dir',telefono='$telf',sexo='$sex',curso='$cur',nom_padre='$nom_pa',`ci_padre`='$ci_pa',`nom_madre`='$nom_ma',`ci_madre`='$ci_ma',`nombre_tutor`='$nom_tutor',`telefono_padre`='$te_padre',`telefono_madre`='$te_madre',`ci_tutor`='$ci_tutor',`telefono_tutor`='$te_tutor', `estado`='$est' ,`correo_estudiante`='$correo_es',`correo_padre`='$correo_pa',`correo_madre`='$correo_ma',`correo_tutor`='$correo_tu',`ocup_madre`='$ocup_madre',`ocup_padre`='$ocup_padre',`nom_factura`='$nom_factur',`ci_factura`='$ci_factur',`Registrado`='$REGISTRADO', `tipo`='$tipo'  where rude='$rud';");
	
	//mysqli_query($conectador,"update estudiante set nombre='$nom',apellido_pat='$ap_p',apellido_mat='$ap_m',ci='$ci',nacimiento='$naci',direccion='$dir',telefono='$telf',sexo='$sex',curso='$cur',nom_padre='$nom_pa',ci_padre='$ci_pa',nom_madre='$nom_ma',ci_madre='$ci_ma',nombre_tutor='$nom_tutor',telefono_padre='$te_padre',telefono_madre='$te_madre',ci_tutor='$ci_tutor',telefono_tutor='$te_tutor', estado='$est' where rude='$rud';");
	$res=$rud;
	$codi_estu;
	include "ver_estudiante.php";
//header("location: ver_estudiante.php?id=$rud");
mysqli_close($conectador);
?>