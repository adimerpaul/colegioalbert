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
  <title>Ver Consultas</title>
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

                <option>Nombre Doctor(a)</option>
                <option>Numero de consulta</option>
                <option>Nombre estudiante</option>
                <option>Fecha</option>
              </select>
            </div>
          </div>


        <div class="form-group">
            <div class="col-md-4 col-sm-4"></div>

            <div class="col-md-8 col-sm-8">
              <input type="text" class="form-control" name="dato" id="dato" placeholder="Ingrese Nombre Doctor(a)">
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
                  <input type="date" name="date1"  id="date1" value="2023-02-01" class="form-control" />
                </div>

              <div class="col-md-2 col-sm-2"></div>

              <div class="col-sm-5 col-md-5">
                <label for="date2" class="control-label">Fecha final</label>
                <input  type="date" name="date2"  id="date2" value="2023-12-31" class="form-control" />
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
                $cam=$_POST["campo"];

              ?>



        </div>

      </div>

      <!--<a href="moduleReport/reportTodos_medico.php?id=<?php //echo $user ?>" target="_blank" class="btn btn-success "  name="boton" style="margin-bottom:5px">
        <span class="glyphicon glyphicon-edit"></span> Reporte de Consultas
        </a>-->

        <a href="#" target="_blank" class="btn btn-success "  name="boton" style="margin-bottom:5px">
        <span class="glyphicon glyphicon-edit"></span> Reporte de Consultas
        </a>

    <table class="table table-hover" id="table2excel">

      <tr>
        <td bgcolor="lightskyblue"><a id="repo_excel" href="#" class="btn btn-success">Descargar</a></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">Nro. de consulta</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">Estudiante</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">Curso</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">Fecha y hora</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">Doctor/a</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">PA</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">FC</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">FR</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">Sat 02</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">Subjetivo</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">Objetivo</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">Análisis</b></td>
        <td bgcolor="lightskyblue"><b><font color="BLACK">Plan</b></td>


      </tr>
      <tr>
      <?php
    if($cam=="Nombre Doctor(a)"){
    $res=mysqli_query($conectador,"select * from registro_medico inner join ficha_medica on registro_medico.id_estudiante=ficha_medica.id_ficha_estudiante where usuario like '%$dat%' and fecha BETWEEN '$f_ini 00:00:01' AND '$f_fin 23:59:59';");
    }
    if($cam=="Numero de consulta"){
    $res=mysqli_query($conectador,"select * from registro_medico inner join ficha_medica on registro_medico.id_estudiante=ficha_medica.id_ficha_estudiante where id_registro_medico='$dat';");
    }
    if($cam=="Nombre estudiante"){
    $res=mysqli_query($conectador,"select * from registro_medico inner join ficha_medica on registro_medico.id_estudiante=ficha_medica.id_ficha_estudiante where nombre like '%$dat%' or apellido_pat like '%$dat%' or apellido_mat like '%$dat%';");
    }
    if($cam=="Fecha"){
    $res=mysqli_query($conectador,"select * from registro_medico where fecha BETWEEN '$f_ini 00:00:01' AND '$f_fin 23:59:59';");
    }
    $total=0;
      while($i=mysqli_fetch_array($res)){
      $total=$total+$i[9];
      ?>
       <tr>
        <td class="success"><a class="btn btn-danger" href="pro_eli_consulta.php?id=<?php echo $i[0]?>&user=<?php echo $user?>">
        <span class="glyphicon glyphicon-remove"></span>  Eliminar
        </a>
      </td>
        <td class="success"><?php echo $i['id_registro_medico'];?></td>
        <td class="success"><?php echo $i['nombre']." ".$i['apellido_pat']." ".$i['apellido_mat'];?></td><!--nombre-->
        <td class="success"><?php echo $i['curso'];?></td><!--curso-->
        <td class="success"><?php echo $i['fecha'];?></td><!--mensualidad-->
        <td class="success"><?php echo $i['usuario'];?></td><!--fecha y hora-->
        <td class="success"><?php echo $i['pa'];?></td><!--cajero-->
        <td class="success"><?php echo $i['fc'];?></td><!--importe mensual-->
        <td class="success"><?php echo $i['fr'];?></td><!--importe recibido-->
        <td class="success"><?php echo $i['saturacion'];?></td><!--importe recibido-->
        <td class="success"><?php echo $i['subjetivo'];?></td><!--importe recibido-->
        <td class="success"><?php echo $i['objetivo'];?></td><!--importe recibido-->
        <td class="success"><?php echo $i['analisis'];?></td><!--importe recibido-->
        <td class="success"><?php echo $i['plan'];?></td><!--importe recibido-->


       <!--<td class="success"><a href="moduleReport/reportePagos.php?var=<?php //echo $i[13];?>" class="btn btn-info">Reporte</a></td>-->
       <!--importe recibido-->
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

      <?php
      mysqli_close($conectador);
      ?>

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
            filename: "ConsultasMedicas",
            fileext:".xls"
        });
         });
      });
    </script><script type="text/javascript"></script>
</body>
</html>

