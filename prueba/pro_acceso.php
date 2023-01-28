<?php
include "conexion.php";
$usu=$_POST["user"];
$pas=$_POST["pass"];
$cate=$_POST["cat"];


$pas=$_POST["pass"];
$query="select password from usuario where password= ? ;";	
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
		
			$query="select * from usuario where usuario='$usu' and password='$pas' and categoria='$cate';";

			$resul = mysqli_query($conectador, $query);

			$fila=mysqli_fetch_row($resul);

           
if($fila[3]=="Administrador"){ 
	$urlDir='Menus/menu_admin.php?id='.$fila[0];
	    if (!headers_sent()){
		     header("Location:Menus/menu_admin.php?id=$fila[0]");
		}else {
			echo '<script type="text/javascript">';
			echo 'window.location.href="'.$urlDir.'";';
			echo '</script>';
			echo '<noscript>';
			echo '<meta http-equiv="refresh" content="0;url='.$urlDir.'" />';
			echo '</noscript>';
		}
	
		header("Location:Menus/menu_admin.php?id=$fila[0]");
	}
if($fila[3]=="Auxiliar")
	{
		header("Location:Menus/menu_aux.php?id=$fila[0]");
	}
if($fila[3]=="Cajero")
	{
		header("Location:Menus/menu_cajera.php?id=$fila[0]");
	}
if($fila[3]=="Docente")
	{
		header("Location:Menus/Docente/panel_docente.php?id=$fila[0]");
	}
	else{
		echo "<CENTER><p>Datos invalidos, intentar de nuevo</p></CENTER>";
		echo "<a href='index.php'>RETORNAR</a>";
		

}


 /*else{

	header('location:https://colegioalberteinstein.edu.bo/');
}*/

?>