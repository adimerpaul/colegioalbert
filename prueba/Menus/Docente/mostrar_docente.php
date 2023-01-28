<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Estudiante</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css" class="rel">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<div class="">
  <form name="form1" method="post" action="" class="form-horizontal">
  <?php
  include "../../conexion.php";
  //obteniendo el valor del id de usuario (loging) del formulario menu_estudiante.php
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
  $usuario=$_GET["id_cajero"];

  ?>
  <br>
  <div class="form-group">
    <font face="consolas">
      <label for="dat_bus" class="control-label col-md-2">Nombre (s):</label> 
      <div class="col-md-2">
        <input class="form-control" type="text" name="dat_bus" id="dat_bus" placeholder="Ingrese el nombre">  
      </div>
      
      <label for="dat_bus1" class="control-label col-md-1">Apellido Paterno:</label> 
      <div class="col-md-2">
        <input class="form-control" type="text" name="dat_bus1" id="dat_bus1" placeholder="Ingrese Apellido Paterno">
      </div>
    
      <label for="dat_bus2" class="control-label col-md-1">Apellido Materno:</label>
      <div class="col-md-2">
        <input class="form-control" type="text" name="dat_bus2" id="dat_bus2" placeholder="Ingrese Apellido Materno">
      </div>
    </font>
  </div>

  <div class="from-group" align="center">
    <button type="submit" id="buscar" class="btn btn-primary">
      <p class="glyphicon glyphicon-search"></p>Buscar
    </button> 
  </div>
  <br>
    
  <table class="table table-hover" border="1">
    <tr>
    <td align="center" bgcolor="#33FF99"></td>
    <td align="center" bgcolor="#33FF99"></td>
      <td align="center" bgcolor="#33FF99">Nombre(s)</td><!--0-->
      <td align="center" bgcolor="#33FF99">Apellido paterno</td><!--1-->
      <td align="center" bgcolor="#33FF99">Apellido materno</td><!--2-->
      <td align="center" bgcolor="#33FF99">Carnet de identidad</td><!--3-->
      <td align="center" bgcolor="#33FF99">Fecha de nacimiento</td><!--4-->
      <td align="center" bgcolor="#33FF99">Direccion</td><!--5-->
      <td align="center" bgcolor="#33FF99">Telefono</td><!--6-->
      <td align="center" bgcolor="#33FF99">Sexo</td><!--7-->
      <td align="center" bgcolor="#33FF99">Correo electronico</td><!--8-->
    </tr>

  <?php
  //obtencion del dato de referencia para la busqueda
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
  $dato=$_POST["dat_bus"];
  $dato1=$_POST["dat_bus1"];
  $dato2=$_POST["dat_bus2"];
  $res=mysql_query("select * from docente where nombre like '%$dato%' and ap_paterno like '%$dato1%' and ap_materno like '%$dato2%';");
  while($f=mysql_fetch_array($res)){
  	?>
  <tr>
  <td><a href="modificar_estudiante.php?id=<?php echo $f[0]?>" class="btn btn-warning">Modificar</a></td>
  <td><a href="eli_estudiante.php?id=<?php echo $f[0]?>" class="btn btn-danger">Eliminar</a></td>
  <td><font face="arial" size="2"><?php echo " $f[1] ";?></font></td>
  <td><font face="arial" size="2"><?php echo " $f[2] ";?></font></td>
  <td><font face="arial" size="2"><?php echo " $f[3] ";?></font></td>
  <td><font face="arial" size="2"><?php echo " $f[0] ";?></font></td>
  <td><font face="arial" size="2"><?php echo " $f[5] ";?></font></td>
  <td><font face="arial" size="2"><?php echo " $f[6] ";?></font></td>
  <td><font face="arial" size="2"><?php echo " $f[7] ";?></font></td>
  <td><font face="arial" size="2"><?php echo " $f[4] ";?></font></td>
  <td><font face="arial" size="2"><?php echo " $f[8] ";?></font></td>
  <?php
  }
  mysql_close($conectador);
  ?>

  </table>
  <input type="button" name="button" id="button" value="registrar nuevo" onclick = "location='reg_estudiante.php'" />
  <input type="button" name="button" id="button" value="Salir" onclick = "location='index.php'" />
  </form>
</div>

<script src="../../js/query.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
