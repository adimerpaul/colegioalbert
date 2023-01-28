<?php
  include "../../conexion.php";
 error_reporting(E_ALL);
 ini_set('display_errors', true);

  $i=mysqli_fetch_array(mysqli_query($conectador,"select * from estudiante where rude='$res';"));
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META http-equiv=Content-Type content="text/html; charset=ISO-8859-1">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<title>Información de Estudiante</title>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<header style="background-color: #0C6E48" align="center">
  <div class="container">
  <img src="../../imagenes/logo.jpg" align="right" width="90" height="70">
  <h1><font color="white" face="consolas">Informacion del estudiante</font></h1>
  </div>
</header>
<br>
  <div class="container">
    <form id="form1" name="form1" method="post" action="" class="form-horizontal">
           <div class="form-group" align="center" style="float: left;">
                  <a href="impreso.php?num=<?php echo $res?>" target="_blank" class="btn btn-success"   name="button" style=" margin-top:10px ;height: 50px;">
                      <span class=""><i class="far fa-save"></i></span>Descargar Incripción
                      </a> 
            
            
                <a href="../../../index.html" target="_blank" class="btn btn-warning"   name="button" style=" margin-top:10px ;height: 50px;">
                      <span class=""><i class="far fa-save"></i></span>Salir
                      </a> 
                    </div>
     <div class="col-md-2"></div>

     <div class="form-group col-md-4">
      <?php
      if($i[7]=="Femenino")
      {
        echo"<img class='img-responsive' src='../../imagenes/estuFem.jpg'>";      
      }
      else
        echo"<img class='img-responsive' src='../../imagenes/estu.jpg'>";
      ?>
      <font face="georgia">
        <input type="text" class="form-control" id="completo" style="text-align: center; font-size: medium;" value="<?php echo $i[0]." ".$i[1]." ".$i[2]; ?>" readonly>
      </font>
     </div>
     <div class="col-md-6">
       <div class="form-group" >
        <label for="nom_estu" class="control-label col-md-4">Nombre del estudiante:</label>
        <div class="col-md-5">
          <input class="form-control" type="text" name="nom_estu" id="nom_estu" style="text-transform: uppercase;" value="<?php echo $i[0];?>" disabled=""/>
       </div>
       </div>
       
       <div class="form-group" >
        <label  for="ap_pat" class="control-label col-md-4">Apellido paterno: </label>
        <div class="col-md-4">
          <input class="form-control" disabled="" type="text" name="ap_pat" id="ap_pat" style="text-transform: uppercase;" value="<?php echo $i[1];?>"/>
        </div>
       </div>
       
       <div class="form-group" >
          <label for="ap_mat" class="control-label col-md-4">Apellido materno: </label>
          <div class="col-md-4">
            <input class="form-control" type="text" disabled name="ap_mat" id="ap_mat" style="text-transform: uppercase;" value="<?php echo $i[2];?>"/>
          </div>
        </div>
       
       <div class="form-group" >
          <label for="ci_est" class="control-label col-md-4">C.I. :</label>
          <div class="col-md-4">
            <input class="form-control" type="number" name="ci_est" id="ci_est" disabled="" value="<?php echo $i[3];?>"/>
          </div>
       </div>
       
       <div class="form-group" >
          <label for="fecha_nac2" class="control-label col-md-4">Fecha de nacimiento: </label>
          <div class="col-md-4">
            <input class="form-control" type="text" name="fecha_nac" id="fecha_nac2" disabled="" style="text-transform: uppercase;" value="<?php echo $i[4];?>"/>
          </div>
       </div>
       
       <div class="form-group" >
          <label for="dir_estu2" class="control-label col-md-4">Direccion: </label>
          <div class="col-md-5">
            <input class="form-control" type="text" name="dir_estu" id="dir_estu2" disabled="" style="text-transform: uppercase; width:350px; height:auto" value="<?php echo $i[5];?>"/>
          </div>
       </div>
       
       <div class="form-group" >
          <label for="tel3" class="control-label col-md-4">Telefono: </label>
          <div class="col-md-4">
            <input class="form-control" type="text" name="tel" id="tel3" disabled="" style="text-transform: uppercase;" value="<?php echo $i[6];?>"/>
          </div>
       </div>
       
       <div class="form-group" >
        <label for="sexo2" class="control-label col-md-4">Sexo: </label>
        <div class="col-md-3">
          <input type="text" class="form-control" id="sexo2" value="<?php echo $i[7];?>" disabled="">
        </div>
       </div>
       
       <div class="form-group" >
          <label for="cod_rude2" class="control-label col-md-4">Codigo RUDE: </label>
          <div class="col-md-4">
            <input class="form-control" type="text" name="cod_rude" id="cod_rude2" style="text-transform: uppercase;" value="<?php echo $i[8];?>" disabled/>
          </div>
       </div>
       
       <div class="form-group" >
        <label for="curso2" class="control-label col-md-4">Curso:</label>
        <div class="col-md-5">
          <input type="text" class="form-control" id="curso2"  style="width:225px; height:auto" value="<?php echo $i[9];?>" disabled>
        </div>
        
        </div>

     </div>
       <!--DATOS PATERNOS-->
   
       <div class="row">
         <div class="col-md-4" style="background-color: #e4e9f0;">
          <label for="nom_pat2" class="control-label">Nombre completo del padre:</label>
          <input class="form-control" type="text" name="nom_pat" id="nom_pat2" disabled="" style="text-transform: uppercase;" value="<?php echo $i[10];?>"/>
          

          <label for="ci_pat2" class="control-label">CI:</label>
          <input class="form-control" type="number" name="ci_pat" id="ci_pat2" disabled="" value="<?php echo $i[11];?>"/>
         
          <label for="tel_padre" class="control-label"> Telefono:</label>
          <input class="form-control" type="number" name="tel_padre" id="tel_padre" disabled="" value="<?php echo $i[15];?>"/>
        </div>
         
         <div class="col-md-4" style="background-color: #f5e1d4;">
          <label for="nom_mat2" class="control-label">Nombre completo de la madre:</label>
          <input class="form-control" type="text" name="nom_mat" id="nom_mat2" disabled="" style="text-transform: uppercase;" value="<?php echo $i[12];?>"/>
         
          <label for="ci_mat2" class="control-label">CI:</label>
          <input class="form-control" type="text" name="ci_mat" id="ci_mat2" disabled="" value="<?php echo $i[13];?>"/>
         
          <label for="tel_madre" class="control-label">Telefono:</label>
          <input class="form-control" type="text" name="tel_madre" id="tel_madre" disabled=""  value="<?php echo $i[16];?>"/>
         </div>
         
         <div class="col-md-4" style="background-color:#d8d8d8;">
          <label for="nom_tuto" class="control-label">Nombre completo del tutor:</label>
          <input class="form-control" type="text" name="nom_tuto" id="nom_tuto" disabled="" style="text-transform: uppercase;" value="<?php echo $i[14];?>"/>
         
          <label for="ci_tuto" class="control-label">CI:</label>
          <input class="form-control" type="text" name="ci_tuto" id="ci_tuto" disabled="" value="<?php echo $i[17];?>"/>
         
          <label for="tel_tuto" class="control-label">Telefono:</label>
          <input class="form-control" type="text" name="tel_tuto" id="tel_tuto" disabled="" style="text-transform: uppercase;" value="<?php echo $i[18];?>"/>
         </div>
       </div>
    </form>
    
  </div>
</body>
</html>