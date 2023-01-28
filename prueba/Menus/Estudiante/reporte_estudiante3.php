
<?php


include "../../conexion.php";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-usuarios.xls");

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      

<table>
      <tr>
                  <th>Nombres</th>
                  <th>Apellido paterno</th>
                  <th>Apellido materno</th>
                  <th>C.I.</th>
                  <th>Fecha de nacimiento</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Sexo</th>
                  <th>RUDE</th>
                  <th>Curso</th>
                  <th>Padre</th>
                  <th>C.I. del padre</th>
                  <th>Madre</th>
                  <th>C.I. de la madre</th>
                  <th>Tutor</th>
                  <th>Telefono del padre</th>
                  <th>Telefono de la madre</th>
                  <th>C.I. del tutor</th>
                  <th>Telefono del tutor</th>
                  <th>Codigo estudiante</th>
                  <th>Correo estudiante</th>
                  <th>Correo padre</th>
                  <th>Correo madre</th>
             
                  <th>nombre factura</th>
                  <th>Ci factura</th>
                  <th>Registrado</th>

            </tr>
<?php
//la consulta
$estu=mysqli_query($conectador,"select * from estudiante;");

while($estu_array=mysqli_fetch_array($estu)){
      ?>

<tr>
     <td> <?php echo $estu_array[0];?></td>
     <td> <?php echo $estu_array[1];?></td>
     <td> <?php echo $estu_array[2];?></td>
     <td> <?php echo $estu_array[3];?></td>
     <td> <?php echo $estu_array[4];?></td>
     <td> <?php echo $estu_array[5];?></td>
     <td> <?php echo $estu_array[6];?></td>
     <td> <?php echo $estu_array[7];?></td>
     <td> <?php echo $estu_array[8];?></td>
     <td> <?php echo $estu_array[9];?></td>
     <td> <?php echo $estu_array[10];?></td>
     <td> <?php echo $estu_array[11];?></td>
     <td> <?php echo $estu_array[12];?></td>
     <td> <?php echo $estu_array[13];?></td>
     <td> <?php echo $estu_array[14];?></td>
     <td> <?php echo $estu_array[15];?></td>
     <td> <?php echo $estu_array[16];?></td>
     <td> <?php echo $estu_array[17];?></td>
     
     <td> <?php echo $estu_array[19];?></td>
     <td> <?php echo $estu_array[20];?></td>
     <td> <?php echo $estu_array[21];?></td>
     <td> <?php echo $estu_array[22];?></td>
     <td> <?php echo $estu_array[23];?></td>
   
     
     <td> <?php echo $estu_array[27];?></td>
     <td> <?php echo $estu_array[28];?></td>

     <td> <?php echo $estu_array[29];?></td>
    
      </tr>
<?php
}
mysqli_free_result($estu);
?>
</table>


</body>
</html>
