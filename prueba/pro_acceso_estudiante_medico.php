<?php
include "conexion.php";
$usu=$_POST["user"];
$pas=$_POST["pass"];



$pas=$_POST["pass"];
$query="select Password from estudiante where password= ? ;";	
$stmt=$conectador->prepare($query);

$stmt->bind_param('s',$pas);
$stmt->execute();
$stmt->bind_result($respuetaT);
//mysqli_stmt_fetch($stmt);
$stmt->fetch();
$VAR=$respuetaT;

/*if($VAR==$pas){
	mysqli_stmt_close($stmt);
	mysqli_close($conectador);*/
	
		include "conexion.php";
			session_start();
			$_SESSION["passwo"]=$_POST['pass'];
		
			$query="select * from estudiante where (apellido_pat='$usu' or apellido_mat='$usu') and Password='$pas';";

			$resul = mysqli_query($conectador, $query);

			$fila=mysqli_fetch_row($resul);

if($fila){

if($fila[29]=='1'){
	//$urlDir='Menus/mostrar_estudianteWeb.php?id='.$fila[8];
	$urlDir='Menus/Estudiante/reg_estudiante_medico.php?id='.$fila[8];
	    if (!headers_sent()){
		     header("Location:Menus/Estudiante/reg_estudiante_medico.php?id=$fila[8]");
			 						//header("Location:Menus/menu_admin.php?id=$fila[0]");
		}else {
			echo '<script type="text/javascript">';
			echo 'window.location.href="'.$urlDir.'";';
			echo '</script>';
			echo '<noscript>';
			echo '<meta http-equiv="refresh" content="0;url='.$urlDir.'" />';
			echo '</noscript>';
		
	
		header("Location:Menus/Estudiante/mostrar_estudianteWeb.php?rude=$fila[22]");
		
	}
}
else {
        echo "<CENTER><p style='font-size: x-large;'>ERROR!!. </p></CENTER>";
		echo "<a href='https://colegioalberteinstein.edu.bo/' style='font-size: x-large;'>RETORNAR</a>";
     }
    
}
	else{
		echo "<CENTER><p style='font-size: x-large;'>Datos invalidos, intentar de nuevo</p></CENTER>";
		echo "<a href='loginEstudiante_s.php' style='font-size: x-large;'>RETORNAR</a>";
		

}


 /*else{

	header('location:https://colegioalberteinstein.edu.bo/');
}*/

?>