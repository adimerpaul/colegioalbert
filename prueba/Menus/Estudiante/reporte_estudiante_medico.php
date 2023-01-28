<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
header("Pragma: public");
header("Expires: 0");
$filename = "EstudiantesMedico.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
  
<table>
  
<tr>
                  <th>Nombres</th>
                  <th>Apellido paterno</th>
                  <th>Apellido materno</th>
                  <th>Curso</th>
                  <th>Fecha de nacimiento</th>
                  <th>Telefono de padre</th>
                  <th>Telefono de madre</th>
                  <th>Telefono de tutor</th>
                  <th>Peso</th>
                  <th>Estatura</th>
                  <th>Grupo Sanguineo</th>
                  <th>Alergia/th>
                  <th>Seguro médico</th>


            </tr>
<?php
include "../../conexion.php";
//la consulta
$estu=mysqli_query($conectador,"select * from ficha_medica;");

while($estu_array=mysqli_fetch_array($estu)){
      ?>

<tr>
     <td> <?php echo $estu_array[1];?></td>
     <td> <?php echo $estu_array[2];?></td>
     <td> <?php echo $estu_array[3];?></td>
     <td> <?php echo $estu_array[4];?></td>
     <td> <?php echo $estu_array[5];?></td>
     <td> <?php echo $estu_array[7];?></td>
     <td> <?php echo $estu_array[8];?></td>
     <td> <?php echo $estu_array[9];?></td>
     <td> <?php echo $estu_array[11];?></td>
     <td> <?php echo $estu_array[12];?></td>
     <td> <?php echo $estu_array[15];?></td>
     <td> <?php echo $estu_array[17];?></td>
     <td> <?php echo $estu_array[14];?></td>
     
      </tr>
<?php
}
mysqli_free_result($estu);
?>
</table>

<script src="js/app.js"></script>
<script src="../../js/app.js"></script>
</body>
</html>
