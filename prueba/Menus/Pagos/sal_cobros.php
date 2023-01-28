<?php
    include ("../../Librerias/calendario/calendario.php");
    include ("../../conexion.php");
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
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);         
          if((isset($_GET["cu"]))&&(isset($_GET["me"]))&&(isset($_GET["ye"])))
          {
            $dato1=$_GET["cu"];
            $dato2=$_GET["me"];
            $dato3=$_GET["ye"];
            //echo "<script>alert('".$datoCurso." + ".$datoMes." + ".$datoGestion."')</script>";
          }
          else{
            $dato1=$_POST["campo1"];//curso
            $dato2=$_POST["campo2"];//mensualidad
            $dato3=$_POST["year"];//gestion
          }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<script language="javascript" src="../../Librerias/calendario/javascripts.js"></script>
<head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
  <script src="../../js/jquery/jquery.min.js"></script>
  <script src="../../js/jquery/jquery.table2excel.js"></script>

  <meta http-equiv="Content-type" content="text/html"; charset="utf-8" />
  <title>Ver cobros</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../../css/bootstrap.min.css" class="rel">
</head>
<body>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<br>
<div class="container" style="background-color: #f0eaed;">
  <form name="form1" method="post" action="" class="form-horizontal">
    <div class="row">
    </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label col-md-6 col-sm-6" for="campo">Seleccione el curso:</label>
            <div class="col-md-6 col-sm-6">
              <select class="form-control" name="campo1" id="campo1" style="width:auto; height:auto">
                <option>seleccionar</option>
                <option>Todos</option>
                <option>Pre kinder AZUL</option>
                <option>Kinder AZUL</option>
                <option>Kinder AMARILLO</option>
                <option>1° de primaria AZUL</option>
                <option>1° de primaria AMARILLO </option>
                <option>1° de primaria BLANCO </option>
                <option>2° de primaria AZUL</option>
                <option>2° de primaria AMARILLO</option>
                <option>2° de primaria BLANCO </option>
                <option>3° de primaria AZUL</option>
                <option>3° de primaria AMARILLO</option>
                <option>3° de primaria BLANCO </option>
                <option>4° de primaria AZUL</option>
                <option>4° de primaria AMARILLO</option>
                <option>4° de primaria BLANCO </option>
                <option>5° de primaria AZUL</option>
                <option>5° de primaria AMARILLO</option>
                <option>4° de primaria BLANCO </option>
                <option>6° de primaria AZUL</option>
                <option>6° de primaria AMARILLO</option>
                <option>6° de primaria BLANCO </option>
                <option>1° de secundaria AZUL</option>
                <option>1° de secundaria AMARILLO</option>
                <option>1° de secundaria BLANCO</option>
                <option>2° de secundaria AZUL</option>
                <option>2° de secundaria AMARILLO</option>
                <option>2° de secundaria BLANCO</option>
                <option>3° de secundaria AZUL</option>
                <option>3° de secundaria AMARILLO</option>
                <option>3° de secundaria BLANCO</option>
                <option>4° de secundaria AZUL</option>
                <option>4° de secundaria BLANCO</option>
                <option>4° de secundaria AMARILLO</option>
                <option>5° de secundaria AZUL</option>
                <option>5° de secundaria AMARILLO</option>
                <option>6° de secundaria AZUL</option>
                <option>6° de secundaria AMARILLO</option>
              </select>
            </div>
          </div>
        </div>
          <div class="col-md-6">
            <div class="form-group">
            <label class="control-label col-md-6 col-sm-6" for="campo">Seleccione la mensualidad:</label>
            <div class="col-md-6 col-sm-6">
              <select class="form-control" name="campo2" id="campo2" style="width:auto; height:auto">
              <option>seleccionar</option>
              <option >Febrero 1re Pago</option>
              <option >Marzo 2do Pago</option>
              <option >Abril 3er Pago</option>
              <option >Mayo 4to Pago</option>
              <option >Junio 5to Pago</option>
              <option >Julio 6to Pago</option>
              <option >Agosto 7mo Pago</option>
              <option >Septiembre 8vo Pago</option>
              <option >Octubre 9no Pago</option>
              <option >Noviembre 10mo Pago</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-2"><img src="../../imagenes/logo.jpg" align="right" width="90" height="70"></div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <label class="control-label col-md-6 col-sm-6" for="campo">Seleccione la gestion:</label>
            <div class="col-md-6 col-sm-6">
              <select name="year" id="year">
            
            <option>2021</option>
            <option>2022</option>
            <option>2023</option>
            <option>2024</option>
            <option>2025</option>
            <option>2026</option>
            <option>2027</option>
          </select>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
        </div>
        <div class="row">
            <center>
            <button class="btn btn-primary" type="submit" name="boton">
            <span class="glyphicon glyphicon-search"></span> Buscar
            </button>
            <p></p>
            <label>A continuacion se mostraran los estudiantes que NO tengan cancelado hasta el mes seleccionado</label>
            </center>
        </div> 
      </div>
  
    <table class="table table-hover" id="table2excel">
      <tr>
        <td bgcolor="YELLOW"><b><font color="BLACK">Nombre del estudiante</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Curso</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Ultimo pago realizado</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Gestion</b></td>
        <td bgcolor="YELLOW"><b><font color="BLACK">Importe mensual</b></td>
      </tr>
      <?php
      $i=0;
      
          while($i<=9)
          {
            if($dato2==$mensualidad[$i])
            {  
              $posDato2=$i;
              break;
            }
            $i++;
          }
      //$res=mysql_query("select * from pago_estudiantes where del_curso='$dato1' and mes ='$dato2';");
      //extrayendo toda la lista de estudiantes en base al curso seleccionado
      //$curso=mysql_query("select * from pago_es tudiantes where del_curso='$dato1'");
          if($dato1=="Todos"){
            $estu_curso=mysqli_query($conectador,"select * from estudiante where estado=TRUE;");
          }else
          {
            $estu_curso=mysqli_query($conectador,"select * from estudiante where curso='$dato1' and estado=TRUE;");
          }
      //preguntando a cada estudiante el maximo pago realizado
      while($c=mysqli_fetch_array($estu_curso)){
        //seleccionando el id max de pago para cada estudiante que esta pasando por este ciclo--ya lo habia hecho en form_pagos
        $max_pago=mysqli_fetch_row(mysqli_query($conectador,"select max(id_pago) from pago_estudiantes where rude_estu='$c[8]' and gestion='$dato3';"));
        //selecciono y encierro en un arreglo todo el registro del estudiante con dado rude y con su maximo pago
        if($max_pago[0]!==NULL){
          $maxDato=mysqli_fetch_array(mysqli_query($conectador,"select * from pago_estudiantes where id_pago='$max_pago[0]';"));
        $i=0;
          while($i<=9)
          {
            if($maxDato[5]==$mensualidad[$i])
            {  
              $posMaxdato=$i;
              break;
            }
            $i++;
          }
        if($posMaxdato<$posDato2){
          ?>
       <tr>
        <td class="success"><?php echo " $maxDato[1]";?></td>
        <td class="success"><?php echo " $maxDato[3]";?></td>
        <td class="success"><?php echo " $maxDato[5]";?></td>
        <td class="success"><?php echo " $maxDato[6]";?></td>
        <td class="success"><?php echo " $maxDato[4]";?></td>    
        </tr>
        <?php
        }
      }else{
        ?>
        <tr>
        <td class="success"><?php echo " $c[0]"." "."$c[1]"." "."$c[2]";?></td>
        <td class="success"><?php echo " $c[9]";?></td>
        <td class="success"><?php echo "Sin pagos registrados";?></td>
        <td class="success"><?php echo " ";?></td>
        <td class="success"><?php echo " ";?></td>    
        </tr>
        <?php
      }
    }
      mysqli_close($conectador);
        ?>
    </table>
  </form>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<a href=""id="a" class="btn btn-success" >
Descargar</a>
      <script>
   $(document).ready(()=>{
        $("a").click(function(){
        $("#table2excel").table2excel({
          exclude: ".noExl",
          name:"SaldosAlums",
            filename: "Saldos",
            fileext:".xls"
        }); 
        
      });
    })
    </script><script type="text/javascript"></script>

</body>
</html>

