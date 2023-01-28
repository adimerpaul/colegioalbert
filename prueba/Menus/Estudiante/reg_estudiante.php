<?php 

function genera_codigo ($longitud) {
  $caracteres = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z","a","b","c","d","e","f","g","h","i","j","k","l","n","s","t","u","v","w","x","y","z");
  $codigo = '';

  for ($i = 1; $i <= $longitud; $i++) {
      $codigo .= $caracteres[numero_aleatorio(0, 56)];
  }

  return $codigo;
}

function numero_aleatorio ($ninicial, $nfinal) {
  $numero = rand($ninicial, $nfinal);

  return $numero;
}
$codig=genera_codigo(6);


$id_cajero=$_GET["id"];
require "../../conexion.php";
$qu="select Password from estudiante;";


$res = mysqli_query($conectador, $qu);


while ($row=$res->fetch_assoc()) {
  

  if($codig==$row['Password'] ){
       echo "<p style:'color:red'>Ya existe el código por favor recargue la pagina posible error si no realiza la accion requerida</p> ";
        genera_codigo(6);

}
else{
  //echo "<p style:'color:red'>El codigo es distinto </p>".$row['Password']." = " .$codig;
 
  
}
}



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
    <h2><font color="WHITE"><u>REGISTRO ESTUDIANTES</u></font></h2>

  </div>
</header>
<style>.form-control:focus {
  border-color: #6265e4 !important;
  box-shadow: 0 0 5px rgba(98, 101, 228, 1) !important;
}</style>    
<form id="form1" name="form1" method="post" action="pro_reg_estudiante.php" class="form-horizontal">
      <br>
      <div class="form-group">      
      <label for="nom_estu" class="control-label col-md-2">Nombre del estudiante:</label>
      <div class="col-md-3"><input type="text" name="nom_estu" id="nom_estu" class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Nombres del Estudiante" required/></div>
    
      
      <label for="corre_es" class="control-label col-md-3">Correo estudiante:</label>
      <div class="col-md-3"><input type="email" name="corre_es" id="corre_es"  class="form-control" placeholder="@ Correo estudiante" required/></div>
     
    </div>
      
      <div class="form-group">      
      <label for="ap_pat" class="control-label col-md-2">Apellido paterno:</label>
      <div class="col-md-3"><input type="text" name="ap_pat" id="ap_pat"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Apellido Paterno" required/></div>
                  <div cass="col-md-1"></div>
      <label for="ap_mat" class="control-label col-md-3">Apellido materno:</label>
      <div class="col-md-3"><input type="text" name="ap_mat" id="ap_mat"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Apellido Materno" required/></div>
      </div>

      <div class="form-group">          
      <label for="fecha_nac" class="control-label col-md-2">Fecha de nacimiento:</label>
      <div class="col-md-3"><input type="date" name="fecha_nac" id="fecha_nac"  class="form-control"  placeholder="A�0�9o-mes-dia"required /></div>
                  <div cass="col-md-1"></div>
      <label for="ci_est" class="control-label col-md-3">C.I. :</label>
       <div class="col-md-3"><input type="number" name="ci_est" id="ci_est"  class="form-control" placeholder="# Carnet del estudiante" required/></div>
      </div>

      <div class="form-group">      
      <label for="dir_estu" class="control-label col-md-2">Direccion:</label>
      <div class="col-md-3"><input type="text" name="dir_estu" id="dir_estu2"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Direccion" required/></div>
                  <div cass="col-md-1"></div>
      <label for="tel" class="control-label col-md-3">Telefono:</label>
      <div class="col-md-3"><input type="number" name="tel" id="tel"  class="form-control" placeholder="Nro Telefono o Celular" required/></div>
     
    </div>
      

      <div class="form-group">    
      <label for="sexo" class="control-label col-md-2">Sexo:</label>
      <div class="col-md-2"><select name="sexo" id="sexo" class="form-control" required>
              <option>Seleccionar</option>
              <option>Masculino</option>
              <option>Femenino</option>
      </select>
      </div>
                  <div cass="col-md-1"></div>
      <label for="curso" class="control-label col-md-4">Curso:</label>
      <div class="col-md-2"><select name="curso" id="curso" class="form-control">
        <?php
            include "../../conexion.php";
            $resul=mysqli_query($conectador,"select * from cursos");
            while($f=mysqli_fetch_array($resul))
            {
              echo "<option>$f[1]</option>";
            }
        ?>
      </select></div>
      </div>
      <div class="form-group"> 
      
      <label for="cod_rude" class="control-label col-md-2">Codigo RUDE:</label>
      <div class="col-md-2"><input type="text" name="cod_rude" id="cod_rude"  class="form-control" placeholder="Codigo/Numero Rude" required/></div>
                      <div cass="col-md-1"></div>
      </div>
      <div class="form-group">  
        
      <label for="cod_Estu" class="control-label col-md-2">Codigo estudiante:</label>
     
      <div class="col-md-2"><input type="text" name="cod_estu" id="cod_estu"  class="form-control" placeholder="Codigo estudiante" value="<?php echo $codig;?>"/></div>
                      <div cass="col-md-1"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label class="control-label col-md-12"><center><h2><font face="ALGERIAN" color="GRAY"> DATOS PATERNOS </font></h2></center></label>
        </div>
      </div>

      <div class="form-group">    
      <label for="nom_pat2" class="control-label col-md-3">Nombre completo del padre:</label>
       <div class="col-md-3"> <input type="text" name="nom_pat" id="nom_pat" class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Nombres y apellidos del padre" value='.'></div>
                      <div cass="col-md-1"></div>
      <label for="tel_padre" class="control-label col-md-3">Telefono:</label>
      <div class="col-md-3"><input type="number" name="tel_padre" id="tel_padre"  class="form-control" placeholder="Nro Telefono o Celular"value='0'/></div>
      </div>

      <div class="form-group">      
      <label for="ci_pat2" class="control-label col-md-3">CI:</label>
       <div class="col-md-3"> <input type="number" name="ci_pat" id="ci_pat2"  class="form-control" placeholder="# Carnet del padre"value='0'/></div>
              <div class="col-md-1"></div>
      </div>
      <div class="form-group">      
      <label for="corre_pad" class="control-label col-md-3">Correo padre:</label>
      <div class="col-md-3"><input type="text" name="corre_pad" id="corre_pad"  class="form-control" placeholder="@ Correo Padre"value='0'/></div>
      <label for="ocup_pa" class="control-label col-md-3">Ocupacion Padre:</label> 
      <div class="col-md-3"><input type="text" name="ocup_pa" id="ocup_pa"  class="form-control" placeholder="Ocupacion Padre"value='.'/></div>
      </div>
      <div class="form-group">      
      <label for="nom_mat2" class="control-label col-md-3">Nombre completo de la madre:</label>
      <div class="col-md-3"><input type="text" name="nom_mat" id="nom_mat2"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Nombres y apellidos de la madre" value='.'/></div>
      <label for="tel_madre" class="control-label col-md-3">Telefono:</label> 
      <div class="col-md-3"><input type="number" name="tel_madre" id="tel_madre"  class="form-control" placeholder="Nro de Telefono o Celular" value='0'/></div>
      </div>
      <div class="form-group">      
      <label for="ci_mat2" class="control-label col-md-3">CI: </label>
      <div class="col-md-3"><input type="number" name="ci_mat" id="ci_mat2"  class="form-control" placeholder="# Carnet de la Madre" value='0'/></div>
      </div>
      <div class="form-group">      
      <label for="corre_mad" class="control-label col-md-3">Correo madre:</label>
      <div class="col-md-3"><input type="text" name="corre_mad" id="corre_mad"  class="form-control"  placeholder="@ Correo Madre"value='0'/></div>
      <label for="ocup_ma" class="control-label col-md-3">Ocupacion Madre:</label> 
      <div class="col-md-3"><input type="text" name="ocup_ma" id="ocup_ma"  class="form-control" placeholder="Ocupacion Madre"value='.'/></div>
      </div>

      <div class="form-group">      
      <label for="nom_tuto" class="control-label col-md-3">Nombre completo tutor: </label>
      <div class="col-md-3"><input type="text" name="nom_tuto" id="nom_tuto"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Nombres y apellidos del tutor"value='0'/></div>
      <label for="tel_tuto" class="control-label col-md-3">Telefono:</label>
      <div class="col-md-3"><input type="number" name="tel_tuto" id="tel_tuto" class="form-control" placeholder="Nro. Telefono/Celular del tutor"value='0'/></div>
      </div>
      <div class="form-group">      
      <label for="ci_tuto" class="control-label col-md-3">CI:</label>
      <div class="col-md-3"><input type="number" name="ci_tuto" id="ci_tuto"  class="form-control"placeholder="# Carnet del Tutor"value='0'></div>
                      <div cass="col-md-1"></div>
                      <label for="corre_tu" class="control-label col-md-3">Correo Tutor:</label>
      <div class="col-md-3"><input type="text" name="corre_tu" id="corre_tu"  class="form-control" placeholder="@ Correo Padre"value='0'/></div>
                    </div>
       
                    <div class="form-group">      
      <B><P class="control-label col-md-6">DATOS PARA FACTURACION:</P></B></br><br>
      <label for="nom_factur" class="control-label col-md-6">Nombre para Factura:</label>
      <div class="col-md-4"><input type="text"  style="border: solid red 1px;" name="nom_factur" id="nom_factur"  class="form-control" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Nombre para factura" required/></div>
      <label for="ci_factur" class="control-label col-md-6">Número de facturación:</label> 
      <div class="col-md-4"><input type="number"  style="border: solid red 1px;" name="ci_factur" id="ci_factur"  class="form-control" placeholder="Número para factura" required/></div>
      
      <label for="tipo" class="control-label col-md-6">Tipo de documento de facturación</label>
      <div class="col-md-4"><select name="tipo" id="tipo" class="form-control" style="border: solid red 1px;">
              <option>Ninguno</option>
              <option>NIT</option>
              <option>Cedula de identidad</option>
      </select>
      <br/><br/><br/>.
      </div> </div>
   
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
          REGISTRAR
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