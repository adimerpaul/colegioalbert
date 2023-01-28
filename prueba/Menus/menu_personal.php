<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu Personal</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<?php
  include "../conexion.php";
  $res=$_GET["id"];
?>

<div class="container">

<br>
<div class="col-md-3"></div>
<div class="col-md-6">
  <table class="table table-bordered table-hover" width="500" align="center">
    <tr>
      <th class="success" colspan="3"><div align="center"><font face="consolas" size="6" color="GRAY">Menu Personal</font></div></th>
    </tr>
    <tr>
      <td align="center">
          <a href="Personal/reg_personal.php?id=<?php echo $res;?>" class="btn btn-primary" target="CUERPO">
          <img src="../imagenes/docente.jpg" height="100" width="100"><br>
          Registrar nuevo
          </a>
      </td>
      <td aling="center">
      	<a href="Docente/docente_materia.php?id=<?php echo $res;?>" class="btn btn-success" target="CUERPO">
        <img src="../imagenes/student.png" height="100" width="100"><br>Asignar materia
        </a>
      </td>
      <td aling="center">
      <a href="Personal/mostrar_personal.php?id=<?php echo $res;?>" class="btn btn-success" target="CUERPO">
        <img src="../imagenes/listas.jpg" height="100" width="100"><br>Lista personal
        </a>    
        </td>
    </tr>
  </table>
</div>

</div>


<script src="js/query.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

