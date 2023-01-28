<?php
	include "../../conexion.php";
   
    $id=$_POST["id"];
	$nom=$_POST["nombre"];
	$apellido_pat=$_POST["apellido_pat"];
	$apellido_mat=$_POST["apellido_mat"];
	$curso=$_POST["curso"];
	$fecha_nac=$_POST["fecha_nac"];
	
	$lugar_nac=$_POST["lugar_nac"];
	$telf_p=$_POST["telf_p"];
	$telf_m=$_POST["telf_m"];
	$telf_t=$_POST["telf_t"];
	$llamar_a=$_POST["llamar_a"];
	$peso=$_POST["peso"];
	$estatura=$_POST["estatura"];
	$tiene_seguro=$_POST["tiene_seguro"];
	$seguro=$_POST["seguro"];
	$tiene_alergia=$_POST["tiene_alergia"];
	$alergia=$_POST["alergia"];
	$recibe_tratamiento=$_POST["recibe_tratamiento"];
	$tratamiento=$_POST["tratamiento"];
	$app=$_POST["app"];	
    $sangre=$_POST["sangre"];
      
    

    $apf=$_POST["apf"];
	//se agregaria
	$fracturas=$_POST["fracturas"];	

	$cirugias=$_POST["cirugias"];	
	$base=$_POST["base"];	
	
	
	
	

    $REGISTRADO=1;
	mysqli_query($conectador,"update ficha_medica set `nombre`='$nom',`apellido_pat`='$apellido_pat', `apellido_mat`='$apellido_mat',`curso`='$curso',`lugar_nacimiento`='$lugar_nac',`fecha_nac`='$fecha_nac',`telf_padre`=$telf_p,`telf_madre`=$telf_m,`telf_tutor`=$telf_t,`llamar_a`='$llamar_a',`peso`=$peso,`estatura`=$estatura,`tiene_seguro`='$tiene_seguro',`seguro_medico`='$seguro',`grupo_sanguineo`='$sangre',`tiene_alergia`='$tiene_alergia',`alergia`='$alergia', `recibe_tratamiento`='$recibe_tratamiento' ,`tratamiento`='$tratamiento',`ante_pato_perso`='$app',`ante_pato_fam`='$apf',`fracturas`='$fracturas',`cirugias`='$cirugias',`enfermedad_base`='$base' where id_ficha_estudiante='$id';");
	
	//mysqli_query($conectador,"update estudiante set nombre='$nom',apellido_pat='$ap_p',apellido_mat='$ap_m',ci='$ci',nacimiento='$naci',direccion='$dir',telefono='$telf',sexo='$sex',curso='$cur',nom_padre='$nom_pa',ci_padre='$ci_pa',nom_madre='$nom_ma',ci_madre='$ci_ma',nombre_tutor='$nom_tutor',telefono_padre='$te_padre',telefono_madre='$te_madre',ci_tutor='$ci_tutor',telefono_tutor='$te_tutor', estado='$est' where rude='$rud';");
	
	
	include "mostrar_estudiante_medico.php";
//	header("location: ver_estudiante.php?id=$rud");
//mysqli_close($conectador);
?>