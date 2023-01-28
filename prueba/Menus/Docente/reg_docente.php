<!DOCTYPE html>
<html lang="en">
<head>
<title>Registre_Docente</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
	<header style="background-color: #2c3e50;">
		<div class="container">	
		<img src="../../imagenes/logo.jpg" align="right" width="90" height="70">
			<h2><font color="WHITE"><u>REGISTRO DOCENTE</u></font></h2>
		</div>
	</header>
	<br>
	<div class="container">
		<form action="pro_reg_docente.php" method="POST" class="form-horizontal">
			
			<div class="form-group has-error">
				<label class="control-label col-md-8"></label>
			</div>

			
			<div class="form-group">
			<label for="ci" class="control-label col-md-5">CI:</label>
			 <div class="col-md-2">
				<input class="form-control" type="number" id="ci" name="ci" placeholder=" # CI "></input>
			 </div>
			 <div class="col-md-5"> </div>
			</div>


			<div class="form-group">
			<label for="nombre" class="control-label col-md-5">Nombre:</label>
			 <div class="col-md-3">
				<input class="form-control" type="text" id="nombre" name="nombre" onKeyUp="this.value = this.value.toUpperCase();" placeholder="Ingrese su nombre"></input>
			 </div>
			<div class="col-md-4"> </div>
			</div>


			<div class="form-group">
			<label for="a_pat" class="control-label col-md-5">Apellido Paterno:</label>
			 <div class="col-md-3">
				<input class="form-control" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="a_pat" name="a_pat" placeholder="Ingrese su Ap. paterno"></input>
			 </div>
			 <div class="col-md-4"> </div>
			</div>


			<div class="form-group">
			<label for="a_mat" class="control-label col-md-5">Apellido Materno:</label>
			 <div class="col-md-3">
				<input class="form-control" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="a_mat" name="a_mat" placeholder="Ingrese su Ap. Materno"></input>
			 </div>
			 <div class="col-md-4"> </div>
			</div>
	

			<div class="form-group">
			<label for="naci" class="control-label col-md-5">Fecha de Nacimiento:</label>
			 <div class="col-md-3">
				<input class="form-control" type="text" style="" id="naci" name="naci" placeholder="año-mes-dia"></input>
			 </div>
			 <div class="col-md-4"> </div>
			</div>

			
			<div class="form-group">
			<label for="dire" class="control-label col-md-5">Direccion:</label>
			 <div class="col-md-3">
				<input class="form-control" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="dire" name="dire" placeholder="Ingrese su direccion"></input>
			 </div>
			 <div class="col-md-4"> </div>
			</div>

			<div class="form-group">
			<label for="telf" class="control-label col-md-5">Telefono/Celular:</label>
			 <div class="col-md-3">
				<input class="form-control" type="number" id="telf" name="telf" placeholder="# Telefono"></input>
			 </div>
			 <div class="col-md-4"> </div>
			</div>

			<div class="form-group">
			<label for="corr" class="control-label col-md-5">Correo:</label>
			 <div class="col-md-3">
				<input class="form-control" type="text" onKeyUp="this.value = this.value.toUpperCase();" id="corr" name="corr" placeholder="Ingrese su correo electronico"></input>
			 </div>
			 <div class="col-md-4"> </div>
			</div>

			<div class="form-group">
			<label for="enabled" class="control-label col-md-5">HABILITADO:</label>
			 <div class="col-md-2">
				<select class="form-control" id="enabled" name="enabled">
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			 </div>
			 <div class="col-md-5"> </div>
			</div>

			<div class="form-group has-warning">
			<label for="usu" class="control-label col-md-4">Usuario: </label>
			 <div class="col-md-4">
				<input class="form-control" type="text" id="usu" name="usu" placeholder=" Nombre usuario "></input>
			 </div>
			 <div class="col-md-4"> </div>
			</div>


			<div class="form-group has-warning">
			<label for="pass" class="control-label col-md-4">Password: </label>
			 <div class="col-md-4">
				<input class="form-control" type="password" id="pass" name="pass" placeholder=" contraseña " ></input>
			 </div>
			 <div class="col-md-4"> </div>
			</div>


			<div class="col-md-2 col-md-offset-5"> <!--EL COL-MD-OFFSET-4 ES DESPLAZO HACIA LA DERECHA DE 4 COLUMNAS-->
				
				<button type="submit" class="btn btn-primary">
					<b class="glyphicon glyphicon-floppy-disk"></b>
					REGISTRAR
				</button>
				
			</div>
		</form>
	</div>

<script src="../../js/query.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>