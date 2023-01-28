<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu Auxiliar</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<style>
  body{
    background: rgb(0,212,255);
background: linear-gradient(90deg, rgba(0,212,255,1) 0%, rgba(0,212,255,1) 100%);
background-size:cover;
background-repeat: none;
  }
</style>
<body>

<?php
  include "../conexion.php";
  //obtener valor del usuario
  $user=$_GET["id"];
  $i=mysqli_fetch_array(mysqli_query($conectador,"select * from usuario where id_usuario='$user';"));
  $cargo=mysqli_fetch_array(mysqli_query($conectador,"select cargo.descripcion
  from personal
  join cargo on cargo.id_cargo=personal.cargo
  where ci='$i[4]';"));
?>

<div class="container">

<br>
<div class="col-md-3"></div>
<div class="col-md-6">
  <table class="table table-bordered table-hover" width="500" align="center">
    <tr>
      <th class="success" colspan="3"><div align="center"><font face="consolas" size="6" color="rgb(2,0,36)">Menu Auxiliar</font></div></th>
    </tr>
    <tr>
      <td align="center">
        <a href="Estudiante/reg_estudiante.php?id=<?php echo $user ?>" class="btn btn-warning" target="_blank">
        <img src="../Imagenes/nuevo_estu.jpg" width="100" height="100"><br><b>Nuevo Estudiante</b>
        </a>
      </td>
      <!----
      <?php
        if($cargo[0]=='DOCENTE'){
          ?>
          <td align="center">
        <a  class="btn btn-success">
        <img src="../Imagenes/cobros.jpg" width="100" height="100"><br><b>Cobrar</b>
        </a>
      </td>
      <?php
        }else{
          ?>
      <td align="center">
        <a href="Estudiante/mostrar_estudiante2.php?id=<?php echo $user ?>" class="btn btn-success" target="_blank">
        <img src="../Imagenes/cobros.jpg" width="100" height="100"><br><b>Cobrar</b>
        </a>
      </td>
      <?php
       }
      ?>
      ---->
      <td align="center">
        <a href="Estudiante/mostrar_estudiante3.php?id=<?php echo $user ?>"  target="_blank">
        <img src="../Imagenes/estudiante.jpg" width="100" height="100"><br><b>Reinscribcion</b>
        </a>
      </td>
    </tr>
    
    <tr>
      <td></td>
      <td align="center" width="142"><a href="../index.php" class="btn btn-danger">
      <img src="../Imagenes/salir.jpg" width="50" height="50"><br>SALIR
      </a>
      </td>
      
      <td></td>
    </tr>
 
  </table>
  <!--<center><input type="button" name="button" id="button" value="Salir" onclick = "location='index.php'" /></center>-->
</div>

</div>


<script src="../../js/query.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>