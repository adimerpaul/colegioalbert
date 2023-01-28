<?php
  include "../../conexion.php";
  
  require("../../Librerias/Zebra.php"); //AÑADIMOS LA LIBRERIA ZEBRA PAGINATION 
  //obteniendo el valor del id de usuario (loging) del formulario menu_estudiante.php
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
  $usuario=$_GET["id"];
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Personal</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css" class="rel">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<div class="container">
  <form name="form1" method="post" action="" class="form-horizontal">
  
  <br>
  <div class="form-group">
    <font face="consolas">
      <label for="dat_bus" class="control-label col-md-2">Nombre (s):</label> 
      <div class="col-md-2">
        <input class="form-control" type="text" name="dat_bus" id="dat_bus" placeholder="Ingrese el nombre">  
      </div>
      <label for="dat_bus1" class="control-label col-md-1">Apellido Paterno:</label> 
      <div class="col-md-2">
        <input class="form-control" type="text" name="dat_bus1" id="dat_bus1" placeholder="Ingrese Apellido Paterno">
      </div>
    
      <label for="dat_bus2" class="control-label col-md-1">Apellido Materno:</label>
      <div class="col-md-2">
        <input class="form-control" type="text" name="dat_bus2" id="dat_bus2" placeholder="Ingrese Apellido Materno">
      </div>
    </font>
  </div>

  <div class="from-group" align="center">
    <button type="submit" id="buscar" class="btn btn-primary">
      <p class="glyphicon glyphicon-search"></p>Buscar
    </button> 
  </div>
  <br>
    
  <table class="table table-hover table-condensed" style="border-color:white;" border='0'>
    <tr>
      <td align="center" bgcolor="#33FF99"><a href="reporte_personal.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-down"></span>Descargar</a></td>
      <td align="center" bgcolor="#33FF99"></td>
      <td bgcolor="#33FF99"><b>NOMBRE(S)</b></td>
      <td bgcolor="#33FF99"><b>APELLIDO PATERNO</b></td>
      <td bgcolor="#33FF99"><b>APELLIDO MATERNO</b></td>
      <td bgcolor="#33FF99"><b>SEXO</b></td>
      <td bgcolor="#33FF99"><b>CARGO</b></td>
      <td align="center" bgcolor="#33FF99"></td>
    </tr>

  <?php
  //obtencion del dato de referencia para la busqueda
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
  $dato=$_POST["dat_bus"];
  $dato1=$_POST["dat_bus1"];
  $dato2=$_POST["dat_bus2"];

//PAGINACION

  //Validacion
  $valida=mysqli_num_rows(mysqli_query($conectador,"select * from personal where nombre like '%$dato%' and ap_paterno like '%$dato1%' and ap_materno like '%$dato2%';"));
  $numEstudiantes=$valida;
  if($valida<=20)
  {
    $porPaginas=$valida;
  }
  else
  {
    $porPaginas=20; 
  }


  $paginas=ceil($numEstudiantes/$porPaginas);

  $paginacion = new Zebra_Pagination();
  $paginacion -> records($numEstudiantes);
  $paginacion -> records_per_page($porPaginas);

  $pag_actual = ((($paginacion->get_page())-1) * $porPaginas);
  
  $res=mysqli_query($conectador,"select ci, ciudad.ciudad, nombre, ap_paterno, ap_materno, sexo, nacimiento, direccion, telefono, celular, correo, formacion.categoria,
  info_formacion.descripcion, nua, cargo.descripcion, fecha_ingreso, estado
  from personal
  join cargo on id_cargo=cargo
  join ciudad on id_ciudad=expedido
  join formacion on id_formacion=formacion
  join info_formacion on id_info_formacion=info_formacion
  where nombre like '%$dato%' and ap_paterno like '%$dato1%' and ap_materno like '%$dato2%' LIMIT $pag_actual,$porPaginas;");
  
  while($f=mysqli_fetch_array($res)){
      if($f[16]==TRUE){
  	?>
  <tr>

    <td> <a href="mod_personal.php?id=<?php echo $f[0]?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Modificar</a></td>
  <td></td>
  <td ><font face="arial" size="2"><?php echo " $f[2] ";?></font></td>
  <td ><font face="arial" size="2"><?php echo " $f[3] ";?></font></td>
  <td ><font face="arial" size="2"><?php echo " $f[4] ";?></font></td>
  <td ><font face="arial" size="2"><?php echo " $f[5] ";?></font></td>
  <td ><font face="arial" size="2"><?php echo " $f[14] ";?></font></td>

  <td>
    <div>
    <input type="hidden" value="<?php echo $f[0];?>" id="ci<?php echo $f[0];?>">
    <input type="hidden" value="<?php echo $f[1];?>" id="expedido<?php echo $f[0];?>">
    <input type="hidden" value="<?php echo $f[2];?>" id="nombre<?php echo $f[0];?>">
    <input type="hidden" value="<?php echo $f[3];?>" id="ap_paterno<?php echo $f[0];?>">
    <input type="hidden" value="<?php echo $f[4];?>" id="ap_materno<?php echo $f[0];?>">
    <input type="hidden" value="<?php echo $f[5];?>" id="sexo<?php echo $f[0];?>">
    <input type="hidden" value="<?php echo $f[6];?>" id="nacimiento<?php echo $f[0];?>">
    <input type="hidden" value="<?php echo $f[7];?>" id="direccion<?php echo $f[0];?>">
    <input type="hidden" value="<?php echo $f[8];?>" id="telefono<?php echo $f[0];?>"> 
    <input type="hidden" value="<?php echo $f[9];?>" id="celular<?php echo $f[0];?>"> 
    <input type="hidden" value="<?php echo $f[10];?>" id="correo<?php echo $f[0];?>"> 
    <input type="hidden" value="<?php echo $f[11];?>" id="formacion<?php echo $f[0];?>">
    <input type="hidden" value="<?php echo $f[12];?>" id="info_formacion<?php echo $f[0];?>"> 
    <input type="hidden" value="<?php echo $f[13];?>" id="nua<?php echo $f[0];?>"> 
    <input type="hidden" value="<?php echo $f[14];?>" id="cargo<?php echo $f[0];?>"> 
    <input type="hidden" value="<?php echo $f[15];?>" id="fecha_ingreso<?php echo $f[0];?>">    
      </div>
<a href="#" data-toggle='modal' data-target='#ver_personal' class='open-Modal btn btn-info' onclick="obtener_datos('<?php echo $f[0]; ?>');"><span class='glyphicon glyphicon-eye-open'></span> ver</a>
  <?php
    include "Modal/verPersonal.php";
  ?>
  </div>
  </td>

  <?php
    }
  }
  mysqli_close($conectador);
  ?>
  </table>
  <center><font color="blue"><b>
  Se encontró <?php echo $valida; ?> registrados</font>
  </center>
 <div align="center">
 <?php
 $paginacion->render();
 ?>
<script type="text/javascript">

    function obtener_datos(id){

      var ci = $("#ci"+id).val();
      var expedido = $("#expedido"+id).val();
      var nombre = $("#nombre"+id).val();
      var ap_paterno = $("#ap_paterno"+id).val();
      var ap_materno = $("#ap_materno"+id).val();
      var sexo = $("#sexo"+id).val();
      var nacimiento = $("#nacimiento"+id).val();
      var direccion = $("#direccion"+id).val();
      var telefono = $("#telefono"+id).val(); 
      var celular = $("#celular"+id).val();
      var correo = $("#correo"+id).val();
      var formacion = $("#formacion"+id).val();
      var info_formacion = $("#info_formacion"+id).val();
      var nua = $("#nua"+id).val();
      var cargo = $("#cargo"+id).val();
      var fecha_ingreso = $("#fecha_ingreso"+id).val();

      $("#paso_ci").val(ci);
      $("#paso_exp").val(expedido);
      $("#paso_nom").val(nombre);
      $("#paso_pat").val(ap_paterno);
      $("#paso_mat").val(ap_materno);
      $("#paso_sex").val(sexo);
      $("#paso_nac").val(nacimiento);
      $("#paso_dir").val(direccion);
      $("#paso_tel").val(telefono);
      $("#paso_cel").val(celular);
      $("#paso_cor").val(correo);
      $("#paso_for").val(formacion +" EN "+ info_formacion);
      //$("#paso_inf").val(info_formacion);
      $("#paso_nua").val(nua);
      $("#paso_car").val(cargo);
      $("#paso_fec").val(fecha_ingreso);
      $("#paso_cat").val(categoria_usuario);
      $("#paso_est").val(estado);
    }
</script>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>

</body>
</html>