<?php
  include "../../conexion.php";
  $res=$_GET["id"];
  
  $i=mysqli_fetch_array(mysqli_query($conectador,"select * from ficha_medica where id_ficha_estudiante='$res';"));
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<title>Modificacion de Estudiante</title>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<div class="container">
<br>
<form id="form1" name="form1" method="post" action="pro_mod_estudiante_medico.php" class="form-horizontal">
  <div class="panel panel-success">
        <div class="panel-heading">
          <img src="../../imagenes/logo.jpg" align="right" width="70" height="55">
          <font face="calibri"><H4><b>MODIFICAR ESTUDIANTE</b></H4></font>
        </div>
        <div class="panel-body">
                   <div class="col-md-1"></div>
                   <div class="col-md-6">
                    <!--IMG-->
                    <div class="form-group" >
                    <input type="number" name="id"  value="<?php echo $i[0]; ?>" hidden="true">
                      <label for="nom_estu" class="control-label col-md-4">Nombre del estudiante:</label>
                      <div class="col-md-5">
                        <input class="form-control" type="text" name="nombre" id="nom_estu" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[1];?>"readonly/>
                     </div>
                     </div>
                     
                     <div class="form-group" >
                      <label  for="ap_pat" class="control-label col-md-4">Apellido paterno: </label>
                      <div class="col-md-5">
                        <input class="form-control" type="text" name="apellido_pat" id="ap_pat" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[2];?>"readonly/>
                      </div>
                     </div>
                     
                     <div class="form-group" >
                        <label for="ap_mat" class="control-label col-md-4">Apellido materno: </label>
                        <div class="col-md-5">
                          <input class="form-control" type="text" name="apellido_mat" id="ap_mat" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[3];?>"readonly/>
                        </div>
                      </div>
                     
                     <div class="form-group" >
                        <label for="ci_est" class="control-label col-md-4">Curso:</label>
                        <div class="col-md-5">
                          <input class="form-control" type="text" name="curso" id="ci_est" value="<?php echo $i[4];?>" readonly />
                        </div>
                     </div>
                     
                     <div class="form-group" >
                        <label for="fecha_nac2" class="control-label col-md-4">Fecha de nacimiento: </label>
                        <div class="col-md-5">
                          <input class="form-control" type="date" name="fecha_nac" id="fecha_nac2" value="<?php echo $i[6];?>"readonly/>
                        </div>
                     </div>
                     
                     <div class="form-group" >
                        <label for="sexo" class="control-label col-md-4">Lugar de nacimiento: </label>
                        <div class="col-md-5"><select name="lugar_nac" id="lugar_nac" class="form-control">
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
                     </div>
                     
                   
                    
                    <div class="form-group" >
                        <label for="dir_estu2" class="control-label col-md-4">Telefono Padre: </label>
                        <div class="col-md-5">
                          <input class="form-control" type="number" name="telf_p" id="dir_estu2"  value="<?php echo $i[7];?>"required/>
                        </div>
                     </div>
                     
                     <div class="form-group" >
                        <label for="tel3" class="control-label col-md-4">Telefono Madre: </label>
                        <div class="col-md-5">
                        <input class="form-control" type="number" name="telf_m" id="dir_estu2"  value="<?php echo $i[8];?>"required/>
                        </div>
                     </div>
                     <div class="form-group" >
                        <label for="tel3" class="control-label col-md-4">Telefono Tutor: </label>
                        <div class="col-md-5">
                        <input class="form-control" type="number" name="telf_t" id="dir_estu2"  value="<?php echo $i[9];?>"required/>
                        </div>
                     </div>

                     <div class="form-group" >
                     <label for="tipo" class="control-label col-md-4">En caso de emergencia llamar a:</label>
                <div class="col-md-5">
                <select name="llamar_a" id="tipo" class="form-control" style="border: solid red 1px;">
                <?php
                          $seleccion1="Padre";
                          $seleccion2="Madre";
                          $seleccion3="Tutor";
                          
                          if($i[10]==$seleccion1)// Si es Padre
                          {
                            $seleccionado="Padre";
                            $seleccion1="Madre";
                            $seleccion2="Tutor";
                          
                          }
                          else if ($i[10]==$seleccion2)
                          {
                              $seleccionado="Madre";
                              $seleccion1="Padre";
                              $seleccion2="Tutor";
                          }
                          else {
                                $seleccionado="Tutor";
                                $seleccion1="Padre";
                                $seleccion2="Madre";
                               }
                          
                          ?>
                     
                          <option selected><?php echo $seleccionado;?></option>
                          <option><?php echo $seleccion1;?></option>
                          <option><?php echo $seleccion2;?></option>
              
                </select>
                </div>    
                </div>    
                </div>      
                <div class="col-md-5">  
                     <div class="form-group" >
                        <label for="cod_rude2" class="control-label col-md-4">Peso: </label>
                        <div class="col-md-5">
                          <input class="form-control" type="text" name="peso" id="peso" value="<?php echo $i[11]?>"/>
                        </div>
                        </div>
                        <div class="form-group" >
                          <label for="cod_rude2" class="control-label col-md-4">Estatura: </label>
                        <div class="col-md-5">
                          <input class="form-control" type="text" name="estatura" id="codi_estu" value="<?php echo $i[12];?>" />
                        </div>
                     </div>
                     
                     <div class="form-group" >
                      <label for="curso2" class="control-label col-md-4">Tiene Seguro Médico:</label>
                      </label>
                      <div class="col-md-5">
                        <select class="form-control" name="tiene_seguro" id="tiene_seguro">
                          <?php
                          $seleccion="No";
                          if($i[13]==$seleccion)
                          {
                            $seleccionado="No";
                            $seleccion="Si";
                          }
                          else
                          {
                              $seleccionado="Si";
                              $seleccion="No";
                          }
                          ?>
                     
                          <option selected><?php echo $seleccionado;?></option>
                          <option><?php echo $seleccion;?></option>
                        </select>
                      </div>
                      </div>

                      <div class="form-group" >
                          <label for="cod_rude2" class="control-label col-md-4">Seguro médico: </label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="seguro" id="codi_estu" value="<?php echo $i[14];?>" />
                        </div>
                     </div>
                     <div class="form-group" >
                      <label for="sexo2" class="control-label col-md-4">Tiene alergia: </label>
                      <div class="col-md-5">
                        <select class="form-control" name="tiene_alergia" id="tiene_alergia">
                          <?php
                          $seleccion="No";
                          if($i[16]==$seleccion)
                          {
                            $seleccionado="No";
                            $seleccion="Si";
                          }
                          else
                          {
                              $seleccionado="Si";
                              $seleccion="No";
                          }
                          ?>
                     
                          <option selected><?php echo $seleccionado;?></option>
                          <option><?php echo $seleccion;?></option>
                        </select>
                      </div>
                     </div>
                   
                   <div class="form-group" >
                          <label for="cod_rude2" class="control-label col-md-4">Alergia a: </label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="alergia" id="codi_estu" value="<?php echo $i[17];?>" />
                        </div>
                     </div>

                     <div class="form-group" >
                      <label for="sexo2" class="control-label col-md-4">Recibe tratamiento: </label>
                      <div class="col-md-5">
                        <select class="form-control" name="recibe_tratamiento" id="recibe_tratamiento">
                          <?php
                          $seleccion="No";
                          if($i[18]==$seleccion)
                          {
                            $seleccionado="No";
                            $seleccion="Si";
                          }
                          else
                          {
                              $seleccionado="Si";
                              $seleccion="No";
                          }
                          ?>
                     
                          <option selected><?php echo $seleccionado;?></option>
                          <option><?php echo $seleccion;?></option>
                        </select>
                      </div>
                     </div>
                   
                   <div class="form-group" >
                          <label for="cod_rude2" class="control-label col-md-4">Tratamiento: </label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="tratamiento" id="codi_estu" value="<?php echo $i[19];?>" />
                        </div>
                     </div>
                     <div class="form-group" >
                          <label for="cod_rude2" class="control-label col-md-4">Grupo sanguineo: </label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="sangre" id="codi_estu" value="<?php echo $i[15];?>" />
                        </div>
                     </div>
        </div>
      
    </div>
           <!--DATOS PATERNOS-->
           <div class="panel panel-info">
             <div class="panel-heading" align="center">
                  <h3>Anamnesis </h3>
             </div>
             <div class="panel-body">
               <div class="row">
                 <div class="col-md-4" style="background-color: #e4e9f0;">
                  <label for="nom_pat2" class="control-label">Antecedentes patológicos personales:</label>
                  <input class="form-control" type="text" name="app" id="nom_pat2" style="width: 270;" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[20];?>" />
                  
                   
                  <label for="ci_pat2" class="control-label">Antecedentes patológicos familiares:</label>
                  <input class="form-control" type="text" name="apf" id="ci_pat2" style="width: 270;" value="<?php echo $i[21];?>"required/>
                 
                
                  
                  
                
                </div>
                 
                 <div class="col-md-4" style="background-color: #f5e1d4;">
                  <label for="nom_mat2" class="control-label">Fracturas que ha sufrido:</label>
                  <input class="form-control" type="text" name="fracturas" id="nom_mat2" onKeyUp="this.value = this.value.toUpperCase();" style="width: 270;" value="<?php echo $i[22];?>"required/>
                 
                  <label for="ci_mat2" class="control-label">Cirugías que ha tenido:</label>
                  <input class="form-control" type="text" name="cirugias" id="ci_mat2" style="width: 270;" value="<?php echo $i[23];?>"required/>
                 
                                 
                
                </div>
                 
                           

                 <div class="form-group col-md-4" style="background-color:#d8d8d8;">
                  <label for="nom_tuto" class="control-label">Enfermedad de base:</label>
                  <input class="form-control" type="text" name="base" id="nom_tuto" style="width: 270;" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[24];?>"required/>
                            </div>
                            
                        </div>  </div>  
                    <div class="form-group" align="center">
                      <button type="submit" class="btn btn-success" name="button">
                      <span class="glyphicon glyphicon-edit"></span> Modificar todo
                      </button>
                    </div>
               </div>
             </div>
           </div>



        </form> 
  </div>
</body>
</html>