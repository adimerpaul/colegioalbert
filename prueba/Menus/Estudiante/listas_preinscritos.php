<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
header("Pragma: public");
header("Expires: 0");
$filename = "Cantidad-PreInscritos.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

            include "../../conexion.php";
            //obtencion del dato de referencia para la busqueda
            error_reporting(E_ALL ^ E_NOTICE);
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LISTAS DE TODOS LOS ESTUDIANTES</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css" class="rel">
</head>
<body>
<br>
<div class="container">

      
            <div class="col-md-4">
              <img src="../../imagenes/logo.jpg" width="90" heiht="70" align="right">
            </div>
          
          </div>
      </form>  
  
  <div class="panel panel-primary">
    <div class="panel-heading">
      <b>LISTA TOTAL DE ESTUDIANTES PRE INSCRITOS
    </div>
    <div class="panel-body">
    <?php

            // ************** INICIAL ****************************//
            $pkam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='Pre kinder AMARILLO' and Registrado='1'");
            $rowpkam = mysqli_fetch_array($pkam);
            
            $pkaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='Pre kinder AZUL' and Registrado='1'");
            $rowpkaz = mysqli_fetch_array($pkaz);
            
            $pkb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='Pre kinder BLANCO' and Registrado='1'");
            $rowpkb = mysqli_fetch_array($pkb);
            

            $kam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='Kinder AMARILLO' and Registrado='1'");
            $rowkam = mysqli_fetch_array($kam);
            
            $kaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='Kinder AZUL' and Registrado='1'");
            $rowkaz = mysqli_fetch_array($kaz);
            
            $kb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='Kinder BLANCO' and Registrado='1'");
            $rowkb = mysqli_fetch_array($kb);








            // ************** PRIMARIA ****************************//

              $ppam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='1° de primaria AMARILLO' and Registrado='1'");
              $row1pam = mysqli_fetch_array($ppam);

              $ppaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='1° de primaria AZUL' and Registrado='1'");
              $row1paz = mysqli_fetch_array($ppaz);

              $ppb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='1° de primaria BLANCO' and Registrado='1'");
              $row1pb = mysqli_fetch_array($ppb);



              $spam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='2° de primaria AMARILLO' and Registrado='1'");
              $row2pam = mysqli_fetch_array($spam);

              $spaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='2° de primaria AZUL' and Registrado='1'");
              $row2paz = mysqli_fetch_array($spaz);

              $spb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='2° de primaria BLANCO' and Registrado='1'");
              $row2pb = mysqli_fetch_array($spb);


              $tpam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='3° de primaria AMARILLO' and Registrado='1'");
              $row3pam = mysqli_fetch_array($tpam);

              $tpaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='3° de primaria AZUL' and Registrado='1'");
              $row3paz = mysqli_fetch_array($tpaz);

              $tpb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='3° de primaria BLANCO' and Registrado='1'");
              $row3pb = mysqli_fetch_array($tpb);


              $cpam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='4° de primaria AMARILLO' and Registrado='1'");
              $row4pam = mysqli_fetch_array($cpam);

              $cpaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='4° de primaria AZUL' and Registrado='1'");
              $row4paz = mysqli_fetch_array($cpaz);

              $cpb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='4° de primaria BLANCO' and Registrado='1'");
              $rowcpb = mysqli_fetch_array($cpb);



              $qpam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='5° de primaria AMARILLO' and Registrado='1'");
              $row5pam = mysqli_fetch_array($qpam);

              $qpaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='5° de primaria AZUL' and Registrado='1'");
              $row5paz = mysqli_fetch_array($qpaz);

              $qpb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='5° de primaria BLANCO' and Registrado='1'");
              $row5pb = mysqli_fetch_array($qpb);



              $spam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='6° de primaria AMARILLO' and Registrado='1'");
              $row6pam = mysqli_fetch_array($spam);

              $spaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='6° de primaria AZUL' and Registrado='1'");
              $row6paz = mysqli_fetch_array($spaz);

              $spb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='6° de primaria BLANCO' and Registrado='1'");
              $row6pb = mysqli_fetch_array($spb);


              //  ************    secundaria*************
              
              $psam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='1° de secundaria AMARILLO' and Registrado='1'");
              $row1sam = mysqli_fetch_array($psam);

              $psaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='1° de secundaria AZUL' and Registrado='1'");
              $row1saz = mysqli_fetch_array($psaz);

              $psb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='1° de secundaria BLANCO' and Registrado='1'");
              $row1sb = mysqli_fetch_array($psb);



              $ssam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='2° de secundaria AMARILLO' and Registrado='1'");
              $row2sam = mysqli_fetch_array($ssam);

              $ssaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='2° de secundaria AZUL' and Registrado='1'");
              $row2saz = mysqli_fetch_array($ssaz);

              $ssb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='2° de secundaria BLANCO' and Registrado='1'");
              $row2sb = mysqli_fetch_array($ssb);


              $tsam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='3° de secundaria AMARILLO' and Registrado='1'");
              $row3sam = mysqli_fetch_array($tsam);

              $tsaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='3° de secundaria AZUL' and Registrado='1'");
              $row3saz = mysqli_fetch_array($tsaz);

              $tsb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='3° de secundaria BLANCO' and Registrado='1'");
              $row3sb = mysqli_fetch_array($tsb);


              $csam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='4° de secundaria AMARILLO' and Registrado='1'");
              $row4sam = mysqli_fetch_array($csam);

              $csaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='4° de secundaria AZUL' and Registrado='1'");
              $row4saz = mysqli_fetch_array($csaz);

              $csb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='4° de secundaria BLANCO' and Registrado='1'");
              $rowcsb = mysqli_fetch_array($csb);



              $qsam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='5° de secundaria AMARILLO' and Registrado='1'");
              $row5sam = mysqli_fetch_array($qsam);

              $qsaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='5° de secundaria AZUL' and Registrado='1'");
              $row5saz = mysqli_fetch_array($qsaz);

              $qsb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='5° de secundaria BLANCO' and Registrado='1'");
              $row5sb = mysqli_fetch_array($qsb);



              $ssam=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='6° de secundaria AMARILLO' and Registrado='1'");
              $row6sam = mysqli_fetch_array($ssam);

              $ssaz=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='6° de secundaria AZUL' and Registrado='1'");
              $row6saz = mysqli_fetch_array($ssaz);

              $ssb=mysqli_query($conectador,"SELECT COUNT(*) FROM estudiante WHERE CURSO='6° de secundaria BLANCO' and Registrado='1'");
              $row6sb = mysqli_fetch_array($ssb);


              


            
          ?>
        <table class="table table-bordered" align="center">
          <tr>
          <th>Pre kinder Amarillo</th>
          <th>Pre Kinder Blanco</th>
          <th>Pre Kinder Azul</th>  

          <th>Kinder Amarillo</th>
          <th>kinder Blanco</th>
          <th>Kinder Azul</th>  
          </tr>
          <tr>
          <td> <?php echo $rowpkam[0] ?></td>
          <td> <?php echo $rowpkb[0] ?></td>
          <td> <?php echo $rowpkaz[0] ?></td>

          <td> <?php echo $rowkam[0] ?></td>
          <td> <?php echo $rowkb[0] ?></td>
          <td> <?php echo $rowkaz[0] ?></td>
          </tr>



        <tr>
          
        

          <th>1ro prim Amarillo</th>
          <th>1ro prim Blanco</th>
          <th>1ro prim Azul</th>

          <th>2do prim Amarillo</th>
          <th>2do prim Blanco</th>
          <th>2do prim Azul</th>

          <th>3ro prim Amarillo</th>
          <th>3ro prim Blanco</th>
          <th>3do prim Azul</th>

          <th>4to prim Amarillo</th>
          <th>4to prim Blanco</th>
          <th>4to prim Azul</th>
   
          <th>5to prim Amarillo</th>
          <th>5to prim Blanco</th>
          <th>5to prim Azul</th>

          <th>6to prim Amarillo</th>
          <th>6to prim Blanco</th>
          <th>6to prim Azul</th>

        
        <tr>
          <td> <?php echo $row1pam[0] ?></td>
          <td> <?php echo $row1pb[0] ?></td>
          <td> <?php echo $row1paz[0]?></td>

          <td> <?php echo $row2pam[0] ?></td>
          <td> <?php echo $row2pb[0] ?></td>
          <td> <?php echo $row2paz[0] ?></td>
          
          <td> <?php echo $row3pam[0] ?></td>
          <td> <?php echo $row3pb[0]?></td>
          <td> <?php echo $row3paz[0] ?></td>

          <td> <?php echo $row4pam[0] ?></td>
          <td> <?php echo $rowcpb[0] ?></td>
          <td> <?php echo $row4paz[0]?></td>

          <td> <?php echo $row5pam[0] ?></td>
          <td> <?php echo $row5pb[0]  ?></td>
          <td> <?php echo $row5paz[0] ?></td>

          <td> <?php echo $row6pam[0] ?></td>
          <td> <?php echo $row6pb[0] ?></td>
          <td> <?php echo $row6paz[0] ?></td>
          
        </tr>


</th>
<tr>

          <th>1ro Sec Amarillo</th>
          <th>1ro Sec Blanco</th>
          <th>1ro Sec Azul</th>

          <th>2do Sec Amarillo</th>
          <th>2do Sec Blanco</th>
          <th>2do Sec Azul</th>

          <th>3ro Sec Amarillo</th>
          <th>3ro Sec Blanco</th>
          <th>3do Sec Azul</th>

          <th>4to Sec Amarillo</th>
          <th>4to Sec Blanco</th>
          <th>4to Sec Azul</th>
   
          <th>5to Sec Amarillo</th>
          <th>5to Sec Blanco</th>
          <th>5to Sec Azul</th>

          <th>6to Sec Amarillo</th>
          <th>6to Sec Blanco</th>
          <th>6to Sec Azul</th>
      </tr>
        <tr>
          <td> <?php echo $row1sam[0] ?></td>
          <td> <?php echo $row1sb[0] ?></td>
          <td> <?php echo $row1saz[0] ?></td>

          <td> <?php echo $row2sam[0] ?></td>
          <td> <?php echo $row2sb[0] ?></td>
          <td> <?php echo $row2saz[0] ?></td>
          
          <td> <?php echo $row3sam[0] ?></td>
          <td> <?php echo $row3sb[0] ?></td>
          <td> <?php echo $row3saz[0] ?></td>

          <td> <?php echo $row4sam[0] ?></td>
          <td> <?php echo $rowcsb[0] ?></td>
          <td> <?php echo $row4saz[0] ?></td>

          <td> <?php echo $row5sam[0] ?></td>
          <td> <?php echo $row5sb[0] ?></td>
          <td> <?php echo $row5saz[0] ?></td>

          <td> <?php echo $row6sam[0] ?></td>
          <td> <?php echo $row6sb[0] ?></td>
          <td> <?php echo $row6saz[0] ?></td>
          
        </tr>
        <tr>
                      
            
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>