<!--AÑADIMOS BOOTSTRAP-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>   
<?php

//obteniendo el rude estudiante de mostrar_estudiante.php
include "../../conexion.php";
$dato=$_GET["id"];
$i=mysqli_fetch_array(mysqli_query($conectador,"select * from estudiante where rude='$dato';"));
//obteniendo el valor del id de usuario (loging) de mostrar_estudiante.php
$dato2=$_GET["d2"];
$i2=mysqli_fetch_array(mysqli_query($conectador,"select personal.nombre, personal.ap_paterno, personal.ap_materno, personal.cargo
from usuario
join personal on ci=ci_personal
where id_usuario='$dato2';"));
//obteniendo el ultimo recibo
$ult_recibo=mysqli_fetch_row(mysqli_query($conectador,"select max(id_recibo) from recibo;"));
$num_recibo=$ult_recibo[0] + 1;
//almacenando el nombre completo del estudiante en una variable
$nom_estu=$i[0]." ".$i[1]." ".$i[2];
//obteniendo el valor de la ultima cuota que pago el estudiante
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
 
  $max_pago=mysqli_fetch_row(mysqli_query($conectador,"select max(id_pago) from pago_estudiantes where rude_estu='$i[8]'"));
  $maxDato=mysqli_fetch_array(mysqli_query($conectador,"select * from pago_estudiantes where id_pago='$max_pago[0]'"));
  $j=0;
        while($j<=9)
        {
          if(isset($maxDato)){
          if($maxDato[5]==$mensualidad[$j])
          {  
            
            $posMaxdato=$j;
            break;
            }
          }
          $j++;
        }

$ul_imp=mysqli_fetch_array(mysqli_query($conectador,"select importe_mensual from pago_estudiantes where rude_estu='$dato' and id_pago=(SELECT max(id_pago) FROM pago_estudiantes where rude_estu='$dato');"));
?>
<div class="container">
<form  class="form-horizontal" method="post"  name="form1" action="pro_reg_cobro2.php?rude=<?php echo $dato;?>&user=<?php echo $dato2;?>"  onSubmit="onEnviar()">
  
  <div class="form-group">  
      <label for="usuario" class="control-label col-md-4"><font color="BLUE">Cajero(a): </font></label>
      <div class="col-md-3"><input class="form-control" type="text" style="text-align:center" name="usuario" id="usuario" value="<?php echo $i2[0]." ".$i2[1]." ".$i2[2]?>" readonly>
      </div>
      <div class="col-md-5"></div>
  </div>
    <div class="panel panel-danger" style="background-color:transparent;">
    <!--1RA tabla donde se almacenan datos-->
    <table class="table" style="border-color:#eca9a7;" border="0">
      <tr>
        
        <td width="14%"><font face="georgia">Estudiante</font>:</td>
        <td width="32%"><input class="form-control" type="text" style="text-align:center;" name="nom_estu" id="nom_estu" value="<?php echo $nom_estu?>" readonly></td>
        <td width="37%">Gestion:&nbsp;

          <select name="year" id="year">
           <option value="<?php echo $años=date('Y');?>">
              <?php 
            $años=date('Y');
            print ($años); 
            ?></option>
          </select>
          <b><?php echo "RECIBO Nro.: ".$num_recibo?></b>
        </td>
      </tr>
      <tr>
        <td height="60">Curso:</td>
        <td><input class="form-control" type="text" style="text-align:center" name="curso" id="curso" value="<?php echo $i[9]?>" readonly></td>
        <!--aqui se ponde la fecha actual extraida del sistema utilizando un javascript-->
        <td><h4 style="text-align:center; text-align:start">Cochabamba, <script>var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
document.write(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " del " + f.getFullYear());</script><!--fin del script--></h4></td>
      </tr>
      <tr>
        <td height="60">Código estudiante</td>
        <td width="32%"><input class="form-control" type="text" style="text-align:center;" name="cod_estu" id="cod_estu" value="<?php echo $i[20]?>" readonly></td>
      </tr>
      
    </table>
    <!--fin de la 1RA tabla-->
    <br>
    <div class="row">
    <div class="col-md-5">
    <!--2DA tabla donde se agregan cobros-->
      <table class="table" border="0" style="border-color:#eca9a7;">
        <tr>
          <td width="19%" bgcolor="#FFFF66" style="text-align: center;"><font face="georgia">Cantidad</font></td>
          <td width="19%" bgcolor="#FFFF66" style="text-align: center;"><font face="georgia">Concepto</font></td>
          
          <td width="19%" bgcolor="#FFFF66" style="text-align: center;"><font face="georgia">Importe </font></td>

        </tr>
        <tr>
        <table style="border-color:#eca9a7;" border="0">
        &nbsp;&nbsp;
            <tr>
                <td align="center"><input class="form-control" type="number" name="cantidad" id="cantidad" value="1" style=" text-align:center; width:70px; height:auto" readonly>
                </td>
                <td><textarea  class="color-info form-control" name="concepto" id="concepto" cols="25" rows="2" style="background-color:#def0de; width:300px; resize:none;" required></textarea></td>
                
                <td> <input  class="form-control" type="number" id="importe" name="importe"  style="text-align:center; width:90px; height:auto" size="14" required>   </td>

            </tr>
        </table>  
          
          
          <td align="center">
          
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
            <td>
            <center>
            <a href="#" class="btn btn-success" onClick="agregar();">
            <span class="glyphicon glyphicon-plus"></span>
            Agregar
            </a>
            </center>
            </td>
            <td>&nbsp;</td>
        </tr>
        <td>Tipo de pago:</td>
        <td>
        <br><br>
      <select class="form-control" style="text-align:center;  height:auto;background-color:darkslategrey; color:white" name="tipo_pago" id="tipo_pago" required>
           <option value="">Ninguno</option>
           <option value="BMS">BMS</option>
           <option value="BCP">BCP</option>
           <option value="EFECTIVO">EFECTIVO</option>
          </select>
      </td>
      </table>
       <!--4TA tabla donde se halla observaciones-->
      <table style="border-color:#eca9a7;" border="0">
      <br><br>
        <tr>
          <td>Nota/Observaciones&nbsp;</td>
            <td><textarea  class="color-info form-control" name="desc" id="desc" cols="25" rows="3" style="background-color:#def0de;"></textarea></td>
        </tr>
      </table>
      
      </div>
      
      <div class="col-md-7">
    <!--3RA tabla donde se acumulan los cobros-->
      <table id="tabla_acumuladora" name="tabla_acumuladora" width="300" class="table table-hover table-striped" border="0" style="border-color:#eca9a7;">
        <tr>
            <th width="23%" bgcolor="#FFFF66"  style="text-align: center;"><font face="georgia">Cantidad</font></th> 
          <th width="23%" bgcolor="#FFFF66"  style="text-align: center;"><font face="georgia">Concepto</font></th>
          <th width="19%" bgcolor="#FFFF66" style="text-align: center;"><font face="georgia">Importe </font></th>
          <th width="39%" bgcolor="#FFFF66"  style="text-align: center;"><font face="georgia">Total</font></th>
        </tr>
        <!--FILA -->
      </table>
      <table  width="300" class="table table-hover table-striped" border="0" style="border-color:#eca9a7;">
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Importe total = </td>
            <td id="importe_t" name="importe_t"></td>
        </tr>
      </table>
      
      </div>
      </div>  
      </div>
      <center>
      <button class='btn btn-primary'>
      <span class="glyphicon glyphicon-usd"></span>
      Cobrar
      </button>
      </center>
      </form>
      <div class="panel panel-primary" style="background-color:transparent;">
      <h2 align="center"><font Color='RED'>Extracto de otros pagos</font></h2>
      <!--5TA tabla donde se da el estracto de pago de cada estudiante-->
      <table class="table table-hover" width="873" align="center">
        <tr class="amarillo_reporte">
          <td class="danger">Nro. de recibo</td>
          <td class="danger">Concepto</td>
          <td class="danger">Fecha y hora del pago</td>
          <td class="danger">Cajero</td>
          <td class="danger" width="40">Importe cobrado</td>
          <td class="danger">Descripcion</td>
          <td class="danger">Tipo de pago</td>
        </tr>
        <?php
      
        $q=mysqli_query($conectador,"select * from otros_pagos where rude_estu='$dato';");
      while($r=mysqli_fetch_array($q)){
      ?>
        <tr>
          <td><?php echo "$r[11]"?></td> 
          <td><?php echo "$r[5]"?></td>
          <td><?php echo "$r[7]"?></td>
          <td><?php echo "$r[8]"?></td>
          <td><?php echo "$r[9]"?></td>
          <td><?php echo "$r[10]"?></td>
          <td><?php echo "$r[14]"?></td>
        </tr>
        <?php
      }
      ?>
      </table>

    </div>


  <p>&nbsp;</p>

  <script type="text/javascript">      
            var c=0;
            var importe_total=0;         
            var total=0;
            var importe;
                function ShowSelected() 
                {
                  var cant=document.getElementById("cantidad").value;
                  
                  var importe=document.getElementById("importe").value;
                  var total=cant*importe;
                  document.getElementById("imr").value=total;
                return total;
                }
  
                function agregar()
                {
                
                //obtener los valores de los input      
                
                var concep=document.getElementById('concepto').value
                imp=document.getElementById('importe').value
                
                
                var fila='<tr id="fila'+c+'">'
               +'<td align="center">1</td>'
               +'<td><input class="form-control" type="text" name="meses[]" value="'+concep+'" style="background-color: white;" readonly></td>'
               +'<td><input style="text-align:center;" class="form-control" type="text" name="importe_m[]" value="'+imp+'" style="background-color: white;" readonly></td>'
               +'<td><button id="fila'+c+'" class="btn btn-danger" onclick="quitar(this.id);"><span class="glyphicon glyphicon-trash"></span></button></td>'
               +'</tr>';
      
                $('#tabla_acumuladora').append(fila);
                
                c=c+1;
                actualizar_total();
              }
              function quitar(d)
              {
                c=c-1;
                $("#"+d).remove();
                actualizar_total();
              }
              function actualizar_total()
              {
                //total=tota+imp;  
                total=c*imp;
                importe_t.innerHTML = total;
              }
          
            
</script>

</div>

<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>