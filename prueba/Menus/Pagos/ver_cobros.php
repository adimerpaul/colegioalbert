<?php
include ("../../Librerias/calendario/calendario.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <title>Ver cobros</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../../css/bootstrap.min.css" class="rel">
</head>
<body>  

<script language="JavaScript" src="../../Librerias/calendario/javascripts.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<br>
<div class="container" style="background-color: #f0eaed;">
  <form name="form1" method="post" action="" class="form-horizontal">
      <div class="row">
        <div class="col-md-4 col-sm-4"></div>
        
        <div class="form-group col-md-4 col-sm-4">  
          <div class="form-group">

            <label class="control-label col-md-4 col-sm-4" for="campo">Buscar por:</label>
            <div class="col-md-8 col-sm-8">
              <select class="form-control" name="campo" id="campo" onChange="showSelected();">
                <option>Nombre cajero(a)</option>
                <option>ID de pago</option>
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
            <link rel="stylesheet" type="text/css" href="tcal.css" />
            <script type="text/javascript" src="tcal.js"></script>
                <div class="col-sm-5 col-md-5">
                  <label for="date1" class="control-label">Fecha inicio</label>
                  <input type="text" name="date1" class="tcal" id="date1" value="" />

                </div>
              <div class="col-md-2 col-sm-2"></div>
              <div class="col-sm-5 col-md-5">

                <label for="date2" class="control-label">Fecha final</label>

                <input  type="text" name="date2" class="tcal" id="date2" value="" />
              </div>  
        </div>
        <center>
        <button class="btn btn-primary" type="submit" name="boton">
        <span class="glyphicon glyphicon-search"></span> Buscar
        </button>
        </center>
        </div>
      </div>
      <div class="col-md-4"></div>
  
    <table class="table table-hover" style="border-style: solid;" border="1">
      <tr>
        
        <td bgcolor="green"><font face="tahoma" color="WHITE"><b>Id de pago</b></font></td>
        <td bgcolor="green"><font face="tahoma" color="WHITE"><b>Nombre del estudiante</b></td>
        <td bgcolor="green"><font face="tahoma" color="WHITE"><b>Curso</b></td>
        <td bgcolor="green"><font face="tahoma" color="WHITE"><b>Mesualidad cobrada</b></td>
        <td bgcolor="green"><font face="tahoma" color="WHITE"><b>Fecha y hora</b></td>
        <td bgcolor="green"><font face="tahoma" color="WHITE"><b>Nombre del cajero (a)</b></td>
        <td bgcolor="green"><font face="tahoma" color="WHITE"><b>Importe mensual</b></td>
        <td bgcolor="green"><font face="tahoma" color="WHITE"><b>Importe recibido</b></td>
        
      </tr>
      <tr>
      <?php
    include ("../../conexion.php");;
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    $f_ini=$_POST["date1"];
    $f_fin=$_POST["date2"];
    $dat=$_POST["dato"];
    $cam=$_POST['campo'];
    if($cam=="Nombre cajero(a)"){
    $res=mysqli_query($conectador,"select * from pago_estudiantes where usuario='$dat' and tiempo_cobro BETWEEN '$f_ini 00:00:01' AND '$f_fin 23:59:59';");
    }
    if($cam=="ID de pago"){
    $res=mysqli_query($conectador,"select * from pago_estudiantes where id_pago='$dat';");
    }
    if($cam=="Nombre estudiante"){
    $res=mysqli_query($conectador,"select * from pago_estudiantes where nombre_estudiante like '%$dat%';");
    }
    if($cam=="Fecha"){
    $res=mysqli_query($conectador,"select * from pago_estudiantes where tiempo_cobro BETWEEN '$f_ini 00:00:01' AND '$f_fin 23:59:59';");  
    }
    $total=0;
      while($i=mysqli_fetch_array($res)){
      $total=$total+$i[9];
      ?>
       <tr>
        <td class="success"><font color="red"><b><?php echo " $i[0] ";?></b></font></td><!--id pago-->
        <td class="success"><?php echo " $i[1] ";?></td><!--nombre-->
        <td class="success"><?php echo " $i[3] ";?></td><!--curso-->
        <td class="success"><?php echo " $i[5] ";?></td><!--mensualidad-->
        <td class="success"><?php echo " $i[7] ";?></td><!--fecha y hora-->
        <td class="success"><?php echo " $i[8] ";?></td><!--cajero-->
        <td class="success"><?php echo " $i[4] ";?></td><!--importe mensual-->
        <td class="success"><?php echo " $i[9] ";?></td><!--importe recibido-->    
        </tr>
        <?php
        }
        ?>
      </tr>
      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>Total = </td>
      <td><?php echo $total?></td>
      </tr>
    </table>
    <p></p>
  </form>
</div>

</body>
</html>