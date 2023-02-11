<?php
include "../../conexion.php";
$usuario=$_GET["id"];
?>
<html>
<header>
    <link rel="stylesheet" href="../../css/datatables.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css" class="rel">
</header>
<body>
<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>OPCIONES</th>
        <th>ASEGURADO</th>
        <th>NOMBRE COMPLETO</th>
        <th>CURSO</th>
        <th>TELF PADRE</th>
        <th>TELF MADRE</th>
        <th>TELF TUTOR</th>
        <th>HISTORIA</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $res=mysqli_query($conectador,"select * from estudiante");


    while($f=mysqli_fetch_array($res)){
        $resOtrosPago=mysqli_query($conectador,"select * from otros_pagos WHERE rude_estu='$f[8]' AND (MES like '%SEGURO ACCIDENTE%' OR MES like '%ATENCION MEDICA%' )");
        $countOtrosPago=mysqli_num_rows($resOtrosPago);
        if ($countOtrosPago>0){
            $fOtrosPago=mysqli_fetch_array($resOtrosPago);
            $asegurado=$fOtrosPago[5];
            $asegurado="<span class='label label-success'>$asegurado</span>";
        }else{
            $asegurado="<span class='label label-danger'>NO</span>";
        }
        $resFichaMedica=mysqli_query($conectador,"select * from ficha_medica WHERE nombre='$f[0]' AND apellido_pat='$f[1]' AND apellido_mat='$f[2]'");
        $countFichaMedica=mysqli_num_rows($resFichaMedica);
        if ($countFichaMedica>0){
            $ficha=mysqli_fetch_array($resFichaMedica);
            $id_ficha_estudiante=$ficha[0];
            $showFicha="
<a href='modificar_estudiante_med.php?id=$id_ficha_estudiante' class='btn btn-warning' target='CUERPO'><span class='glyphicon glyphicon-edit'></span>Modificar</a>
<a href='../Pagos/form_consulta.php?id=$id_ficha_estudiante&d2=$usuario' target='_blank' class='open-Modal btn btn-success'><span class='glyphicon glyphicon-usd'></span>Consulta médica</a>
";
        }else{
            $showFicha="<span class='label label-danger'>NO</span>";
        }
        echo "<tr>";
        echo "<td> $showFicha";
        echo "<td>$asegurado</td>";
        echo "<td>$f[0] $f[1] $f[2]</td>";
        echo "<td>$f[9]</td>";
        echo "<td>$f[15]</td>";
        echo "<td>$f[16]</td>";
        echo "<td>$f[18]</td>";
        echo "<td><btn class='btn btn-info' ><span class='glyphicon glyphicon-eye-open'></span>Historia Clínica</btn></td>";
        echo "</tr>";
    }
    ?>
<!--    <a href="#" data-toggle="modal" data-target="#ver_estudiante" class="open-Modal btn btn-info" onclick="obtener_datos('69346051');"><span class="glyphicon glyphicon-eye-open"></span> Historia Clínica</a>-->
    </tbody>
</table>

<script src="../../js/jquery.min.js"></script>
<script src="../../DataTables-1.13.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
        });
    });
</script>
</body>
</html>
