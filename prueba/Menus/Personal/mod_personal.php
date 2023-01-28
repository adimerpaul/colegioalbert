<?php
  include "../../conexion.php";
  $ci=$_GET["id"];
  $i=mysqli_fetch_array(mysqli_query($conectador,"select * from personal where ci='$ci';"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cambio de datos personal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<header style="background-color: #2c3e50;">
		<div class="container">	
		<img src="../../imagenes/logo.jpg" align="right" width="90" height="70">
			<h2><font color="WHITE"><u>CAMBIO DE DATOS</u></font></h2>
		</div>
	</header>
	<br>
	
		<form action="pro_mod_personal.php" method="POST" class="form-horizontal">
		 <div class="panel panel-primary">
		 	<div class="panel-heading">
		 	<b>Modificacion datos del personal</b>
		 	</div>
		 	<BR>
		   <div class="row">
		   	  <div class="col-md-6" >
					<div class="form-group">
					 <label for="ci" class="control-label col-md-4 ">CI:</label>
					  <div class="col-md-4">
						<input class="form-control" type="number" id="ci" name="ci" placeholder=" # CI " value="<?php echo $i[0];?>" readonly/>
					  </div>
					 <div class="col-md-2"> <select name="ext" id="ext" class="form-control" style="width:auto; height:auto">
					   <?php $resul=mysqli_fetch_array(mysqli_query($conectador,"select * from ciudad where id_ciudad=$i[1]"));?>
					   <option selected value= <?php echo $resul[0]?>><?php echo $resul[1]?></option>
                          <?php
                           $exp=mysqli_query($conectador,"select * from ciudad");
                           while($f=mysqli_fetch_array($exp))
                           {
                        if($f[1]!=$resul[1])
                               echo "<option value=$f[0]>$f[1]</option>";
                           }
                        ?>				  
                     </select> </div>
					</div>

					<div class="form-group">
					<label for="nombre" class="control-label col-md-4">Nombre:</label>
					 <div class="col-md-6">
						<input class="form-control" type="text" id="nombre" name="nombre" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Ingrese su nombre" value="<?php echo $i[2];?>"/>
					 </div>
					<div class="col-md-1"></div>
					</div>


					<div class="form-group">
					<label for="a_pat" class="control-label col-md-4">Apellido Paterno:</label>
					 <div class="col-md-6">
						<input class="form-control" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="a_pat" name="a_pat" placeholder="Ingrese su Ap. paterno" value="<?php echo $i[3];?>"/>
					 </div>
					 <div class="col-md-1"> </div>
					</div>


					<div class="form-group">
					<label for="a_mat" class="control-label col-md-4">Apellido Materno:</label>
					 <div class="col-md-6">
						<input class="form-control" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="a_mat" name="a_mat" placeholder="Ingrese su Ap. Materno" value="<?php echo $i[4];?>"/>
					 </div>
					 <div class="col-md-1"> </div>
					</div>
			

					<div class="form-group">
					<label for="naci" class="control-label col-md-4">Fecha de Nacimiento:</label>
					 <div class="col-md-4">
						<input class="form-control" type="date" style="" id="naci" name="naci" value="<?php echo $i[6];?>"/>
					 </div>
					 <div class="col-md-1"> </div>
					</div>
			
					<div class="form-group">
					<label for="sex" class="control-label col-md-4">Sexo</label>
					 <div class="col-md-3">
						<select name="sex" id="sex" class="form-control" style="width:auto; height:auto">
							<?php $resul=mysqli_fetch_array(mysqli_query($conectador,"select sexo from personal where ci=$i[0]"));?>
							<option selected><?php echo $resul[0]?></option>
							<option>Cambiar a</option>
							<option>Masculino</option>
							<option>Femenino</option>
						</select>
					 </div>
					 <div class="col-md-1"> </div>
					</div>		
					<div class="form-group">
					<label for="dire" class="control-label col-md-4">Direccion:</label>
					 <div class="col-md-6">
						<input class="form-control" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="dire" name="dire" placeholder="Ingrese su direccion" value="<?php echo $i[7];?>"/>
					 </div>
					 <div class="col-md-2"> </div>
					</div>
			</div>
			<div class="col-md-6" >
				
					<div class="form-group">
					<label for="telf" class="control-label col-md-3">Telefono Fijo:</label>
					 <div class="col-md-4">
						<input class="form-control" type="number" id="telf" name="telf" placeholder="# Telefono" value="<?php echo $i[8];?>"/>
					 </div>
					 <div class="col-md-3"> </div>
					</div>
					
					<div class="form-group">
					<label for="cel" class="control-label col-md-3">Telf. Celular:</label>
					 <div class="col-md-4">
						<input class="form-control" type="number" id="cel" name="cel" placeholder="# Celular" value="<?php echo $i[9];?>"/>
					 </div>
					 <div class="col-md-3"> </div>
					</div>

					<div class="form-group">
					<label for="corr" class="control-label col-md-3">Correo:</label>
					 <div class="col-md-6">
						<input class="form-control" type="text" id="corr" name="corr" placeholder="Ingrese su correo electronico" value="<?php echo $i[10];?>"/>
					 </div>
					 <div class="col-md-3"> </div>
					</div>
					
					<div class="form-group">
					<label for="fo" class="control-label col-md-3">Formación:</label>
					 <div class="col-md-4">
					 	<select class="form-control" name="formacion" id="formacion" style="width:auto; height:auto">
					 		<?php $resul=mysqli_fetch_array(mysqli_query($conectador,"select * from formacion where id_formacion=$i[11]"));?>
					 		<option selected value=<?php echo $resul[0]?>><?php echo $resul[1]?></option>
                          <?php
                           $for=mysqli_query($conectador,"select * from formacion");
                           while($f=mysqli_fetch_array($for))
                           {
                        if($f[1]!=$resul[1])
                               echo "<option value=$f[0]>$f[1]</option>"; 
                           }
                        ?>
					 	</select>
					 </div>
					 <div class="col-md-3"><select class="form-control" name="info_formacion" id="info_formacion" style="width:180px; height:auto">
					 	<?php $resul=mysqli_fetch_array(mysqli_query($conectador,"select * from info_formacion where id_info_formacion=$i[12]"));?>
					 	<option selected value=<?php echo $resul[0]?>><?php echo $resul[1]?></option>
                          <?php
                           $info_for=mysqli_query($conectador,"select * from info_formacion");
                           while($f=mysqli_fetch_array($info_for))
                           {
                        if($f[1]!=$resul[1])
                               echo "<option value=$f[0]>$f[1]</option>"; 
                           }
                        ?>
					 </select>
					 </div>
					</div>
					
					<div class="form-group">
					<label for="fecha_ing" class="control-label col-md-3">Fecha de Ingreso:</label>
					 <div class="col-md-4">
						<input class="form-control" type="date" id="fecha_ing" name="fecha_ing" value="<?php echo $i[15];?>"/>
					 </div>
					 <div class="col-md-1"> </div>
					</div>

					<div class="form-group">
					<label for="nua" class="control-label col-md-3">NUA</label>
					 <div class="col-md-6">
						<input class="form-control" type="number" id="nua" name="nua" placeholder="Ingrese su NUA(# Registro AFP)" value="<?php echo $i[13];?>"/>
					 </div>
					 <div class="col-md-3"> </div>
					</div>

					<div class="form-group">
						<label for="enabled" class="control-label col-md-3">CARGO:</label>
						<div class="col-md-4">
                    		<select class="form-control" name="cargo" id="cargo" style="width:auto; height:auto" value="<?php echo $i[14];?>"/>
                    			<?php $resul=mysqli_fetch_array(mysqli_query($conectador,"select * from cargo where id_cargo=$i[14]"));?>
                    			<option selected value=<?php echo $resul[0]?>><?php echo $resul[1]?></option>
                          <?php
                           $cargo=mysqli_query($conectador,"select * from cargo");
                           while($f=mysqli_fetch_array($cargo))
                           {
                        if($f[1]!=$resul[1])
                               echo "<option value=$f[0]>$f[1]</option>"; 
                           }
                        ?>
                     		</select>
                     	</div>               
					</div>
			  </div>
		   </div>
			
		   <div class="row">
		   	  <div class="form-group">
		   		<label for="cat" class="control-label col-md-3">NIVEL DE ACCESO:</label>
		   			<div class="col-md-2">
		   				<select class="form-control" name="cat" id"cat">
		   					<?php $resul=mysqli_fetch_array(mysqli_query($conectador,"select categoria from usuario where ci_personal= $i[0]"));?>
		   					<option selected><?php echo $resul[0]?></option>
		   					<option>Cambiar a</option>
		   					<option>Administrador</option>
		   					<option>Auxiliar</option>
		   					<option>Docente</option>
		   				</select>
		   				</div>
					 <div class="form-group">
					 	<label for="cat" class="control-label col-md-3">ESTADO:</label>
		   			<div class="col-md-2">
		   				<select class="form-control" name="estado" id"estado">
		   					<option selected value=1>Activo</option>
		   					<option value=0>Retirado</option>
		   				</select>
		   				</div>
					 </div>
					 <div class="col-md-2"></div>
		   	  </div>	
		   	</div>
		</div>

			<div class="col-md-2 col-md-offset-5"> <!--EL COL-MD-OFFSET-4 ES DESPLAZO HACIA LA DERECHA DE 4 COLUMNAS-->
					
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-floppy-disk"></span>
						<font face="Comic Sans MS">GUARDAR</font>
					</button>
				</div>
		</form>
	</div>

<script src="../../js/query.js"></script>
<script src="../../js/bootstrap.min.js"></script>

</body>
</html>