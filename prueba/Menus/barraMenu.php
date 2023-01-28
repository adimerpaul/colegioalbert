
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<?php
  include "../conexion.php";
  $res=$_GET["id"];	

  $i= mysqli_fetch_array(mysqli_query($conectador,"select * from usuario where id_usuario='$res';")); //Para validar
  //$ci = $i[4];

  $usu = mysqli_fetch_array(mysqli_query($conectador,"select nombre, ap_paterno, ap_materno from personal where ci='$i[4]';"));

?>
	<div class="container">
		
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span> <!--PARA LAS RAYITAS DEL BOTON-->
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="contenido.php?id=<?php echo $res;?>" target="CUERPO" >Colegio Albert Einstein</a>
					</div>

					<div class="collapse navbar-collapse" id="navbar1">
						<ul class="nav navbar-nav">
							<li class="<?php echo $active_estudiantes;?>">
							<a href="menu_estudiante.php?id=<?php echo $i[0];?>" target="CUERPO"><span class="glyphicon glyphicon-education"></span> Estudiantes</a>
							</li>
							<!----	<li class="<?php echo $active_docentes;?>"><a href="menu_personal.php?id=<?php echo $i[0];?>" target="CUERPO"><span class="glyphicon glyphicon-briefcase"></span> Personal</a>
							</li>
						<li><a href="menu_cobros.php?id=<?php echo $i[0];?>" target="CUERPO"> 
							<span class="glyphicon glyphicon-equalizer" ></span>Cobros</a></li>	
							<li><a href=""><span class="glyphicon glyphicon-user" target="CUERPO"></span> Usuarios</a></li>----->
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href=""><?php echo $usu[0]." ".$usu[1]." ".$usu[2]; ?>
									<span class="glyphicon glyphicon-user"></span>
								</a>
								</li>
							<li><a href="logout.php" target="_parent">
								<span class="glyphicon glyphicon-off"></span>
									Salir
								</a></li>
						</ul>
					</div>
				</div>
			</nav>
		
	</div>
	<br><br><br>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>