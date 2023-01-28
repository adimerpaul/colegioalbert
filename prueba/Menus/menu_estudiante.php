<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu Estudiante</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<?php
  include "../conexion.php";
  $active_estudiantes="active";
  $active_docentes="";
  $active_cursos="";
  $active_usuarios="";
  $active_menu="";
  //obteniendo el id del cajero
  $id_cajero=$_GET["id"];
  //$i=mysql_fetch_array(mysql_query("select * from usuario where id_usuario='$res';"));
?>

<div class="container">

<br>
<div class="col-md-3"></div>
<div class="col-md-6">
  <table class="table table-bordered table-hover" width="500" align="center">
    <tr>
      <th class="success" colspan="3"><div align="center"><font face="consolas" size="6" color="GRAY">Menu Estudiante</font></div></th>
    </tr>
    <tr>
      <td align="center">
          <a href="Estudiante/reg_estudiante.php?id=<?php echo $id_cajero;?>" class="btn btn-primary" target="CUERPO">
          <img src="../imagenes/estudiante.jpg" height="100" width="100"><br>Registrar<br>estudiante nuevo
          </a>
      </td>

      <td align="center">
        <a href="Estudiante/listas.php?id=<?php echo $id_cajero;?>" class="btn btn-success" target="CUERPO">
        <img src="../imagenes/listas.jpg" width="100" height="100"><br>Listas <br>
        </a>
      </td>
      
      <td align="center">
        <a href="Estudiante/mostrar_estudiante.php?id=<?php echo $id_cajero?>" class="btn btn-info" target="CUERPO">
        <img src="../imagenes/cobros.jpg" width="100" height="100"><br>Buscar
        </a>
      </td>
      <td align="center">
        <a href="Estudiante/listas_preinscritos.php" class="btn btn-info" target="CUERPO">
        <img src="../imagenes/estudiante_pre.png" width="100" height="100"><br>PRE INSCRITOS
        </a>
      </td>

    </tr>
  </table>
</div>

</div>
</body>
</html>

