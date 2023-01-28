<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu Médico)</title>
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
      <th class="success" colspan="3"><div align="center"><font face="consolas" size="6" color="GRAY">Menú Médico</font></div></th>
    </tr>
    <tr>
      <td align="center">
          <a href="menu_estudiante_medico.php?id=<?php echo $i[0];?>" class="btn btn-primary" target="CUERPO">
          <img src="../imagenes/estudiante.jpg" height="100" width="100"><br>Estudiantes
          </a>
      </td>

      

     <!--<td align="center">
        <a href="menu_cobros.php?id=<?php echo $i[0];?>" class="btn btn-warning" target="CUERPO">
        <img src="../imagenes/cobros.jpg" width="100" height="100"><br>Cobrosssssssss
        </a>
      </td>-->
    </tr>
    
  </table>
  
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
   

  </div>
  <div class="col-md-4"></div>
</div>
</div>


<script src="js/query.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

