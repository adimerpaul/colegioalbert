<?php 


include "../conexion.php";
$res=$_GET["id"];
$i=mysqli_fetch_array(mysqli_query($conectador,"select * from usuario where id_usuario='$res';"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu Administrador(a)</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  
</head>

<frameset rows="8%,*,6%" frameborder='0' noresize>
  <frame src="barra_menu_medico.php?id=<?php echo $i[0];?>" name="ENCABEZADO" scrolling="no">
  <frame src="contenido_medico.php?id=<?php echo $i[0];?>" name="CUERPO" scrolling="auto">
  <frame src="piePagina.php?id=<?php echo $i[0];?>" name="PIE" scrolling="no"> 
</frameset>


</html>

