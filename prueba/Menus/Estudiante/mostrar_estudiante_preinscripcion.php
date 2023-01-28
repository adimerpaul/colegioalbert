<?php
  include "../../conexion.php";
  $res=$_GET["id"];
  
  $i=mysqli_fetch_array(mysqli_query($conectador,"select * from estudiante where rude='$res';"));
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
<form id="form1" name="form1" method="post" action="pro_mod_estudiante.php" class="form-horizontal">
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
                      <label for="nom_estu" class="control-label col-md-4">Nombre del estudiante:</label>
                      <div class="col-md-5">
                        <input class="form-control" type="text" name="nom_estu" id="nom_estu" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[0];?>"required/>
                     </div>
                     </div>
                     
                     <div class="form-group" >
                      <label  for="ap_pat" class="control-label col-md-4">Apellido paterno: </label>
                      <div class="col-md-4">
                        <input class="form-control" type="text" name="ap_pat" id="ap_pat" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[1];?>"required/>
                      </div>
                     </div>
                     
                     <div class="form-group" >
                        <label for="ap_mat" class="control-label col-md-4">Apellido materno: </label>
                        <div class="col-md-4">
                          <input class="form-control" type="text" name="ap_mat" id="ap_mat" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $i[2];?>"required/>
                        </div>
                      </div>
                     
                     <div class="form-group" >

                        <label for="ci_est" class="control-label col-md-4">C.I. :</label>
                        <div class="col-md-4">
                          <input class="form-control" type="number" name="ci_est" id="ci_est" value="<?php echo $i[3];?>"required/>
                        </div>
                     </div>
                     
                     <div class="form-group" >
                        <label for="fecha_nac2" class="control-label col-md-4">Fecha de nacimiento: </label>
                        <div class="col-md-4">
                          <input class="form-control" type="date" name="fecha_nac" id="fecha_nac2" value="<?php echo $i[4];?>"required/>
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
                        <select class="form-control" name="sexo" id="sexo2">
                          <?php
                          $seleccion="Masculino";
                          if($i[7]==$seleccion)
                          {
                            $seleccionado="Masculino";
                            $seleccion="Femenino";
                          }
                          else
                          {
                              $seleccionado="Femenino";
                              $seleccion="Masculino";
                          }
                          ?>
                     
                          <option selected><?php echo $seleccionado;?></option>
                          <option><?php echo $seleccion;?></option>
                        </select>
                      </div>
                     </div>
                     
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
                     
                     <div class="form-group" >
                      <label for="curso2" class="control-label col-md-4">Curso:</label>
                      <div class="col-md-5">
                        <select class="form-control" name="curso" id="curso2">
                        <option selected><?php echo $i[9];?></option>
                          <?php
                           $resul=mysqli_query($conectador,"select * from cursos");
                           while($f=mysqli_fetch_array($resul))
                           {
                        if($f[1]!=$i[9])
                               echo "<option>$f[1]</option>"; 
                           }
                        ?>
                        </select>
                      </div>
                      </div>

                      <div class="form-group" >
                      <label for="curso2" class="control-label col-md-4">Estado:</label>
                      <div class="col-md-5">
                        <select class="form-control" name="estado" id="estado2">
                        <option selected value=1>Activo</option>
                        <option value=0>Retirado</option>
                        </select>
                      </div>
                      </div>
                   </div>
        </div>
      
    </div>
           <!--DATOS PATERNOS-->
           
                <div class="form-group col-md-12">      
                  <B><P class="control-label col-md-6">PRE INSCRIPCIÓN:</P></B></br><br>
                  <label for="nom_factur" class="control-label col-md-6">Está apunto de pre inscribir al estudiante:</label>

                  <div class="form-group" align="center">
                      <button type="submit" class="btn btn-success" name="button">
                      <span class="glyphicon glyphicon-edit"></span> Modificar todo
                      </button>
                    </div>
               </div>
                                   
                </div>
               <br><br>

                  
                    <div class="form-group" align="center">
                      <a href="preinscripción.php"> <span class="glyphicon glyphicon-edit"></span> PRE INSCRIPCIÓN</a>
                      
                      </button>
                    </div>
               </div>
             </div>
           </div>



        </form> 
  </div>
</body>
</html>