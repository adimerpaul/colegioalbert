<?php

include ("../../../conexion.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<script language="javascript" src="../../../Librerias/calendario/javascripts.js"></script>
<head>
  
  <script src="../../../js/jquery/jquery.min.js"></script>
  <script src="../../../js/jquery/jquery.table2excel.js"></script>
  <meta http-equiv="Content-type" content="text/html"; charset="utf-8" />
  <title>Ver cobros</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../../../css/bootstrap.min.css" class="rel">
</head>
<body>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<br>
<div class="container" style="background-color: #036874;">
<img src="../../../imagenes/logo.jpg" align="right" width="90" height="70">
  <form name="form1" method="post" action="" class="form-horizontal">
      <div class="row">
        <div class="col-md-4 col-sm-4"></div>
        <div class="form-group col-md-4 col-sm-4">  
      


     
        <script type="text/javascript">
            
            function showSelected()
            {
                var valor= document.getElementById("campo").value;
                document.getElementById("dato").placeholder= "Ingrese " + valor;
            }
        </script>

              <?php
                $user=$_GET["id"];
                error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
                $f_ini=$_POST["date1"];
                $f_fin=$_POST["date2"];
                $dat=$_POST["dato"];
                $cam=$_POST['campo'];
              ?>
        </div>

      </div>
      <h1 style="text-align: center; color:white ; margin:0;">REPORTE PAGOS </h1>
      
      <center>
       
        <button class="btn btn-primary" type="submit" name="boton">
        <span class="glyphicon"></span> Actualizar
        </button>
        <br><br>
        </center>
        <?php   
    

      
       
          
        ?>
    <td bgcolor="#fcd109"><a id="repo_excel" href="#" class="btn btn-success">Descargar</a></td>
    <table class="table table-bordered border-primary" id="table2excel">
  
            <td bgcolor="#fcd109"color="BLACK"><b> Nº</b></td>
        <td bgcolor="#fcd109"><b><font color="BLACK">Código estudiante</b></td>
        <td bgcolor="#fcd109"><b><font color="BLACK">Nombre del estudiante</b></td>
        <td bgcolor="#fcd109"><b><font color="BLACK">Fecha Vencimiento</b></td>
        <td bgcolor="#fcd109"><b><font color="BLACK">Importe</b></td>
        <td bgcolor="#fcd109"><b><font color="BLACK">Aviso</b></td>
        <td bgcolor="#fcd109"><b><font color="BLACK">NIC O CI</b></td>
        <td bgcolor="#fcd109"><b><font color="BLACK">RAZON SOCIAL</b></td>
        <td bgcolor="#fcd109"><b><font color="BLACK">Periodo facturado</b></td>
        <td bgcolor="#fcd109"><b><font color="BLACK">Tipo de pago</b></td>
   
      
        
      </tr>
      <tr>
      <?php
  
   
    
    /*if($cam=="Nombre estudiante"){}*/
   // $res=mysqli_query($conectador,"select * from pago_estudiantes where nombre_estudiante like '%$dat%';");
    
    $res=mysqli_query($conectador,"SELECT estudiante.Password,nombre_estudiante,importe_recibido,ci_factura,nom_factura,mes,tipo_pago from estudiante INNER JOIN pago_estudiantes on estudiante.Password =pago_estudiantes.Password ORDER BY estudiante.Password , tiempo_cobro");
    $total=0;
    $a=1;
    
      while($i=mysqli_fetch_array($res)){
      $total=$total+$i[2];
      
      ?>
       <tr style="text-align: center;">
         <td class="success"><?php echo $a++;?></td>
        <td class="success"><?php echo " $i[0] ";?></td><!--código-->
        <td class="success"><?php echo " $i[1] ";?></td><!--nombre-->
        <td class="success"><?php echo mostratProximoPago($i[5]);?></td><!--PENSION MES PAGO-->
        <td class="success"><?php echo " $i[2] ";?></td><!--importe_recibido-->
        <td class="success"><?php echo " $i[5] ";?></td><!---->
        <td class="success"><?php echo " $i[3] ";?></td><!---->
        <td class="success"><?php echo " $i[4] ";?></td><!---->
        <td class="success"><?php echo " $i[5] ";?></td><!---->
        <td class="success"><?php echo " $i[6] ";?></td><!--Tipo pago-->
       
         
       
        </tr>
        
        <?php
        }
        ?>
      </tr>
      <tr>
      <td>
      </td>
      <td>
      </td>
      <td>
      </td>
      <td></td>
   
      
      <td style="color:white"> </td>
      <td style="color:white"><?php //echo $total;
      mysqli_close($conectador);
      ?></td>
      </tr>
    </table>

    <p></p>
  </form>

</div>
<?php
function mostratProximoPago($i){
  $fechasVencen[0]="2022/03/10";
  $fechasVencen[1]="2022/04/10";
  $fechasVencen[2]="2022/05/10";
  $fechasVencen[3]="2022/06/10";
  $fechasVencen[4]="2022/07/10";
  $fechasVencen[5]="2022/08/10";
  $fechasVencen[6]="2022/09/10";
  $fechasVencen[7]="2022/10/10";
  $fechasVencen[8]="2022/11/10";
  $fechasVencen[9]="<spam style='color: Green'><b>NO EXISTE MAS DEUDAS</b></spam>";

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

for ($z=0;$z<=9;$z++){
  if ($i==$mensualidad[$z]){
    $conteo=$z+1;
    echo $fechasVencen[$z];
    
     $conteo;
} 
else{
  

}
}

}
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
      <script>
        $(document).ready(()=>{
        $("#repo_excel").click(function(){
        $("#table2excel").table2excel({
          exclude: ".noExl",
            filename: "Cobros",
            fileext:".xls"
        }); 
         });
      });
    </script><script type="text/javascript"></script>
</body>
</html>

