<?php
  include "../../conexion.php";
  error_reporting(E_ALL);
 ini_set('display_errors', true);

  $res=$_GET["id"];
  
    $i=mysqli_fetch_array(mysqli_query($conectador,"select * from estudiante where rude='$res';"));
    $c=mysqli_fetch_array(mysqli_query($conectador,"select * from cursos;"));


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro_Estudiante</title>
  <META http-equiv=Content-Type content="text/html; charset=ISO-8859-1">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<div class="container">
<header style="background-color: #8B0000" >
  <div class="container">
    <img src="../../imagenes/logo.jpg" align="right" width="90" height="70">
    <h2><font color="WHITE"><u>Ficha Estudiante</u></font></h2>

  </div>
</header>
<style>.form-control:focus {
  border-color: #6265e4 !important;
  box-shadow: 0 0 5px rgba(98, 101, 228, 1) !important;
}</style>    
<form id="form1" name="form1" method="post" action="pro_reg_estudiante_medico2.php" class="form-horizontal">
      <br>
      <div class="form-group">      


        <label for="nom_estu" class="control-label col-md-2">Nombre del estudiante:</label>
        <div class="col-md-3"><input type="text" name="nom_estu" id="nom_estu" class="form-control" onKeyUp="this.value = this.value.toUpperCase();"  required/></div>
        
        <div cass="col-md-1"></div>
      <label for="tel_padre" class="control-label col-md-3">Peso(Kg.):</label>
      <div class="col-md-3"><input type="number" name="peso" id="tel_padre"  class="form-control" placeholder="Nro Telefono o Celular"value='0'/></div>
      </div>
      <div class="form-group">      
      <label for="ap_pat" class="control-label col-md-2">Apellido paterno:</label>
      <div class="col-md-3"><input type="text" name="ap_pat" id="ap_pat"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();"  required/></div>
      <div cass="col-md-1"></div>
      <label for="tel_padre" class="control-label col-md-3">Estatura(Cm.):</label>
      <div class="col-md-3"><input type="number" name="estatura" id="tel_padre"  class="form-control" placeholder="Nro Telefono o Celular"value='0'/></div>
      </div>
      
      <div class="form-group">       
      <label for="ap_mat" class="control-label col-md-2">Apellido materno:</label>
      <div class="col-md-3"><input type="text" name="ap_mat" id="ap_mat"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" " required/></div>
      <div cass="col-md-1"></div>
      <label for="sexo" class="control-label col-md-3">¿Tiene seguro médico?</label>
      <div class="col-md-2"><select name="tiene_s" id="sexo" class="form-control">
              <option>No</option>
              <option>Si</option>
              
      </select>
      </div>
      </div>
      
      <div class="form-group">  
      <label for="sexo" class="control-label col-md-2">Curso: </label>
      <div class="col-md-3"><select name="curso" id="lugar_nac" class="form-control">
              <option>Seleccionar</option>
              <option>Pre kinder AMARILLO</option>
              <option>Pre kinder AZUL</option>
              <option>Kinder AMARILLO</option>
              <option>Kinder AZUL</option>
              <option>Kinder BLANCO</option>
              <option>1° de primaria AMARILLOL</option>
              <option>1° de primaria AZUL</option>
              <option>1° de primaria BLANCO</option>
              <option>2° de primaria AMARILLO</option>
              <option>2° de primaria AZUL</option>
              <option>2° de primaria BLANCO</option>
              
              <option>3° de primaria AMARILLO</option>
              <option>3° de primaria AZUL</option>
              <option>3° de primaria BLANCO</option>
              
              <option>4° de primaria AMARILLO</option>
              <option>4° de primaria AZUL</option>
              <option>4° de primaria BLANCO</option>
              
              <option>5° de primaria AMARILLO</option>
              <option>5° de primaria AZUL</option>
              <option>5° de primaria BLANCO</option>
              
              <option>6° de primaria AMARILLO</option>
              <option>6° de primaria AZUL</option>
              <option>6° de primaria BLANCO</option>
              
              <option>1° de secundaria AMARILLO</option>
              <option>1° de secundaria AZUL</option>
              <option>1° de secundaria BLANCO</option>
              
              <option>2° de secundaria AMARILLO</option>
              <option>2° de secundaria AZUL</option>
              <option>2° de secundaria BLANCO</option>
              
              <option>3° de secundaria AMARILLO</option>
              <option>3° de secundaria AZUL</option>
              <option>3° de secundaria BLANCO</option>
              
              <option>4° de secundaria AMARILLO</option>
              <option>4° de secundaria AZUL</option>
              <option>4° de secundaria BLANCO</option>
              
              <option>5° de secundaria AMARILLO</option>
              <option>5° de secundaria AZUL</option>
              <option>5° de secundaria BLANCO</option>
              
              <option>6° de secundaria AMARILLO</option>
              <option>6° de secundaria AZUL</option>
              <option>6° de secundaria BLANCO</option>
              
              
              
      </select>
      </div>

</div>

      <div class="form-group">       
      <label for="sexo" class="control-label col-md-2">Lugar de nacimiento: </label>
      <div class="col-md-3"><select name="lugar_nac" id="lugar_nac" class="form-control">
              <option>Cochabamba</option>
              <option>La Paz</option>
              <option>Santa Cruz</option>
              <option>Oruro</option>
              <option>Beni</option>
              <option>Sucre</option>
              <option>Pando</option>
              <option>Potosi</option>
              <option>Tarija</option>
              
      </select>
      </div>
      
      <label for="ap_pat" class="control-label col-md-3">¿Dónde está asegurado?</label>
      <div cass="col-md-1"></div>
      <div class="col-md-3"><input type="text" name="seguro" id="ap_pat"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="" required value='0'/></div>
      </div>
      

      <div class="form-group">          
      <label for="fecha_nac" class="control-label col-md-2">Fecha de nacimiento:</label>
      <div class="col-md-3"><input type="date" name="fecha_nac" id="fecha_nac"  class="form-control"  value="<?php echo $i['nacimiento'];?>"required /></div>
      
      <div cass="col-md-1"></div>
      <label for="sexo" class="control-label col-md-3">Grupo sanguíneo: </label>
      <div class="col-md-2"><select name="sangre" id="lugar_nac" class="form-control" required>
              <option>Seleccionar</option>
              <option>A+</option>
              <option>O+</option>
              <option>B+</option>
              <option>AB+</option>
              <option>A-</option>
              <option>O-</option>
              <option>B-</option>
              <option>AB-</option>
              
              
      </select>
      </div>
      
</div>
      <div class="form-group">    
      <label for="tel" class="control-label col-md-2">Telefono padre:</label>
      <div class="col-md-3"><input type="number" name="tel_p" id="tel"  class="form-control" value="<?php echo $i['telefono_padre'];?>" required/></div>
      <div cass="col-md-1"></div>
      <label for="sexo" class="control-label col-md-3">¿Tiene alguna alergia?</label>
      <div class="col-md-2"><select name="tiene_al" id="sexo" class="form-control">
              <option>No</option>
              <option>Si</option>
              
      </select>
      </div>
      </div>




      <div class="form-group">    
      <label for="tel" class="control-label col-md-2">Telefono madre:</label>
      <div class="col-md-3"><input type="number" name="tel_m" id="tel"  class="form-control" value="<?php echo $i['telefono_madre'];?>" required/></div>
      <label for="ap_pat" class="control-label col-md-3">¿A qué tiene alergia?</label>
      <div cass="col-md-1"></div>
      <div class="col-md-3"><input type="text" name="alergia" id="ap_pat"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="" /></div>
      </div>


      <div class="form-group">    
      <label for="tel" class="control-label col-md-2">Telefono tutor:</label>
      <div class="col-md-3"><input type="number" name="tel_t" id="tel"  class="form-control" value="<?php echo $i['telefono_tutor'];?>" required/></div>
      <div cass="col-md-1"></div>
      <label for="sexo" class="control-label col-md-3">¿Recibe algun tratamiento?</label>
      <div class="col-md-2"><select name="recibe_trat" id="sexo" class="form-control">
              <option>No</option>
              <option>Si</option>
              
      </select>
      </div>
      </div>


      <div class="form-group">    
      <label for="sexo" class="control-label col-md-2">En caso de emergencia a quién llamar</label>
      <div class="col-md-2"><select name="llamar" id="sexo" class="form-control">
              <option>Padre</option>
              <option>Madre</option>
              <option>Tutor</option>
      </select>
      </div>
      <div cass="col-md-1"></div>
      <label for="ap_pat" class="control-label col-md-3">¿Qué tratamiento recibe?</label>
      
      <div class="col-md-4"><input type="text" name="tratamiento" id="ap_pat"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" /></div>
      
      </div>

      <div class="row">
        <div class="col-md-12">
          <label class="control-label col-md-12"><center><h2> Anamnesis en revisión </font></h2></center></label>
        </div>
      </div>
      <div class="form-group">      
        <label for="nom_estu" class="control-label col-md-2">Antecedentes patológicos personales:</label>
        <div class="col-md-3"><input type="text" name="app" id="nom_estu" class="form-control" onKeyUp="this.value = this.value.toUpperCase();" value='0' required/></div>
        
        <div cass="col-md-1"></div>
      <label for="tel_padre" class="control-label col-md-3">Antecedentes patológicos familiares:</label>
      <div class="col-md-3"><input type="text" name="apf" id="tel_padre"  class="form-control" value='0'/></div>
      </div>
      <div class="form-group">      
        <label for="nom_estu" class="control-label col-md-2">Fracturas que ha sufrido:</label>
        <div class="col-md-3"><input type="text" name="fracturas" id="nom_estu" class="form-control" onKeyUp="this.value = this.value.toUpperCase();" value='0' required/></div>
        
        <div cass="col-md-1"></div>
      <label for="tel_padre" class="control-label col-md-3">Cirugías que ha tenido:</label>
      <div class="col-md-3"><input type="text" name="cirugias" id="tel_padre"  class="form-control" placeholder="" value='0'/></div>
      </div>
      <div cass="col-md-1"></div>
      <label for="tel_padre" class="control-label col-md-2 ">Enfermedad de Base:</label>
      <div class="col-md-3"><input type="text" name="base" id="tel_padre"  class="form-control" placeholder="" value='0'/></div>
      
      </div>
</br>
      <script>
          function comprobarRude(){
            clave1=document.getElementById("cod_rude").value;
            if(clave1==""){
                alert("El campo RUDE y CODIGO ESTUDIANTE no puede estar vacio");             
            }
          }
        </script>
      
      <div class="form-group">
        <div class="col-md-5 col-md-offset-5">
          <button type="submit" name="button" id="button" class="btn btn-primary">
           Guardar 
          <b class="glyphicon glyphicon-floppy-disk"></b>
          </button>
        </div>
      </div>
    

</form>
  </div>
  <script></script>    
<script src="js/query.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>