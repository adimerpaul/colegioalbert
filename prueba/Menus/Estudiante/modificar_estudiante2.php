<?php
  include "../../conexion.php";
  error_reporting(E_ALL);
 ini_set('display_errors', true);

  $res=$_GET["id"];
  
  $i=mysqli_fetch_array(mysqli_query($conectador,"select * from estudiante where rude='$res';"));
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<meta charset="utf-8">
<title>Modificacion de Estudiante</title>
<link rel="stylesheet" href="../../css/bootstrap.min.css">

</head>
<body>
<div class="container">
<br>
<form id="form1" name="form1" method="post" action="pro_mod_estudiante.php" class="form-horizontal">
  <div class="panel panel-success">
        <div class="panel-heading">
          <img src="../../imagenes/logo.jpg" align="right" width="70" height="55">
          <font face="calibri"><H4><b>DATOS DEL ESTUDIANTE - Puede modificar algunos campos</b></H4></font>
        </div>
        <div class="panel-body">
                   <div class="col-md-1"></div>
                   <div class="col-md-6">
                    <!--IMG-->
                    <div class="form-group" >
                      <label for="nom_estu" class="control-label col-md-4">Nombre del estudiante:</label>
                      <div class="col-md-5">
                        <input class="form-control" type="text" name="nom_estu" id="nom_estu" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[0];?>" readonly/>
                     </div>
                     </div>
                     
                     <div class="form-group" >
                      <label  for="ap_pat" class="control-label col-md-4">Apellido paterno: </label>
                      <div class="col-md-4">
                        <input class="form-control" type="text" name="ap_pat" id="ap_pat" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[1];?>" readonly/>
                      </div>
                     </div>
                     
                     <div class="form-group" >
                        <label for="ap_mat" class="control-label col-md-4">Apellido materno: </label>
                        <div class="col-md-4">
                          <input class="form-control" type="text" name="ap_mat" id="ap_mat" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[2];?>" readonly/>
                        </div>
                      </div>
                     
                     <div class="form-group" >

                        <label for="ci_est" class="control-label col-md-4">C.I. :</label>
                        <div class="col-md-4">
                          <input class="form-control" type="number" name="ci_est" id="ci_est" value="<?php echo $i[3];?>"readonly/>
                        </div>
                     </div>
                     
                     <div class="form-group" >
                        <label for="fecha_nac2" class="control-label col-md-4">Fecha de nacimiento: </label>
                        <div class="col-md-4">
                          <input class="form-control" type="date" name="fecha_nac" id="fecha_nac2" value="<?php echo $i[4];?>"readonly/>
                        </div>
                     </div>
                     <div class="form-group" >
                        <label for="correo_es" class="control-label col-md-4">Correo estudiante: </label>
                        <div class="col-md-4">
                          <input class="form-control" type="text" name="correo_es" id="correo_es" value="<?php echo $i[21];?>"required/>
                        </div>
                     </div>
                     
                   </div>
                   <div class="col-md-5">  
                    <div class="form-group" >
                        <label for="dir_estu2" class="control-label col-md-4">Direccion: </label>
                        <div class="col-md-4">
                          <input class="form-control" type="text" name="dir_estu2" id="dir_estu2" style="text-transform: uppercase; width:250px; height:auto" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[5];?>"required/>
                        </div>
                     </div>
                     
                     <div class="form-group" >
                        <label for="tel3" class="control-label col-md-4">Telefono: </label>
                        <div class="col-md-5">
                          <input class="form-control" type="number" name="tel" id="tel3" value="<?php echo $i[6];?>"required/>
                        </div>
                     </div>
                     
                     <div class="form-group" >
                        <label for="sexo2" class="control-label col-md-4">Sexo: </label>
                        <div class="col-md-5">
                          <input class="form-control" type="text" name="sexo" id="sexo2" value="<?php echo $i[7];?>"readonly/>
                        </div>
                     </div>

                     <!--<div class="form-group" >
                      <label for="sexo2" class="control-label col-md-4">Sexo: </label>
                      <div class="col-md-5">
                        <select class="form-control" name="sexo" id="sexo2">
                          <?php
                          //$seleccion="Masculino";
                          //if($i[7]==$seleccion)
                          //{
                            //$seleccionado="Masculino";
                            //$seleccion="Femenino";
                          //}
                          //else
                          //{
                            //  $seleccionado="Femenino";
                             // $seleccion="Masculino";
                          //}
                          ?>
                     
                          <option selected><?php //echo $seleccionado;?></option>
                          <option><?php //echo $seleccion;?></option>
                        </select>
                      </div>
                     </div> -->
                     
                     <div class="form-group" >
                        <label for="cod_rude2" class="control-label col-md-4">Codigo RUDE: </label>
                        <div class="col-md-5">
                          <input class="form-control" type="text" name="cod_rude" id="cod_rude2" value="<?php echo $res;?>" readonly/>
                        </div>
                      <br>    
                          <label for="cod_rude2" class="control-label col-md-4">Codigo Estudiante: </label>
                        <div class="col-md-5">
                          <input class="form-control" type="text" name="codi_estu" id="codi_estu" value="<?php echo $i[20];?>" readonly/>
                        </div>
                     </div>
                     
                     <!--<div class="form-group" >
                      <label for="curso2" class="control-label col-md-4">Curso:</label>
                      <div class="col-md-5">
                        <select class="form-control" name="curso" id="curso2">
                        <option selected>
                          <?php //echo $i[9];?></option>
                          <?php
                           //$resul=mysqli_query($conectador,"select * from cursos");
                           //while($f=mysqli_fetch_array($resul))
                           //{
                        //if($f[1]!=$i[9])
                          //     echo "<option>$f[1]</option>"; 
                          // }
                        ?>
                        </select>

                      </div>
                      </div> -->

                      <div class="form-group" >
                        <label for="curso2" class="control-label col-md-4">CURSO: </label>
                        <div class="col-md-4">
                          <input class="form-control" type="text" name="curso" id="curso2" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[9];?>"readonly/>
                        </div>
                      </div>

                     <div class="form-group" hidden>
                      <label for="curso2" class="control-label col-md-4">Estado:</label>
                      <div class="col-md-5">
                        <select class="form-control" name="estado" id="estado2">
                        <option  value=1>Activo</option>
                        <option selected value=0>Retirado</option>
                        </select>
                      </div>
                      </div>
                   </div>
        </div>
      
    </div>
           <!--DATOS PATERNOS-->
           <div class="panel panel-info">
             <div class="panel-heading" align="left">
                 <font face="calibri"><H4><b>DATOS PATERNOS - Puede modificar algunos campos</b></H4></font>
                  
             </div>
             <div class="panel-body">
               <div class="row">
                 <div class="col-md-4" style="background-color: #e4e9f0;">
                  <label for="nom_pat2" class="control-label">Nombre completo del padre:</label>
                  <input class="form-control" type="text" name="nom_pat" id="nom_pat2" style="width: 270;" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[10];?>" required/>
                  
                   
                  <label for="ci_pat2" class="control-label">CI:</label>
                  <input class="form-control" type="number" name="ci_pat" id="ci_pat2" style="width: 200;" value="<?php echo $i[11];?>"readonly/>
                 
                  <label for="tel_padre" class="control-label"> Telefono:</label>
                  <input class="form-control" type="number" name="tel_padre" id="tel_padre" style="width: 200;" value="<?php echo $i[15];?>"required/>

                  <label for="correo_pa" class="control-label"> Correo Padre:</label>
                  <input class="form-control" type="text" name="correo_pa" id="correo_pa" style="width: 200;" value="<?php echo $i[22];?>"required/>

                  
                  <label for="ocup_padre" class="control-label"> Ocupación Padre:</label>
                  <input class="form-control" type="text" name="ocup_padre" id="ocup_padre" style="width: 200;" value="<?php echo $i[26];?>"required/>
                </div>
                 
                 <div class="col-md-4" style="background-color: #f5e1d4;">
                  <label for="nom_mat2" class="control-label">Nombre completo de la madre:</label>
                  <input class="form-control" type="text" name="nom_mat" id="nom_mat2" onKeyUp="this.value = this.value.toUpperCase();" style="width: 270;" value="<?php echo $i[12];?>"required/>
                 
                  <label for="ci_mat2" class="control-label">CI:</label>
                  <input class="form-control" type="number" name="ci_mat" id="ci_mat2" style="width: 200;" value="<?php echo $i[13];?>"readonly/>
                 
                  <label for="tel_madre" class="control-label">Telefono:</label>
                  <input class="form-control" type="number" name="tel_madre" id="tel_madre" style="width: 200;" value="<?php echo $i[16];?>"required/>
                
                  <label for="correo_ma" class="control-label"> Correo Madre:</label>
                  <input class="form-control" type="text" name="correo_ma" id="correo_ma" style="width: 200;" value="<?php echo $i[23];?>"required/>

                  
                  <label for="ocup_madre" class="control-label"> Ocupacion Madre:</label>
                  <input class="form-control" type="text" name="ocup_madre" id="ocup_padre" style="width: 200;" value="<?php echo $i[25];?>"required/>
               
                
                </div>
                 
                           

                 <div class="form-group col-md-4" style="background-color:#d8d8d8;">
                  <label for="nom_tuto" class="control-label">Nombre completo del tutor:</label>
                  <input class="form-control" type="text" name="nom_tuto" id="nom_tuto" style="width: 270;" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[14];?>"required/>
                 
                  <label for="ci_tuto" class="control-label">CI:</label>
                  <input class="form-control" type="number" name="ci_tuto" id="ci_tuto" style="width: 200;" value="<?php echo $i[17];?>"readonly/>
                 
                  <label for="tel_tuto" class="control-label">Telefono:</label>
                  <input class="form-control" type="number" name="tel_tuto" id="tel_tuto" style="width: 200;" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[18];?>"required/>
                  <label for="correo_tu" class="control-label"> Correo Tutor:</label>
                  <input class="form-control" type="text" name="correo_tu" id="correo_tu" style="width: 200;" value="<?php echo $i[24];?>"required/>
                  <label for="" class="control-label"></label>
                  <br><br><br>
                </div>
                <div class="form-group col-md-12">      
                  <B><P class="control-label col-md-6">DATOS PARA FACTURACION:</P></B></br><br>
                  <label for="nom_factur" class="control-label col-md-6">Nombre para Factura:</label>
                  <div class="col-md-4"><input type="text" name="nom_factur" id="nom_factur"  class="form-control" value="<?php echo $i[27];?>"required/></div>
                  <label for="ci_factur" class="control-label col-md-6">Numero para Factura:</label> 
                  <div class="col-md-4"><input type="number" name="ci_factur" id="ci_factur"  class="form-control" placeholder="C.I. para factura"value="<?php echo $i[28];?>" required/></div>
                </div>
                
                <label for="tipo" class="control-label col-md-6">Tipo de documento para facturacion</label>
                <div class="col-md-4">
                <select name="tipo" id="tipo" class="form-control" style="border: solid red 1px;">
                <?php
                            $seleccion1="NIT";
                          $seleccion2="Cedula de identidad";
                          $seleccion3="Ninguno";
                          
                          if($i[31]==$seleccion1)// Si es NIT
                          {
                            $seleccionado="NIT";
                            $seleccion1="Cedula de identidad";
                            $seleccion2="Ninguno";
                          
                          }
                          else if ($i[31]==$seleccion2)
                          {
                              $seleccionado="Cedula de identidad";
                              $seleccion1="NIT";
                              $seleccion2="Ninguno";
                          }
                          else {
                                $seleccionado="Ninguno";
                                $seleccion1="NIT";
                                $seleccion2="Cedula de identidad";
                               }
                          
                          ?>
                     
                          <option selected><?php echo $seleccionado;?></option>
                          <option><?php echo $seleccion1;?></option>
                          <option><?php echo $seleccion2;?></option>
                </select>
                <br/>
            </div>
               <br><br>
                <div class="form-group col-md-12">      
                 <div class="form-group" align="center">
                      <button type="submit" class="btn btn-success btn-lg" name="button">
                          
                      <span class="glyphicon glyphicon-edit"></span> MODIFICAR DATOS Y PRE INSCRIBIRSE
                    </div>
               </div>
                                   
                </div>
               <br><br>

                  
               <!--<div class="form-group" align="center">
                      <a href="preinscripción.php"> <span class="glyphicon glyphicon-edit"></span> PRE INSCRIPCIÓN</a>
                      
                      
               </div>-->
               </div>
             </div>
           </div>



        </form> 
  </div>
</body>
</html>