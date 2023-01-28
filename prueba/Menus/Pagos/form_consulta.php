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
$i=mysqli_fetch_array(mysqli_query($conectador,"select * from ficha_medica where id_ficha_estudiante='$dato';"));
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
$nom_estu=$i[1]." ".$i[2]." ".$i[3];

 
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
<div class="form-group">  
      <label for="usuario" class="control-label col-md-4"><font color="BLUE">Doctor(a): </font></label>
      <div class="col-md-3"><input class="form-control" type="text" style="text-align:center" name="usuario" id="usuario" value="<?php echo $i2[0]." ".$i2[1]." ".$i2[2]?>" readonly>
      </div>
      <div class="col-md-5"></div>
  </div>
<form  class="form-horizontal" method="post"  name="form1" action="pro_reg_medico.php?id=<?php echo $dato;?>"onSubmit="onEnviar()">
  
  <div class="form-group">  
      <!--<label for="usuario" class="control-label col-md-4"><font color="BLUE">Cajero(a): </font></label>
      <div class="col-md-3"><input class="form-control" type="text" style="text-align:center" name="usuario" id="usuario" value="<?php //echo $i2[0]." ".$i2[1]." ".$i2[2]?>" readonly>
      </div>-->
      <div class="col-md-5"></div>
  </div>
        <h2> REGISTRO</h2>
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
          <!--<b><?php //echo "RECIBO Nro.: ".$num_recibo?></b>-->
        </td>
      </tr>
      <tr>
        <td height="60">Curso:</td>
        <td><input class="form-control" type="text" style="text-align:center" name="curso" id="curso" value="<?php echo $i['curso']?>" readonly></td>
        <!--aqui se ponde la fecha actual extraida del sistema utilizando un javascript-->
        <td><h4 style="text-align:center; text-align:start">Cochabamba, <script>var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
document.write(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " del " + f.getFullYear());</script><!--fin del script--></h4></td>
      </tr>
      <tr>
        <td height="60">Llamar a:</td>
        <td width="32%"><input class="form-control" type="text" style="text-align:center;" name="cod_estu" id="cod_estu" value="<?php echo $i['llamar_a']?>" readonly></td>
      </tr>
      
    </table>
    <!--fin de la 1RA tabla-->
    <br>
    <div class="row">
    <div class="col-md-5">
    <!--2DA tabla donde se agregan cobros-->
      
          
          
          <td align="center">
          
          </td>
        </tr>
        
        
      </table>
       <!--4TA tabla donde se halla observaciones-->
      
      
      </div>
      
      <div class="col-md-12">
    <!--3RA tabla donde se acumulan los cobros-->
      
      
      </div>
      </div>  
      </div>



      <style>.form-control:focus {
  border-color: #6265e4 !important;
  box-shadow: 0 0 5px rgba(98, 101, 228, 1) !important;
}</style>    
<form id="form1" name="form1" method="post" action="pro_reg_co.php?id=<?php echo $dato;?>" class="form-horizontal">
      <br>
      <h3> Signos vitales </h3> 
      
      <div class="form-group">      
        <label for="nom_estu" class="control-label col-md-2">PA:</label>
        <div class="col-md-3"><input type="text" name="pa" id="nom_estu" class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Presión Arterial" value='0'required/></div>
        
        <div cass="col-md-1"></div>
      <label for="tel_padre" class="control-label col-md-3">T°</label>
      <div class="col-md-3"><input type="text" name="temperatura"  class="form-control" placeholder="Temperatura" value='0' required/></div>
      </div>
      <div class="form-group">      
      <label for="ap_pat" class="control-label col-md-2">FC:</label>
      <div class="col-md-3"><input type="text" name="fc" id="ap_pat"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Frecuencia Cardíaca" value='0' required/></div>
      <div cass="col-md-1"></div>
      <label for="tel_padre" class="control-label col-md-3">Sat 02:</label>
      <div class="col-md-3"><input type="text" name="saturacion" id="tel_padre"  class="form-control" placeholder="Saturación de oxígeno" value='0' required/></div>
      </div>
      
      <div class="form-group">       
      <label for="ap_mat" class="control-label col-md-2">FR</label>
      <div class="col-md-3"><input type="text" name="fr"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Factor Respiración" value='0' required/></div>
      <div cass="col-md-1"></div>
      
      </div>

        
      <div class="form-group">       
      <label for="ap_mat" class="control-label col-md-2"><h3>Subjetivo</h3></label>
      <div class="col-md-3">
          <textarea  class="color-info form-control" name="subjetivo"  class="form-control" required> 
          </textarea>
      </div>

      <div class="form-group">       
      <label for="ap_mat" class="control-label col-md-3"><h3>Objetivo</h3></label>
      <div class="col-md-3"><textarea  class="color-info form-control" name="objetivo"  class="form-control" required> </textarea>
      
      </div>
      </div>
      <div class="form-group">       
      <label for="ap_mat" class="control-label col-md-2"><h3>Análisis</h3></label>
      <div class="col-md-3"><textarea  class="color-info form-control" name="analisis"  class="form-control" required> </textarea>
      </div>

      <div class="form-group">       
      <label for="ap_mat" class="control-label col-md-3"><h3>Plan</h3></label>
      <div class="col-md-3"><textarea  class="color-info form-control" name="plan"  class="form-control" required > </textarea>
      </div>
      </div>
      

</br>

</form>

      <center>
      <button type="submit" name="button" id="button" class="btn btn-primary">
      <span class="glyphicon glyphicon-save-file"></span>
     
      </br>
      Registrar incidencia
      </button>
      <input type="text" hidden name="usuario" id="usuario" value="<?php echo $i2[0]." ".$i2[1]." ".$i2[2]?>" >
      <a href="../Estudiante/reporte_medico.php?id=<?php echo $i[0];?>&nom=<?php echo $i2[0];?>&apd=<?php echo $i2[1];?>&amd=<?php echo $i2[2];?>" target="_blank" class="btn btn-success"   name="button" style=" margin-top:0px ;height: 50px;">
                      <span class="glyphicon glyphicon-save-file"> </span></br> Descargar historial de incidencias
                      </a> 
      
      </br>
      </center>
</form>
      <div class="panel panel-primary" style="background-color:transparent;">
      <h2 align="center"><font Color='RED'>Historial médico</font></h2>
      <!--5TA tabla donde se da el estracto de pago de cada estudiante-->
      <table class="table table-hover" width="873" align="center">
        <tr class="amarillo_reporte">
          <td class="danger">Fecha y hora de consulta</td>
          <td class="danger">Doctor/a</td>
          <td class="danger">PA</td>
          <td class="danger">FC</td>
          <td class="danger">FR</td>
          <td class="danger">T°</td>
          <td class="danger">Sat O2</td>
          <td class="danger">Subjetivo</td>
          <td class="danger">Objetivo</td>
          <td class="danger">Analisis</td>
          <td class="danger">Plan</td>
        </tr>
        <?php
      
        $q=mysqli_query($conectador,"select * from registro_medico where id_estudiante='$dato';");
      while($r=mysqli_fetch_array($q)){
      ?>
        <tr>
          
          <td><?php echo $r['fecha']?></td>
          <td><?php echo $i2[0]." ".$i2[1]." ".$i2[2]?></td>
          <td><?php echo $r['pa']?></td>
          <td><?php echo $r['fc']?></td>
          <td><?php echo $r['fr']?></td>
          <td><?php echo $r['temp']?></td>
          <td><?php echo $r['saturacion']?></td>
          <td><?php echo $r['subjetivo']?></td>
          <td><?php echo $r['objetivo']?></td>
          <td><?php echo $r['analisis']?></td>
          <td><?php echo $r['plan']?></td>
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