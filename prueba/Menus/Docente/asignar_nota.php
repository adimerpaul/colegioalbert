<?php
include "../../conexion.php";
$id_usu=$_GET["id_docente"];
  include "../../conexion.php";
  $ci_docente=mysql_fetch_array(mysql_query("select ci_personal from usuario where id_usuario=$id_usu;"));
  $consulta_datos_docente=mysql_query("SELECT nombre, ap_paterno, ap_materno
from personal
where ci=$ci_docente[0];");
$array_datos_docente=mysql_fetch_array($consulta_datos_docente);
//capturando el curso
  $curso=$_POST["cursos"];
  $cont=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<title>Asignar notas</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>

<body>
	<header style="background-color: #2c3e50;">
		<div class="container">	
		<img src="../../imagenes/logo.jpg" align="right" width="90" height="70">
			<h2><font color="WHITE"><u>ASIGNAR NOTAS</u></font></h2>
            <h2><font color="WHITE"><u>PROFESOR:<?php echo " $array_datos_docente[0]"." "."$array_datos_docente[1]"." "."$array_datos_docente[2]"?></u></font></h2>
		</div>
	</header>
	<br>
	<div class="container">
    	<div class="row">
        	<div class="col-md-4">
        	  <form id="form1" name="form1" method="post" action="">
        	  <table width="200" border="0">
        	    <tr>
        	      <td><label for="curso">CURSO:</label></td>
        	      <td><select class="form-control" name="cursos" id="cursos" style="width:auto; height:auto">
        	      	<option>Seleccionar</option>
        	        	<?php
		 							$cursos=mysql_query("select * from cursos");
		 							while($curso_array=mysql_fetch_array($cursos))
		 							{
		 								echo"<option>$curso_array[1]</option>";
		 							}
		 						?>
      	        </select><br></td>
      	      </tr>
        	    <tr>
      	      </tr>
        	    <tr>
        	      <td><label for="materia">MATERIA:</label></td>
        	      <td><select class="form-control" name="materia" id="materias" style="width:auto; height:auto">
        	        <?php
		 							$materia=mysql_query("select * from materia");
		 							while($materia_array=mysql_fetch_array($materia))
		 							{
		 								echo"<option>$materia_array[1]</option>";
		 							}
		 						?>
      	        </select><br></td>
      	      </tr>
      	    </table>
      	    <button class="btn btn-success" id="botonsito" type="submit" onclick="agregar();">
				<span class="glyphicon glyphicon-plus"></span> Añadir
			  </button>
        	  </form>
        	</div>
            <div class="col-md_8">
              <table id="tabla" name="tabla" width="750" border="2">
              <tr>
              	<th colspan="2" ></th>
              	<th colspan="4" style="text-align:center">PROMEDIOS</th>
              </tr>
               <tr>
		 		<th bgcolor="#f5f5f5">#</th>
			 	<th bgColor="#a39d9d" width="50%">Nombre</th>
			 	<th bgColor="#f5f5f5">Ser</th>
			 	<th bgColor="#f5f5f5">Saber</th>
			 	<th bgColor="#f5f5f5">Hacer</th>
                <th bgColor="#f5f5f5">Decidir</th>
		 	</tr>
		 	<tr>
		 		<?php
            $estudiantes=mysql_query("select * from estudiante where curso like '$curso%' order by apellido_pat;");
            while($f=mysql_fetch_array($estudiantes))
            {
            	$cont++;
          		?>
			 	<td bgcolor="#e3e1e1"><?php echo " $cont ";?></td>
			 	<td><?php echo "$f[1] $f[2] $f[0]"?></td>
			 	<td><input class="form-control" type="number" id="ser" name="ser" style="width:80px; height:auto"></td>
			 	<td><input class="form-control" type="number" id="saber" name="saber" style="width:80px; height:auto"></td>
			 	<td><input class="form-control" type="number" id="hacer" name="hacer" style="width:80px; height:auto"></td>
			 	<td><input class="form-control" type="number" id="decidir" name="decidir" style="width:80px; height:auto"></td>
		 	</tr>
		 		<?php
            }
            mysql_close($conectador);
            ?>
              </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
	var c=1;
	function agregar(){
			//obtener los valores de los input
			
			var curso=document.getElementById('cursos').value
			var docente=document.getElementById('docentes').value
			var materia=document.getElementById('materias').value
			var tabla=document.getElementById('tabla');
			{
				var fila=tabla.insertRow(c);
				var cel0=fila.insertCell(0);
				var cel1=fila.insertCell(1);
				var cel2=fila.insertCell(2);
				var cel3=fila.insertCell(3);
				var cel4=fila.insertCell(4);
				
				cel0.innerHTML= c;
				cel1.innerHTML=curso;
				cel2.innerHTML=docente;
				cel3.innerHTML=materia;
				cel4.innerHTML="<font color='red'>Quitar</font>";
			}
			c=c+1;
		}
		function quitar(){
			document.getElementById('tabla').deleteRow(1);
		}
</script>
</body>
</html>