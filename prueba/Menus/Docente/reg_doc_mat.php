<?php
$res=$_GET["id"];
include "../../conexion.php";

$cur = $_POST["cur"]; //$cur $doc $mat llegan a ser array's, por lo tanto con un for desplazamos dato por dato
$doc = $_POST["doc"];
$mat = $_POST["mat"];

//tomamos como referencia cualquier tamaño de array, ya sea $cur, $doc o $mat debido a que los 3 campos se encuentran en una misma fila y por lógica tendran tambien el mismo tamaño de array.
for($i = 0; $i<sizeof($cur); ++$i)
{
	$nombre_completo = explode(" ",$doc[$i]); //Funcion explode para separar palabras de un string a un array
	$IDdocente = mysql_fetch_array(mysql_query("select ci from personal where cargo=2 and nombre = '$nombre_completo[0]' and ap_paterno = '$nombre_completo[1]' and ap_materno = '$nombre_completo[2]';"));
	$IDcurso = mysql_fetch_array(mysql_query("select id_curso from cursos where descripcion = '$cur[$i]' ;"));
	$IDmateria = mysql_fetch_array(mysql_query("select id_materia from materia where descripcion = '$mat[$i]'; "));
	
	mysql_query("insert into docente_materia(id_doc_mat,ci_docente,id_materia,id_curso) values(Null,'$IDdocente[0]','$IDmateria[0]','$IDcurso[0]');");	
}

header("location: docente_materia.php?id=$res");
mysql_close($conectador);
?>