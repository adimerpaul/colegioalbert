	<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cobrar Estudiante</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css" class="rel">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<div class="container">
  <form name="form1" method="post" action="" class="form-horizontal">
  <?php
  include "../../conexion.php";
  //obteniendo el valor del id de usuario (loging) del formulario index.php
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
  $usuario=$_GET["id2"];

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
    <td align="center" bgcolor="#d18c8c"></td>
      <td align="center" bgcolor="#d18c8c"><b>Nombre(s)</td><!--0-->
      <td align="center" bgcolor="#d18c8c"><b>Apellido paterno</td><!--1-->
      <td align="center" bgcolor="#d18c8c"><b>Apellido materno</td><!--2-->
      <td align="center" bgcolor="#d18c8c"><b>Carnet de identidad</td><!--3-->
      <td align="center" bgcolor="#d18c8c"><b>Fecha de nacimiento</td><!--4-->
      <td align="center" bgcolor="#d18c8c"><b>Direccion</td><!--5-->

      <td align="center" bgcolor="#d18c8c"><b>Telefono</td><!--6-->
      <td align="center" bgcolor="#d18c8c"><b>Sexo</td><!--7-->
      <td align="center" bgcolor="#d18c8c"><b>RUDE</td><!--8-->
      <td align="center" bgcolor="#d18c8c"><b>Curso</td><!--9-->
    </tr>

  <?php
  include "conexion.php";
  //obtencion del dato de referencia para la busqueda
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
  $dato=$_POST["dat_bus"];
  $dato1=$_POST["dat_bus1"];
  $dato2=$_POST["dat_bus2"];
  $res=mysqli_query($conectador,"select * from estudiante where nombre like '%$dato%' and apellido_pat like '%$dato1%' and apellido_mat like '%$dato2%';");
  while($f=mysqli_fetch_array($res)){
  	?>
  <tr>
  
  <td>
  <a href="../Pagos/form_pagos.php?id=<?php echo $f[8]?>&d2=<?php echo $usuario?>" target="_blank" class="btn btn-success">
  <span class="glyphicon glyphicon-usd"></span>
  Cobrar</a>
  </td>
  <td class="success"><font face="arial" size="2"><?php echo " $f[0] ";?></font></td>
  <td class="success"><font face="arial" size="2"><?php echo " $f[1] ";?></font></td>
  <td class="success"><font face="arial" size="2"><?php echo " $f[2] ";?></font></td>
  <td class="success"><font face="arial" size="2"><?php echo " $f[3] ";?></font></td>
  <td class="success"><font face="arial" size="2"><?php echo " $f[4] ";?></font></td>
  <td class="success"><font face="arial" size="2"><?php echo " $f[5] ";?></font></td>
  <td class="success"><font face="arial" size="2"><?php echo " $f[6] ";?></font></td>
  <td class="success"><font face="arial" size="2"><?php echo " $f[7] ";?></font></td>
  <td class="success"><font face="arial" size="2"><?php echo " $f[8] ";?></font></td>
  <td class="success"><font face="arial" size="2"><?php echo " $f[9] ";?></font></td>
  <!--
  <td><?php //echo " $f[10] ";?></td>
  <td><?php //echo " $f[11] ";?></td>
  <td><?php //echo " $f[15] ";?></td>
  <td><?php //echo " $f[12] ";?></td>
  <td><?php //echo " $f[13] ";?></td>
  <td><?php //echo " $f[16] ";?></td>
  <td><?php //echo " $f[14] ";?></td>
  <td><?php //echo " $f[17] ";?></td>
  <td><?php //echo " $f[18] ";?></td>
  </tr>
  -->
  <?php
  }
  mysqli_close($conectador);
  ?>
</tr>
  </table>
  <input type="button" name="button" id="button" value="registrar nuevo" onclick = "location='reg_estudiante.php'" />
  <input type="button" name="button" id="button" value="Salir" onclick = "location='../../index.php'" />
  </form>
</div>

<script src="../../js/query.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
