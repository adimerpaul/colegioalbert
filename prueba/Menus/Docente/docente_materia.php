<?php
include "../../conexion.php";

$res = $_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<title>Asignar materia</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>

<body>
	<header style="background-color: #2c3e50;">
		<div class="container">	
		<img src="../../imagenes/logo.jpg" align="right" width="90" height="70">
			<h2><font color="WHITE"><u>ASIGNAR MATERIAS</u></font></h2>
		</div>
	</header>
	<br>
	<div class="container">
      <div class="row">
        <div class="col-md-5">
        	  
        	  <table width="200" border="0">
        	    <tr>
        	      <td><label for="curso">CURSO:</label></td>
        	      <td>
        	      
        	      <select class="form-control" name="curso" id="cursos" style="width:auto; height:auto">
        	        <?php
		 							$cursos=mysql_query("select * from cursos");
		 							while($curso_array=mysql_fetch_array($cursos))
		 							{
		 								echo"<option>$curso_array[1]</option>";
		 							}
		 						?>
      	        </select><br>
				
      	        </td>
      	      </tr>
        	    <tr>
        	      <td><label for="docente">DOCENTE:</label></td>
        	      <td><select class="form-control" name="docente" id="docentes" style="width:auto; height:auto">
        	        <?php
		 							$docente=mysql_query("select nombre,ap_paterno, ap_materno from personal where cargo=2");
		 							while($docente_array=mysql_fetch_array($docente))
		 							{
		 								echo"<option>$docente_array[0] $docente_array[1] $docente_array[2]</option>";
		 							}	
		 						?>
      	        </select><br></td>
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

		      <a onclick="agregar();" class="btn btn-success">
		      	<span class="glyphicon glyphicon-plus"></span> Añadir
		      </a>    
        </div>
   		<div class="col-md-7">
   			<form id="form1" name="form1" method="post" action="reg_doc_mat.php?id=<?php echo $res;?>">
				
   			  <font face="calibri" size="4">
              	<table class="table table-hover" id="tabla" name="tabla" border="2">
               	<tr>
		 		<th bgcolor="#a39d9d">#</th>
			 	<th bgColor="#f5f5f5">Curso</th>
			 	<th bgColor="#f5f5f5">Docente</th>
			 	<th bgColor="#f5f5f5">Materia</th>
			 	<th bgColor="#a39d9d">&nbsp;</th>
			 	</tr>
			 	<!--AQUI SE INSERTARAN LAS FILAS Y COLUMNAS -->
           		</table>
           	  </font>
       </div>
			<center>
   				<button type="submit" name="button" id="button" class="btn btn-primary">
		          REGISTRAR
		          <b class="glyphicon glyphicon-floppy-disk"></b>
		          </button>
        	</center>
        	</form>
      </div>
</div>


<script type="text/javascript">
	var c=1;
		function agregar(){
			//obtener los valores de los input
			var curso=document.getElementById('cursos').value
			var docente=document.getElementById('docentes').value
			var materia=document.getElementById('materias').value
			var fila='<tr id="fila'+c+'">'
						+'<td>'+c+'</td>'
						+'<td>'
						+'<input class="form-control" type="text" name="cur[]" value="'+curso+'" style="background-color: white;" >'
						+'</td>'
						+'<td><input class="form-control" type="text" name="doc[]" value="'+docente+'" style="background-color: white;" ></td>'
						+'<td><input class="form-control" type="text" name="mat[]" value="'+materia+'" style="background-color: white;" ></td>'
						+'<td><button class="btn btn-danger" id="fila'+c+'" onclick="quitar(this.id);"><span class="glyphicon glyphicon-trash"></span></button>'
						+'</td>'
					  +'</tr>';
			//append es una funcion de js que significa añadir, en este caso añadimos fila a la tabla de id="tabla" 
			$('#tabla').append(fila);
			c=c+1;
			reordenar();
		}

		//ELIMINA LA FILA A TRAVÉZ DE SU ID DE TR, esta funcion se activa con el boton de la fila añadida
		function quitar(id_fila){
			$("#"+id_fila).remove();
			reordenar();
		}

		//REORDENA LA TABLA CUANDO AGREGE O ELIMINE PERO NO CAMBIA SU ID DE LAS FILAS
		function reordenar(){
			var num=0;
			$("#tabla tr").each(function(){
				$(this).find('td').eq(0).text(num);
				num++;
			});
		}
</script>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>

</body>
</html>
