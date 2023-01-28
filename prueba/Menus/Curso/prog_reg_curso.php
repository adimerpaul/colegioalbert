<?php
include "conexion.php";
$des_curso=$_POST["nom_curso"];
//$des_curso=$_POST["op_dos"]; lo use cuando se trataba de una lista/menu
mysql_query("insert into cursos (id_curso, descripcion) values(Null,'$des_curso')");
//poner null y asi es auto incrementable
mysql_close($conectador);
header("location:reg_curso.php");
//echo "hasta qui funsiona";
?>