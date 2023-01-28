<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu Academico</title>
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
      <!--<td align="center">
          <a href="Estudiante/reg_estudiante_medico2.php?id=<?php// echo $id_cajero;?>" class="btn btn-primary" target="CUERPO">
          <img src="../imagenes/estudiante.jpg" height="100" width="100"><br>Registrar<br>
          </a>
      </td>-->

      
      
      <td align="center">
        <a href="Estudiante/mostrar_estudiante_academico.php?id=<?php echo $id_cajero?>" class="btn btn-info" target="CUERPO">
        <img src="../imagenes/cobros.jpg" width="100" height="100"><br>Buscar
        </a>
      </td>
      
      <td align="center">
        <a href="Pagos/info_consultas2.php?id=<?php echo $id_cajero?>" class="btn btn-primary" target="CUERPO">
        <img src="../imagenes/info_consulta.jpg" width="100" height="100"><br>Informacion de incedencias
        </a>
      </td>
      

    </tr>
  </table>
</div>

</div>
</body>
</html>

