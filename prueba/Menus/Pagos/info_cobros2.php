<?php
include ("../../Librerias/calendario/calendario.php");
include ("../../conexion.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<script language="javascript" src="../../Librerias/calendario/javascripts.js"></script>
<head>
  
  <script src="./../js/jquery/jquery.min.js"></script>
  <script src="./../js/jquery/jquery.table2excel.js"></script>
  <meta http-equiv="Content-type" content="text/html"; charset="utf-8" />
  <title>Ver cobros</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../../css/bootstrap.min.css" class="rel">
</head>
<body>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<br>
<div class="container" style="background-color: #f0eaed;">
<img src="../../imagenes/logo.jpg" align="right" width="90" height="70">
  <form name="form1" method="post" action="" class="form-horizontal">
      <div class="row">
        <div class="col-md-4 col-sm-4"></div>
        <div class="form-group col-md-4 col-sm-4">  
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-4" for="campo">Buscar por:</label>
            <div class="col-md-8 col-sm-8">
              <select class="form-control" name="campo" id="campo" onChange="showSelected();">
                <option>Nombre cajero(a)</option>
                <option>Recibo</option>
                <option>Nombre estudiante</option>
                <option>Fecha</option>
              </select>
            </div>
          </div>


        <div class="form-group">
            <div class="col-md-4 col-sm-4"></div>
            
            <div class="col-md-8 col-sm-8">
              <input type="text" class="form-control" name="dato" id="dato" placeholder="Ingrese Nombre cajero(a)">
            </div>
        </div>
        <script type="text/javascript">
            
            function showSelected()
            {
                var valor= document.getElementById("campo").value;
                document.getElementById("dato").placeholder= "Ingrese " + valor;
            }
        </script>
        <div class="form-group">
            <link rel="stylesheet" type="text/css" href="../../Librerias/calendario/tcal.css" />
            <script type="text/javascript" src="../../Librerias/calendario/tcal.js"></script>
                <div class="col-sm-5 col-md-5">
                  <label for="date1" class="control-label">Fecha inicio</label>
                  <input type="date" name="date1"  id="date1" value="" />
                </div>

              <div class="col-md-2 col-sm-2"></div>

              <div class="col-sm-5 col-md-5">
                <label for="date2" class="control-label">Fecha final</label>
                <input  type="date" name="date2"  id="date2" value="" />
              </div>  
        </div>
        <center>
        <button class="btn btn-primary" type="submit" name="boton">
        <span class="glyphicon glyphicon-search"></span> Buscar
        </button>
        </center>
     
              <?php
                $user=$_GET["id"];
                error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
                $f_ini=$_POST["date1"];
                $f_fin=$_POST["date2"];
                $dat=$_POST["dato"];
                $cam=$_POST['campo'];
              ?>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <h4><b><center><?php if(is_numeric($dat)){
              echo "Recibo Nro.: ".$dat; 
            }else
            {
               echo "Recibo Nro.: "."N";  
            }
            ?></center></b></h4>
            <center>
              <a class="btn btn-warning" href="pro_eli_recibo2.php?re=<?php echo $dat?>&user=<?php echo $user?>">
              <span class="glyphicon glyphicon-trash"></span>  Eliminar recibo  
              </a>
            </center>
          </div>
        </div>
      </div>
      
      <a href="moduleReport/reportTodos.php?id=<?php echo $user ?>" target="_blank" class="btn btn-success "  name="boton" style="margin-bottom:5px">
        <span class="glyphicon glyphicon-edit"></span> Reporte de pagos
        </a>
        
    <table class="table table-hover" id="table2excel">
      <tr>
        <td bgcolor="YELLOW"><a id="repo_excel" href="#" class="btn btn-success">Descargar</a></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Nro. de Recibo</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Nombre del estudiante</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Curso</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Concepto</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Fecha y hora</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Cajero (a)</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Importe mensual</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Importe recibido</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Descripcion</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Reporte de pagos</b></td>
        
      </tr>
      <tr>
      <?php
    if($cam=="Nombre cajero(a)"){
    $res=mysqli_query($conectador,"select * from otros_pagos where usuario='$dat' and tiempo_cobro BETWEEN '$f_ini 00:00:01' AND '$f_fin 23:59:59';");
    }
    if($cam=="Recibo"){
    $res=mysqli_query($conectador,"select * from otros_pagos where id_recibo='$dat';");
    }
    if($cam=="Nombre estudiante"){
    $res=mysqli_query($conectador,"select * from otros_pagos where nombre_estudiante like '%$dat%';");
    }
    if($cam=="Fecha"){
    $res=mysqli_query($conectador,"select * from otros_pagos where tiempo_cobro BETWEEN '$f_ini 00:00:01' AND '$f_fin 23:59:59';");  
    }
    $total=0;
      while($i=mysqli_fetch_array($res)){
      $total=$total+$i[9];
      ?>
       <tr>
        <td class="success"><a class="btn btn-danger" href="pro_eli_cobro2.php?idf=<?php echo $i[0]?>&user=<?php echo $user?>">
        <span class="glyphicon glyphicon-remove"></span>  Eliminar
        </a>
      </td>
        <td class="success"><?php echo " $i[11] ";?></td>
        <td class="success"><?php echo " $i[1] ";?></td><!--nombre-->
        <td class="success"><?php echo " $i[3] ";?></td><!--curso-->
        <td class="success"><?php echo " $i[5] ";?></td><!--mensualidad-->
        <td class="success"><?php echo " $i[7] ";?></td><!--fecha y hora-->
        <td class="success"><?php echo " $i[8] ";?></td><!--cajero-->
        <td class="success"><?php echo " $i[4] ";?></td><!--importe mensual-->
        <td class="success"><?php echo " $i[9] ";?></td><!--importe recibido-->
        <td class="success"><?php echo " $i[10] ";?></td><!--importe recibido-->  
        
       <td class="success"><a href="moduleReport/reportePagos2.php?var=<?php echo $i[13];?>" class="btn btn-info">Reporte</a></td><!--importe recibido-->  
        </tr>
        
        <?php
        }
        ?>
      </tr>
      <tr>
      <td>
      </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>Total = </td>
      <td><?php echo $total;
      mysqli_close($conectador);
      ?></td>
      </tr>
    </table>
    <p></p>
  </form>
</div>
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

