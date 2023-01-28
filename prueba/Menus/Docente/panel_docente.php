<!DOCTYPE html>
<html lang="en">
<head>
<?php
$id_usu=$_GET["id"];
  include "../../conexion.php";
  $ci_docente=mysql_fetch_array(mysql_query("select ci_personal from usuario where id_usuario=$id_usu;"));
  $consulta_datos_docente=mysql_query("SELECT nombre, ap_paterno, ap_materno
from personal
where ci=$ci_docente[0];");
$array_datos_docente=mysql_fetch_array($consulta_datos_docente);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <meta charset="UTF-8">
  <title>Menu Docente</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<header style="background-color: #2c3e50;">
<div class="container">	
		<img src="../../imagenes/logo.jpg" align="right" width="90" height="70">
			<h2><font color="WHITE"><u>BIENVENIDO PROFESOR: <?php echo "$array_datos_docente[0]"." "."$array_datos_docente[1]"." "."$array_datos_docente[2]"?></u></font></h2>
			<p>&lt;&gt;</p>
		</div>
</header>

<div class="container">
<div class="row">
<br>
<div class="col-md-4"></div>
<div class="col-md-4">
  <table class="table table-bordered table-hover" width="100%" align="center">
    <tr>
      <th class="success" colspan="3"><div align="center"></div></th>
    </tr>
    <tr>
      <td aling="center">
      	<a href="asignar_nota.php?id_docente=<?php echo"$id_usu"?>" class="btn btn-success" target="_blank">
        <img src="../../imagenes/iconoedi.jpg" height="100" width="100"><br>Asignar notas
        </a>
      </td>
      <td aling="center">
      <a href="../../index.php" class="btn btn-success">
        <img src="../../imagenes/salir.jpg" height="100" width="100"><br>Salir
        </a>    
        </td>
    </tr>
  </table>
</div>
<div class="col-md-4	"></div>
</div>
</div>
<script src="js/query.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

