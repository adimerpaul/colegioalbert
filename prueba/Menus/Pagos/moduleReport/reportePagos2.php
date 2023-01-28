

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1><?php echo $_GET['var'] ?></h1>

    <?php

    include "../../../conexion.php";

$res=$_GET['var'];

 $i=mysqli_fetch_array(mysqli_query($conectador,"select * from otros_pagos where Password ='$res';"));
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<title>Informaci贸n de estudiante</title>

<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<style>
    *{
        font-family:helv茅tica;
    }
@page {

  margin-top:0;
		margin-left: 3cm;
		margin-right: 0;
    margin-bottom: 0;
	}

@media  (max-width: 600px) {
  h1 {
        font-size: 20px;
    
  }
  
}
.container{
    width: 50%;
}
.mes{
   
}
.centro{
    margin: 0 auto;
}
th, tr{
    text-align: center;
}

</style>
<body >


<header align="center"> 

<div class="row"style=" font-size:12px;  width: 95%;">
<div style="border-top:0.5px black solid;width: 100%; "></div>
<H4 style="margin:5px;">UNIDAD EDUCATIVA ALBERT EINSTEIN</H4>

<?php
$nombreImagen = "../../Estudiante/img/logo.png";
$imagenBase64 = "data:img/logo.png;base64," . base64_encode(file_get_contents($nombreImagen));

$mensualidad[0]="Febrero 1re Pago";
$mensualidad[1]="Marzo 2do Pago";
$mensualidad[2]="Abril 3er Pago";
$mensualidad[3]="Mayo 4to Pago";
$mensualidad[4]="Junio 5to Pago";
$mensualidad[5]="Julio 6to Pago";
$mensualidad[6]="Agosto 7mo Pago";
$mensualidad[7]="Septiembre 8vo Pago";
$mensualidad[8]="Octubre 9no Pago";
$mensualidad[9]="Noviembre 10mo Pago";


$fecha_mensualidad[0]="10/Febrero/".date('Y');
$fecha_mensualidad[1]="10/Marzo/".date('Y');
$fecha_mensualidad[2]="10/Abril/".date('Y');
$fecha_mensualidad[3]="10/Mayo/".date('Y');
$fecha_mensualidad[4]="10/Junio/".date('Y');
$fecha_mensualidad[5]="10/Julio/".date('Y');
$fecha_mensualidad[6]="10/Agosto/".date('Y');
$fecha_mensualidad[7]="10/Septiembre/".date('Y');
$fecha_mensualidad[8]="10/Octubre/".date('Y');
$fecha_mensualidad[9]="10/Noviembre/".date('Y');
 ?>
 <div style="width:90%;">
    

<div style="  float: right; position:relative;top:-20px;">
<img src=<?php echo $imagenBase64?> width="70px" style="margin:0;"/>
</div>
</div>
</div>   

</header>


<center>
<div class="container ">
<table class="table table-info">
  <thead  class="table-warning">
    <tr>
      <th scope="col">CODIGO</th>
      <th scope="col">NOMBRE Y APELLIDOS</th>
      <th scope="col">CURSO</th>
      
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <th ><?php echo $i[13];?></th>
      <td><?php echo $i[1];?></td>
      <td><?php echo $i[3];?></td>
    </tr>
   
 
  </tbody>
  
</table>
</div>
</center>

<center>
<div class='col-6' >
<table class="table table-info mes"style='float: left; width : 48%'>
  <thead  class="table-warning">
    <tr>
      <th scope="col">CONCEPTO</th>
     
      
    </tr>
  </thead>
  
  <tbody>
 
    
    <?php $rest=mysqli_query($conectador,"select mes from otros_pagos where Password ='$res';");
     while($j=mysqli_fetch_array($rest)) {?>
    <tr>
    <thead  class="">
    <th><?php echo $j[0];
    $meses=$j[0];
    
    ?></th>

      </thead>
      <?php }   ?>    
     
    </tr>
    <tr>
  
    </tr>
 
  </tbody>
  
</table>
</div>

<div class='col-6' >
<table class="table table-info mes"style='width : 49%'>
  <thead  class="table-warning">
    <tr>
      <th scope="col">MONTO</th>
     
      
    </tr>
  </thead>
  
  <tbody>
 
    <?php $restO=mysqli_query($conectador,"select importe_recibido from pago_estudiantes where Password ='$res';");
     while($h=mysqli_fetch_array($restO)) {?>
          <tr>
    <thead  class="">
      <th><?php echo $sumT=$h[0];?></th>
      </thead>
      <?php }  
          
      ?>    
     
    </tr>
    <tr>
  
    </tr>
 
  </tbody>
  
</table>
</div>

</center>

<div class="container ">
<table class="table table-info">
  <thead  class="table-warning">
    <tr>
      <th scope="col">MONTO TOTAL CANCELADO</th>
      <?php $restO=mysqli_query($conectador,"select SUM(importe_recibido) from otros_pagos where Password ='$res';");
     while($h=mysqli_fetch_array($restO)) {?>
          
    
      <th  class="table-info"><?php echo $h[0];?></th>
     
      <?php }  
          
      ?>    
     
    </tr>
      
    
  </thead>
  

  
</table>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
<?php
	/*include "../../conexion.php";
	require ("../../fpdf181/fpdf.php"); //llamamos a la libreria pdf
	$usuario=$_GET["user"];//obteniendo el id de usuario que viene de form_pagos.php
	$rude=$_GET["rude"];
	$nom=$_POST["nom_estu"];	
	$cur=$_POST["curso"];
	$im_mensual=$_POST["im"];

	$y=$_POST["year"];
	$fe=date("y-m-d(H:i:s)",time()); //OJO
	$fecha=$fe;						//OJO
	$user=$_POST["usuario"];
	$descri=$_POST["desc"];
	$anio=date("Y");

	$mes_pagado=$_POST["meses"]; 
	$importes = $_POST["importe_m"];

	$Password=$_POST["cod_estu"]; 
	$tipo_pago = $_POST["tipo_pago"];

	$descuento = $_POST["descuento"];
	//isertando datos
	mysqli_query($conectador,"insert into recibo(id_recibo,id_usuario,tiempo_cobro,rude_estu,gestion,observaciones)values(null,'$usuario','$fecha','$rude','$y','$descri');");
	$ult_recibo=mysqli_fetch_row(mysqli_query($conectador,"select max(id_recibo) from recibo;"));
	
	for($i=0;$i<sizeof($mes_pagado); ++$i)
	{
		mysqli_query($conectador,"insert into pago_estudiantes(id_pago,nombre_estudiante,rude_estu,del_curso,importe_mensual,mes,gestion,tiempo_cobro,usuario,importe_recibido,descripcion,id_recibo,Password,tipo_pago,descuento)values(Null,'$nom','$rude','$cur','$im_mensual','$mes_pagado[$i]','$y','$fecha','$user','$importes[$i]','$descri','$ult_recibo[0]','$Password','$tipo_pago','$descuento');");
	}
	$num_pago=mysqli_query($conectador,"select sum(importe_mensual) from pago_estudiantes where rude_estu= '$rude'");
foreach (mysqli_fetch_array($num_pago) as $rowPagos  );

echo $rowPagos;
echo  '<br> descuentos :';
 	$descuentos=mysqli_query($conectador,"select sum(descuento) from pago_estudiantes where rude_estu= '$rude'");
foreach (mysqli_fetch_array($descuentos) as $rowDescuentos ){
	$rowDescuentos=$rowDescuentos+0;
}
echo $rowDescuentos;
echo  '<br >';
	$prim_uno=mysqli_query($conectador,"select MAX(importe_mensual) from pago_estudiantes where rude_estu= '$rude' LIMIT 1" );
foreach (mysqli_fetch_array($prim_uno) as $rowprimerPago );
echo $rowprimerPago ;
echo  '<br>';
echo	$totalDebepagar=$rowprimerPago*10;
echo  '<br>';
echo	$totalSinPagar=$totalDebepagar-$rowPagos-$rowDescuentos;
//obteniendo el id ultimo
$i=mysqli_query($conectador,"select * from pago_estudiantes where id_recibo='$ult_recibo[0]';");


mysqli_close($conectador);
*/
?>
