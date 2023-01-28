
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registro personal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<header style="background-color: #2c3e50;">
		<div class="container">	
		<img src="../../imagenes/logo.jpg" align="right" width="90" height="70">
			<h2><font color="WHITE"><u>REGISTRO PERSONAL</u></font></h2>
		</div>
	</header>
	<br>
	
		<form action="pro_reg_personal.php" method="POST" class="form-horizontal">
		 <div class="panel panel-primary">
		 	<div class="panel-heading">
		 	<b>Registro - Datos de Personal Nuevo</b>
		 	</div>
		 	<BR>
		   <div class="row">
		   	  <div class="col-md-6" >
					<div class="form-group">
					 <label for="ci" class="control-label col-md-4 ">CI:</label>
					  <div class="col-md-4">
						<input class="form-control" type="number" id="ci" name="ci" placeholder=" # CI ">
					  </div>
					 <div class="col-md-2"> <select name="ext" id="ext" class="form-control" style="width:auto; height:auto">
					   <option>---</option>
					   <?php
	          						include "../../conexion.php";
						          	$resul=mysqli_query($conectador,"select * from ciudad");
						          	while($f=mysqli_fetch_array($resul))
						          	{
						          		echo "<option value=$f[0]>$f[1]</option>";
						          	}
        				?>				  
                     </select> </div>
					</div>

					<div class="form-group">
					<label for="nombre" class="control-label col-md-4">Nombre:</label>
					 <div class="col-md-6">
						<input class="form-control" type="text" id="nombre" name="nombre" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Ingrese su nombre">
					 </div>
					<div class="col-md-1"></div>
					</div>


					<div class="form-group">
					<label for="a_pat" class="control-label col-md-4">Apellido Paterno:</label>
					 <div class="col-md-6">
						<input class="form-control" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="a_pat" name="a_pat" placeholder="Ingrese su Ap. paterno">
					 </div>
					 <div class="col-md-1"> </div>
					</div>


					<div class="form-group">
					<label for="a_mat" class="control-label col-md-4">Apellido Materno:</label>
					 <div class="col-md-6">
						<input class="form-control" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="a_mat" name="a_mat" placeholder="Ingrese su Ap. Materno">
					 </div>
					 <div class="col-md-1"> </div>
					</div>
			

					<div class="form-group">
					<label for="naci" class="control-label col-md-4">Fecha de Nacimiento:</label>
					 <div class="col-md-4">
						<input class="form-control" type="date"  id="naci" name="naci">
					 </div>
					 <div class="col-md-1"> </div>
					</div>
			
					<div class="form-group">
					<label for="sex" class="control-label col-md-4">Sexo</label>
					 <div class="col-md-3">
						<select name="sex" id="sex" class="form-control" style="width:auto; height:auto">
							<option>Seleccionar</option>
							<option>Masculino</option>
							<option>Femenino</option>
						</select>
					 </div>
					 <div class="col-md-1"> </div>
					</div>		
					<div class="form-group">
					<label for="dire" class="control-label col-md-4">Direccion:</label>
					 <div class="col-md-6">
						<input class="form-control" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="dire" name="dire" placeholder="Ingrese su direccion">
					 </div>
					 <div class="col-md-2"> </div>
					</div>
			</div>
			<div class="col-md-6" >
				
					<div class="form-group">
					<label for="telf" class="control-label col-md-3">Telefono Fijo:</label>
					 <div class="col-md-4">
						<input class="form-control" type="number" id="telf" name="telf" placeholder="# Telefono">
					 </div>
					 <div class="col-md-3"> </div>
					</div>
					
					<div class="form-group">
					<label for="cel" class="control-label col-md-3">Telf. Celular:</label>
					 <div class="col-md-4">
						<input class="form-control" type="number" id="cel" name="cel" placeholder="# Celular">
					 </div>
					 <div class="col-md-3"> </div>
					</div>

					<div class="form-group">
					<label for="corr" class="control-label col-md-3">Correo:</label>
					 <div class="col-md-6">
						<input class="form-control" type="text" id="corr" name="corr" placeholder="Ingrese su correo electronico">
					 </div>
					 <div class="col-md-3"> </div>
					</div>
					
					<div class="form-group">
					<label for="fo" class="control-label col-md-3">Formación:</label>
					 <div class="col-md-4">
					 	<select class="form-control" name="formacion" id="formacion" style="width:auto; height:auto">
					 		<option>Nivel</option>
					 		<?php
	          						include "../../conexion.php";
						          	$resul=mysqli_query($conectador,"select * from formacion");
						          	while($f=mysqli_fetch_array($resul))
						          	{
						          		echo "<option value=$f[0]>$f[1]</option>";
						          	}
        						?>
					 	</select>
					 </div>
					 <div class="col-md-3"><select class="form-control" name="info_formacion" id="info_formacion" style="width:auto; height:auto">
					 	<option>Área</option>
					 		<?php
	          						include "../../conexion.php";
						          	$resul=mysqli_query($conectador,"select * from info_formacion");
						          	while($f=mysqli_fetch_array($resul))
						          	{
						          		echo "<option value=$f[0]>$f[1]</option>";
						          	}
        						?>
					 </select>
					 </div>
					</div>
					
					<div class="form-group">
					<label for="fecha_ing" class="control-label col-md-3">Fecha de Ingreso:</label>
					 <div class="col-md-4">
						<input class="form-control" type="date" id="fecha_ing" name="fecha_ing">
					 </div>
					 <div class="col-md-1"> </div>
					</div>

					<div class="form-group">
					<label for="nua" class="control-label col-md-3">NUA</label>
					 <div class="col-md-6">
						<input class="form-control" type="number" id="nua" name="nua" placeholder="Ingrese su NUA(# Registro AFP)">
					 </div>
					 <div class="col-md-3"> </div>
					</div>

					<div class="form-group">
						<label for="enabled" class="control-label col-md-3">CARGO:</label>
						<div class="col-md-4">
                    		<select class="form-control" name="cargo" id="cargo" style="width:auto; height:auto">
                    			<option>Seleccionar</option>
                    			<?php
	          						include "../../conexion.php";
						          	$resul=mysqli_query($conectador,"select * from cargo");
						          	while($f=mysqli_fetch_array($resul))
						          	{
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
		   	  	<div class="col-md-2"></div>
		   		<label for="cat" class="control-label col-md-3">NIVEL DE ACCESO:</label>
		   			<div class="col-md-2">
		   				<select class="form-control" name="cat" id"cat">
		   					<option>Seleccionar</option>
		   					<option>Administrador</option>
		   					<option>Auxiliar</option>
		   					<!--<option>Docente</option>-->
		   				</select>
		   				</div>
					 <div class="col-md-3"></div>
					 <div class="col-md-2"></div>
		   	  </div>	
		   	</div>

		   

		</div>
		
		<div class="panel panel-danger">
			
			<div class="panel-heading">
				<b>Registro - Acceso Unico al sistema</b>
			</div>
			<div class="panel-body" style="background-color: #faf4f4;">
				
			<div class="row">
				<div class="form-group has-warning">
				<label for="usu" class="control-label col-md-4">Usuario: </label>
				 <div class="col-md-4">
					<input class="form-control" type="text" id="usu" name="usu" placeholder=" Nombre usuario ">
				 </div>
				 <div class="col-md-4"> </div>
				</div>
				
				
				<div class="form-group has-warning">
				<label for="pass" class="control-label col-md-4">Password: </label>
				 <div class="col-md-4">
					<input class="form-control" type="password" id="pass" name="pass" placeholder=" contraseña " >
				 </div>
				 <div class="col-md-4"> </div>
				</div>

				<div class="form-group has-warning">
				<label for="pass" class="control-label col-md-4">Repetir password: </label>
				 <div class="col-md-4">
					<input class="form-control" type="password" id="pass_r" name="pass_r" placeholder="repita su contraseña " onBlur="comprobarClave()" >
				 </div>
				 <div class="col-md-4"> </div>
				</div>	
				<script>
					function comprobarClave(){
						clave1=document.getElementById("pass").value;
						clave2=document.getElementById("pass_r").value;
						if(clave1!=clave2){
							alert("Ambos campos de contraseñas no coinciden");
							document.getElementById("pass").focus();
						}
					}
				</script>
			</div>
			
			</div>
		</div>	

			<div class="col-md-2 col-md-offset-5"> <!--EL COL-MD-OFFSET-4 ES DESPLAZO HACIA LA DERECHA DE 4 COLUMNAS-->
					
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-floppy-disk"></span>
						<font face="Comic Sans MS">REGISTRAR</font>
					</button>
				</div>
		</form>
	</div>

<script src="../../js/query.js"></script>
<script src="../../js/bootstrap.min.js"></script>

</body>
</html>