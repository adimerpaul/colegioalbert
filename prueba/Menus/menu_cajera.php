<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu Cajero(a)</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<?php
  include "../conexion.php";
  //obtener valor del cajero
  $res=$_GET["id"];
  $i=mysqli_fetch_array(mysqli_query($conectador,"select * from usuario where id_usuario='$res';"));
?>

<div class="container">

<br>
<div class="col-md-3"></div>
<div class="col-md-6">
  <table class="table table-bordered table-hover" width="500" align="center">
    <tr>
      <th class="success" colspan="3"><div align="center"><font face="consolas" size="6" color="GRAY">Menu Cajera(o)</font></div></th>
    </tr>
    <tr>
      <td>
        <a href="Estudiante/cobrar_estudiante.php" class="btn btn-success" target="_blank">
        <img src="../imagenes/cobrar.jpg" width="100" height="100"><br><b>Cobrar</b>
        </a>
      </td>
      <td>
        <a href="Pagos/ver_cobros.php" class="btn btn-warning" target="_blank">
        <img src="../imagenes/cobros.jpg" width="100" height="100"><br><b>Ver Cobros</b>
        </a>
      </td>
      <td width="142"><a href="../index.php" class="btn btn-danger">
      <img src="../imagenes/salir.jpg" width="100" height="100"><br>SALIR
      </a>
      </td>

    </tr>
    
  </table>
  <!--<center><input type="button" name="button" id="button" value="Salir" onclick = "location='index.php'" /></center>-->
</div>

</div>


<script src="js/query.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

