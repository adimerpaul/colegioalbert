<?php
            include "../../conexion.php";
            //obtencion del dato de referencia para la busqueda
            error_reporting(E_ALL ^ E_NOTICE);
            $dato2=$_POST["dato"];
            /*if($dato2==0)
              $dato2="Pre kinder AZUL";*/
            $cont=0;
            $id=$_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LISTAS DE TODOS LOS ESTUDIANTES</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css" class="rel">
</head>
<body>
<br>
<div class="container">

      <form name="form1" class="form-horizontal" method="POST" >
        
          <div class="form-group">
            <label for="dato" class="control-label col-md-4">Curso:</label>
            <div class="col-md-4">
            <div class="input-group">
              <select class="form-control" name="dato" id="dato">
                <option>Seleccionar</option>
                <option>Pre kinder AZUL</option>
                <option>Pre kinder AMARILLO</option>
                <option>Pre kinder BLANCO</option>
                <option>Kinder AZUL</option>
                <option>Kinder BLANCO</option>
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
                <option>4° de primaria BLANCO</option>
                <option>5° de primaria AZUL</option>
                <option>5° de primaria AMARILLO</option>
                <option>5° de primaria BLANCO</option>
                <option>6° de primaria AZUL</option>
                <option>6° de primaria AMARILLO</option>
                <option>6° de primaria BLANCO</option>
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
                <option>4° de secundaria AMARILLO</option>
                <option>4° de secundaria BLANCO</option>
                <option>5° de secundaria AZUL</option>
                <option>5° de secundaria AMARILLO</option>
                <option>5° de secundaria BLANCO</option>
                <option>6° de secundaria AZUL</option>
                <option>6° de secundaria AMARILLO</option>
                <option>6° de secundaria BLANCO</option>
              </select> 
              <span class="input-group-btn">
              <button class="btn btn-danger" type="submit" >
                <span class="glyphicon glyphicon-search"><b>BUSCAR</b></span>
              </button> 
              </span>
            </div>
            </div>
            <div class="col-md-4">
              <img src="../../imagenes/logo.jpg" width="90" heiht="70" align="right">
            </div>
          
          </div>
      </form>  
  
  <div class="panel panel-primary">
    <div class="panel-heading">
      <b>LISTA TOTAL DE ESTUDIANTES (
      <label id="cantidad" name="cantidad"></label>
      )
      </b>
      <td>
          <!--<a href="guardar_asistencia.php?id=<?php echo $f[8]?>" class="btn btn-warning"  target="CUERPO"><span class="glyphicon glyphicon-edit"></span><p align=center; text-align: center;>Guardar Asistencia</p></a>-->
          
    </div>
    <div class="panel-body">
        <table class="table table-hover table-striped" align="center">
        <tr>
          
          <th>#</th>
          <th>Apellido paterno</th>
          <th>Apellido materno</th>
          <th>Nombre</th>
          <th>Curso</th>
          <th>RUDE</th>
          <th>Retraso</th>
          <th>Falta</th>
          <th>Asistido</th>
          <th>Licencia</th>
        </tr>
        <tr>
          <?php
            $res=mysqli_query($conectador,"select * from estudiante where curso='$dato2' order by apellido_pat;");
            while($f=mysqli_fetch_array($res))
            {
              if($f[19]==TRUE){
            	$cont++;
          ?>
            <td><?php echo " $cont ";?></td>
            <td><?php echo " $f[1] ";?></td>
            <td><?php echo " $f[2] ";?></td>
            <td><?php echo " $f[0] ";?></td>
            <td><?php echo " $f[9] ";?></td>
            <td><?php echo " $f[8] ";?></td>
            <!--<td>
                <form action="pro_retraso.php" method="post">
                    
                <input type="radio" id="retraso" name="estado" value="Retraso" />
            </td>
                <td>
                    <input type="radio" id="falta" name="estado" value="Falta" />
                </td>
                
                 <td>
                    <input type="radio" id="asistido" name="estado" value="Asistido" />
                </td>-->
            <!--<td><a href='actualizar_retraso.php?rude=<?php //echo $f[8];?>'><button type="submit" class="btn btn-danger"> R </button></a></td>  
            <td><button type="submit" class="btn btn-primary"> F </button></td> 
            <td><button type="submit" class="btn btn-success"> A </button></td> -->
                
            <div>
              <input type="hidden" value="<?php echo $f[0];?>" id="nombres<?php echo $f[8];?>">
              <input type="hidden" value="<?php echo $f[1];?>" id="paterno<?php echo $f[8];?>">
              <input type="hidden" value="<?php echo $f[2];?>" id="materno<?php echo $f[8];?>">
              <input type="hidden" value="<?php echo $f[3];?>" id="ci<?php echo $f[8];?>">
              <input type="hidden" value="<?php echo $f[4];?>" id="fecha<?php echo $f[8];?>">
              <input type="hidden" value="<?php echo $f[5];?>" id="direccion<?php echo $f[8];?>">
              <input type="hidden" value="<?php echo $f[6];?>" id="telefono<?php echo $f[8];?>">
              <input type="hidden" value="<?php echo $f[7];?>" id="sexo<?php echo $f[8];?>">
              <input type="hidden" value="<?php echo $f[8];?>" id="id<?php echo $f[8];?>"> <!--CODIGO RUDE-->
              <input type="hidden" value="<?php echo $f[9];?>" id="curso<?php echo $f[8];?>"> 
              <input type="hidden" value="<?php echo $f[10];?>" id="nom_pat<?php echo $f[8];?>"> <!--Nombre padre-->
              <input type="hidden" value="<?php echo $f[11];?>" id="ci_pat<?php echo $f[8];?>"> <!--CI padre-->
              <input type="hidden" value="<?php echo $f[12];?>" id="nom_mat<?php echo $f[8];?>"> <!--Nombre madre-->
              <input type="hidden" value="<?php echo $f[13];?>" id="ci_mat<?php echo $f[8];?>"> <!--CI Madre-->
              <input type="hidden" value="<?php echo $f[14];?>" id="nom_tutor<?php echo $f[8];?>"> <!--Nombre tutor-->
              <input type="hidden" value="<?php echo $f[15];?>" id="telf_pat<?php echo $f[8];?>"> <!--Telefono padre-->
              <input type="hidden" value="<?php echo $f[16];?>" id="telf_mat<?php echo $f[8];?>"> <!--Telefono madre-->
              <input type="hidden" value="<?php echo $f[17];?>" id="ci_tutor<?php echo $f[8];?>"><!--CI TUTOR-->
              <input type="hidden" value="<?php echo $f[18];?>" id="telf_tutor<?php echo $f[8];?>"> <!--TEelefono TUTOR-->
            </div>
            

            <td>
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#ver_estudiante" onclick="obtener_datos('<?php echo $f[8];?>')"><span class="glyphicon glyphicon-search"></span>Agregar</a>
            <?php
            include "Modal/verEstudiante.php";
            ?>
            </td>
            
            
       </tr>
            <?php
            }
          }
          
            mysqli_close($conectador);
            ?>
          <p text-alig_center;><button type="submit" class="btn btn-primary btn-lg">Guardar</button></p>
          <!--</form>-->
          <script type="text/javascript">
              var contador=<?php echo $cont; ?>;
              document.getElementById("cantidad").innerHTML=contador;
          </script>
       
      </table>
    </div>
  </div>
</div>

<script type="text/javascript">

    function obtener_datos(id){

      var nombres = $("#nombres"+id).val();

      var paterno = $("#paterno"+id).val();
      var materno = $("#materno"+id).val();
      var ci = $("#ci"+id).val();
      var fecha = $("#fecha"+id).val();
      var sexo = $("#sexo"+id).val();
      var telefono = $("#telefono"+id).val();
      var direccion = $("#direccion"+id).val();
      var rude = $("#id"+id).val();
      var curso = $("#curso"+id).val();
      var nom_pat = $("#nom_pat"+id).val();
      var ci_pat = $("#ci_pat"+id).val();
      var telf_pat = $("#telf_pat"+id).val();
      var nom_mat = $("#nom_mat"+id).val();
      var ci_mat = $("#ci_mat"+id).val();
      var telf_mat = $("#telf_mat"+id).val();
      var nom_tutor = $("#nom_tutor"+id).val();
      var ci_tutor = $("#ci_tutor"+id).val();
      var telf_tutor = $("#telf_tutor"+id).val();
      //dATOS PRIMARIOS
      $("#paso_nombre").val(nombres);
      $("#paso_paterno").val(paterno);
      $("#paso_materno").val(materno);
      $("#paso_ci").val(ci);
      $("#paso_fecha").val(fecha);
      $("#paso_sexo").val(sexo);
      $("#paso_telefono").val(telefono);
      $("#paso_direccion").val(direccion);
      $("#paso_rude").val(rude);
      $("#paso_curso").val(curso);
      //DATOS SECUNDARIOS
      $("#paso_nompat").val(nom_pat);
      $("#paso_cipat").val(ci_pat);
      $("#paso_telfpat").val(telf_pat);
      $("#paso_nommat").val(nom_mat);
      $("#paso_cimat").val(ci_mat);
      $("#paso_telfmat").val(telf_mat);
      $("#paso_numtutor").val(nom_tutor);
      $("#paso_citutor").val(ci_tutor);
      $("#paso_telftutor").val(telf_tutor);
      

    }
</script>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>