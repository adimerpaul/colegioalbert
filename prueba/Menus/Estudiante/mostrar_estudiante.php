<?php
  include "../../conexion.php";
  require("../../Librerias/Zebra.php"); //AÑADIMOS LA LIBRERIA ZEBRA PAGINATION 
  //obteniendo el valor del id de usuario (loging) del formulario menu_estudiante.php
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);
  
  $usuario=$_GET["id"];
  if($usuario==0) //PARA QUE NO SE BORRE EL ID EN EL MOMENTO QUE BUSQUE
  {
    $usuario=$_GET["idaux"];
  }
  $lista=$_GET["lista"];
  $dato=$_GET["dat_bus"];
  $dato1=$_GET["dat_bus1"];
  $dato2=$_GET["dat_bus2"];
  $dato3=$_GET["dat_bus3"];
  ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">    
  <title>Estudiante</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css" class="rel">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<div class="container">
  <form name="form1" method="get" action="" class="form-horizontal">
  <br>
  <div class="container">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  <div class="form-group"><font face="calibri">
      <div class="input-group">
      <span class="input-group-addon" for="dat_bus2">Código estudiante:</span>
        <input class="form-control" type="text" name="dat_bus3" id="dat_bus3" placeholder="Ingrese código estudiante" value="<?php if($dato3) {echo $dato3;} ?>">

        <span class="input-group-addon">Nombre(s):</span>
        <input class="form-control" type="text" name="dat_bus" id="dat_bus" placeholder="Ingrese el nombre" value="<?php if($dato) {echo $dato;} ?>">  
        
         
        <span class="input-group-addon">Ap.Paterno:</span>
        <input class="form-control" type="text" name="dat_bus1" id="dat_bus1" placeholder="Ingrese Apellido Paterno" value="<?php if($dato1) {echo $dato1;} ?>">
        
        <span class="input-group-addon" for="dat_bus2">Ap.Materno:</span>
        <input class="form-control" type="text" name="dat_bus2" id="dat_bus2" placeholder="Ingrese Apellido Materno" value="<?php if($dato2) {echo $dato2;} ?>">
        
        
        <!--IMPORTANTE PARA NO PERDER EL VALOR DEL ID-->
          <input type="hidden" name="idaux" id="idaux" value="<?php echo $usuario; ?>">
        
      </div></font>
        <div class="row">
      <div class="col-md-4" align="center">
            <button type="submit" id="buscar" class="btn btn-primary">
      <p class="glyphicon glyphicon-search"></p>Buscar
            </button> 
      </div>
        <div class="col-md-4" align="center">
        <input type=radio name=lista value=activos>Activos<br>
        <input type=radio name=lista value=retirados>Retirados
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>

  </div>
  </div>
    </div>
  </div>
  </form>
  
  <table class="table table-hover table-condensed" id="table2excel" style="border-color:white;" border='0'>
    <tr>
      <td align="center" bgcolor="#33FF99"><a href="reporte_estudiante.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-down"></span>Descargar</a></td>
      <td align="center" bgcolor="#33FF99"></td>
      <td align="center" bgcolor="#33FF99"></td>
      <td bgcolor="#33FF99"><b>NOMBRE(S)</b></td><!--0-->
      <td bgcolor="#33FF99"><b>APELLIDO PATERNO</b></td><!--1-->
      <td bgcolor="#33FF99"><b>APELLIDO MATERNO</b></td><!--2-->
      <td bgcolor="#33FF99"><b>SEXO</b></td><!--7-->
      <td bgcolor="#33FF99"><b>CURSO</b></td><!--9-->
      <td align="center" bgcolor="#33FF99"></td>
    </tr>

  <?php
  //obtencion del dato de referencia para la busqueda
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_DEPRECATED);

//PAGINACION

  //Validacion
  $valida=mysqli_num_rows(mysqli_query($conectador,"select * from estudiante where nombre like '%$dato%' and apellido_pat like '%$dato1%' and apellido_mat like '%$dato2%';"));
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
  $res=mysqli_query($conectador,"select * from estudiante where nombre like '%$dato%' and apellido_pat like '%$dato1%' and apellido_mat like '%$dato2%' and Password like '%$dato3%' and estado=true LIMIT $pag_actual,$porPaginas;");
  /*if($lista=="todos"|| $f[19]==TRUE || $f[19]==FALSE){
  $res=mysql_query("select * from estudiante where nombre like '%$dato%' and apellido_pat like '%$dato1%' and apellido_mat like '%$dato2%' LIMIT $pag_actual,$porPaginas;"); //LIMIT: LIMITA UN RANGO DE LA DB.. SINTAXIS-> LIMIT(INICIO,CANTIDAD)
  }*/
  if($lista=="activos"){
  $res=mysqli_query($conectador,"select * from estudiante where nombre like '%$dato%' and apellido_pat like '%$dato1%' and apellido_mat like '%$dato2%'and Password like '%$dato3%'  and estado=TRUE LIMIT $pag_actual,$porPaginas;"); //LIMIT: LIMITA UN RANGO DE LA DB.. SINTAXIS-> LIMIT(INICIO,CANTIDAD)
  }
  if($lista=="retirados"){
  $res=mysqli_query($conectador,"select * from estudiante where nombre like '%$dato%' and apellido_pat like '%$dato1%' and apellido_mat like '%$dato2%' and Password like '%$dato3%'  and estado=FALSE LIMIT $pag_actual,$porPaginas;"); //LIMIT: LIMITA UN RANGO DE LA DB.. SINTAXIS-> LIMIT(INICIO,CANTIDAD)
  }
  
  while($f=mysqli_fetch_array($res)){
  	?>
  <tr>
  <td><a href="modificar_estudiante.php?id=<?php echo $f[8]?>" class="btn btn-warning"  target="CUERPO"><span class="glyphicon glyphicon-edit"></span>Modificar</a>
  </td>
  <td><a href="../Pagos/form_pagos.php?id=<?php echo $f[8];?>&d2=<?php echo $usuario;?>" target="_blank" class="open-Modal btn btn-success"><span class="glyphicon glyphicon-usd"></span>Mensualidad</a>

  </td>
  <td><a href="../Pagos/form_pagos2.php?id=<?php echo $f[8];?>&d2=<?php echo $usuario;?>" target="_blank" class="open-Modal btn btn-primary"><span class="glyphicon glyphicon-usd"></span>Otros</a>
  
  </td>

  <!--PASAMOS VALORES AL SCRIPT CON UN ID IDENTIFICADOR______________ ORDEN SEGUN BASE DE DATOS-->
  <div>
    <input type="hidden" value="<?php echo $f[0];?>" id="nombres<?php echo $f[8];?>">
    <input type="hidden" value="<?php echo $f[1];?>" id="paterno<?php echo $f[8];?>">
    <input type="hidden" value="<?php echo $f[2];?>" id="materno<?php echo $f[8];?>">
    <input type="hidden" value="<?php echo $f[3];?>" id="ci<?php echo $f[8];?>">
    <input type="hidden" value="<?php echo $f[4];?>" id="fecha<?php echo $f[8];?>">
    <input type="hidden" value="<?php echo $f[5];?>" id="direccion<?php echo $f[8];?>">
    <input type="hidden" value="<?php echo $f[6];?>" id="telefono<?php echo $f[8];?>">
    <input type="hidden" value="<?php echo $f[7];?>" id="sexo<?php echo $f[8];?>">
    <input type="hidden" value="<?php echo $f[8];?>" id="id<?php echo $f[8];?>"> <!--CODIGO RUDE-->
    <input type="hidden" value="<?php echo $f[9];?>" id="curso<?php echo $f[8];?>"> 
    <input type="hidden" value="<?php echo $f[10];?>" id="nom_pat<?php echo $f[8];?>"> <!--Nombre padre-->
    <input type="hidden" value="<?php echo $f[11];?>" id="ci_pat<?php echo $f[8];?>"> <!--CI padre-->
    <input type="hidden" value="<?php echo $f[12];?>" id="nom_mat<?php echo $f[8];?>"> <!--Nombre madre-->
    <input type="hidden" value="<?php echo $f[13];?>" id="ci_mat<?php echo $f[8];?>"> <!--CI Madre-->
    <input type="hidden" value="<?php echo $f[14];?>" id="nom_tutor<?php echo $f[8];?>"> <!--Nombre tutor-->
    <input type="hidden" value="<?php echo $f[15];?>" id="telf_pat<?php echo $f[8];?>"> <!--Telefono padre-->
    <input type="hidden" value="<?php echo $f[16];?>" id="telf_mat<?php echo $f[8];?>"> <!--Telefono madre-->
    <input type="hidden" value="<?php echo $f[17];?>" id="ci_tutor<?php echo $f[8];?>"><!--CI TUTOR-->
    <input type="hidden" value="<?php echo $f[18];?>" id="telf_tutor<?php echo $f[8];?>"> <!--TEelefono TUTOR-->
  </div>
  
  
  <td ><font face="arial" size="2"><?php echo " $f[0] ";?></font></td>
  <td ><font face="arial" size="2"><?php echo " $f[1] ";?></font></td>
  <td ><font face="arial" size="2"><?php echo " $f[2] ";?></font></td>
  <td ><font face="arial" size="2"><?php echo " $f[7] ";?></font></td>
  <td ><font face="arial" size="2"><?php echo " $f[9] ";?></font></td>

  <td>
  
  <a href="#" data-toggle='modal' data-target='#ver_estudiante' class='open-Modal btn btn-info' onclick="obtener_datos('<?php echo $f[8];?>');"><span class='glyphicon glyphicon-eye-open'></span> ver</a>
 
  <?php
    include "Modal/verEstudiante.php";
  ?>
  </div>
  </td>
  <?php
  }
  mysqli_close($conectador);
  ?>
  </table>
  <center><font color="blue"><b>
  ____________________________________________Existen <?php echo $valida; ?> estudiante(s) registrados__________________________________________
  </font>
  </b>
  </center>

 <div align="center">
 <?php
 $paginacion->render();
 ?>
 </div>
</div>
<!--SCRIPT PARA EL PASO DE VALORES A LAS VENTANAS EMERGENTES-->
<script type="text/javascript">

    function obtener_datos(id){
      String(id);
      var nombres = $("#nombres"+id).val();

      var paterno = $("#paterno"+id).val();
      var materno = $("#materno"+id).val();
      var ci = $("#ci"+id).val();
      var fecha = $("#fecha"+id).val();
      var sexo = $("#sexo"+id).val();
      var telefono = $("#telefono"+id).val();
      var direccion = $("#direccion"+id).val();
      var rude = $("#id"+id).val();
      var curso = $("#curso"+id).val();
      var nom_pat = $("#nom_pat"+id).val();
      var ci_pat = $("#ci_pat"+id).val();
      var telf_pat = $("#telf_pat"+id).val();
      var nom_mat = $("#nom_mat"+id).val();
      var ci_mat = $("#ci_mat"+id).val();
      var telf_mat = $("#telf_mat"+id).val();
      var nom_tutor = $("#nom_tutor"+id).val();
      var ci_tutor = $("#ci_tutor"+id).val();
      var telf_tutor = $("#telf_tutor"+id).val();
      //dATOS PRIMARIOS
      $("#paso_nombre").val(nombres);
      $("#paso_paterno").val(paterno);
      $("#paso_materno").val(materno);
      $("#paso_ci").val(ci);
      $("#paso_fecha").val(fecha);
      $("#paso_sexo").val(sexo);
      $("#paso_telefono").val(telefono);
      $("#paso_direccion").val(direccion);
      $("#paso_rude").val(rude);
      $("#paso_curso").val(curso);
      //DATOS SECUNDARIOS
      $("#paso_nompat").val(nom_pat);
      $("#paso_cipat").val(ci_pat);
      $("#paso_telfpat").val(telf_pat);
      $("#paso_nommat").val(nom_mat);
      $("#paso_cimat").val(ci_mat);
      $("#paso_telfmat").val(telf_mat);
      $("#paso_numtutor").val(nom_tutor);
      $("#paso_citutor").val(ci_tutor);
      $("#paso_telftutor").val(telf_tutor);
    }
</script>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>