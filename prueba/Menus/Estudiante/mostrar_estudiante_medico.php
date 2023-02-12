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
        <th>LLAMAR A</th>
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
            $llamar="<b>".$ficha[10]."</b>";
            $showFicha="
<a href='modificar_estudiante_med.php?id=$id_ficha_estudiante' class='btn btn-warning' target='CUERPO'><span class='glyphicon glyphicon-edit'></span>Modificar</a>
<a href='../Pagos/form_consulta.php?id=$id_ficha_estudiante&d2=$usuario' target='_blank' class='open-Modal btn btn-success'><span class='glyphicon glyphicon-usd'></span>Consulta médica</a>
";
            $showHistoria="<button 
                    data-paso_id_estu='".$ficha[0]."'
                    data-paso_nombre='".$ficha[1]."'
                    data-paso_paterno='".$ficha[2]."'
                    data-paso_materno='".$ficha[3]."'
                    data-paso_ci='".$ficha[0]."'
                    data-paso_fecha='".$ficha[6]."'
                    data-paso_sexo='".$ficha[0]."'
                    data-paso_telefono='".$ficha[0]."'
                    data-paso_direccion='".$ficha[5]."'
                    data-paso_fecha_nac='".$ficha[6]."'
                    data-paso_rude='".$ficha[0]."'
                    data-paso_curso='".$ficha[4]."'
                    data-paso_nompat='".$ficha[0]."'
                    data-paso_cipat='".$ficha[0]."'
                    data-paso_telfpat='".$ficha[7]."'
                    data-paso_nommat='".$ficha[0]."'
                    data-paso_cimat='".$ficha[0]."'
                    data-paso_telfma='".$ficha[8]."'
                    data-paso_telftut='".$ficha[0]."'
                    data-paso_numtutor='".$ficha[0]."'
                    data-paso_llamar='".$ficha[10]."'
                    data-paso_peso='".$ficha[11]."'
                    data-paso_estatura='".$ficha[12]."'
                    data-paso_seguro='".$ficha[13]."'
                    data-paso_sangre='".$ficha[15]."'
                    data-paso_alergia='".$ficha[17]."'
                    data-paso_app='".$ficha[20]."'
                    data-paso_apf='".$ficha[21]."'
                    data-paso_fracturas='".$ficha[22]."'
                    data-paso_cirugias='".$ficha[23]."'
                    data-paso_base='".$ficha[24]."'
                    data-paso_citutor='".$ficha[0]."'
                    data-paso_telftutor='".$ficha[9]."'
                    data-paso_lugar='".$ficha[5]."'
                    data-toggle='modal' data-target='#ver_estudiante' class='open-Modal btn btn-info'><span class='glyphicon glyphicon-eye-open'></span> Historia Clínica</button>";
        }else{
            $llamar="";
            $showFicha="<span class='label label-danger'>NO</span>";
            $showHistoria="<span class='label label-danger'>NO</span>";
        }
        echo "<tr>";
        echo "<td> $showFicha";
        echo "<td>$asegurado</td>";
        echo "<td>$f[0] $f[1] $f[2]</td>";
        echo "<td>$f[9]</td>";
        echo "<td>$f[15]</td>";
        echo "<td>$f[16]</td>";
        echo "<td>$f[18]</td>";
        echo "<td>$llamar</td>";
        echo "<td>$showHistoria</td>";
        echo "</tr>";
    }
    ?>
<!--    <a href="#" data-toggle="modal" data-target="#ver_estudiante" class="open-Modal btn btn-info" onclick="obtener_datos('69346051');"><span class="glyphicon glyphicon-eye-open"></span> Historia Clínica</a>-->
    </tbody>
</table>
<?php
include "Modal/verEstudiante_medico.php";
?>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../DataTables-1.13.2/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#ver_estudiante').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes

            //dATOS PRIMARIOS
            $("#paso_id_estu").val(button.data('paso_id_estu'));
            $("#paso_nombre").val(button.data('paso_nombre'));
            $("#paso_paterno").val(button.data('paso_paterno'));
            $("#paso_materno").val(button.data('paso_materno'));
            $("#paso_ci").val(button.data('paso_ci'));
            $("#paso_fecha").val(button.data('paso_fecha'));
            $("#paso_sexo").val(button.data('paso_sexo'));
            $("#paso_telefono").val(button.data('paso_telefono'));
            $("#paso_direccion").val(button.data('paso_direccion'));
            $("#paso_fecha_nac").val(button.data('paso_fecha_nac'));
            $("#paso_rude").val(button.data('paso_rude'));
            $("#paso_curso").val(button.data('paso_curso'));
            //DATOS SECUNDARIOS
            $("#paso_nompat").val(button.data('paso_nompat'));
            $("#paso_cipat").val(button.data('paso_cipat'));
            $("#paso_telfpat").val(button.data('paso_telfpat'));
            $("#paso_nommat").val(button.data('paso_nommat'));
            $("#paso_cimat").val(button.data('paso_cimat'));
            $("#paso_telfma").val(button.data('paso_telfma'));
            $("#paso_telftut").val(button.data('paso_telftut'));
            $("#paso_numtutor").val(button.data('paso_numtutor'));
            $("#paso_llamar").val(button.data('paso_llamar'));
            $("#paso_peso").val(button.data('paso_peso'));
            $("#paso_estatura").val(button.data('paso_estatura'));
            $("#paso_seguro").val(button.data('paso_seguro'));
            $("#paso_sangre").val(button.data('paso_sangre'));
            $("#paso_alergia").val(button.data('paso_alergia'));
            $("#paso_app").val(button.data('paso_app'));
            $("#paso_apf").val(button.data('paso_apf'));
            $("#paso_fracturas").val(button.data('paso_fracturas'));
            $("#paso_cirugias").val(button.data('paso_cirugias'));
            $("#paso_base").val(button.data('paso_base'));

            $("#paso_citutor").val(button.data('paso_citutor'));
            $("#paso_telftutor").val(button.data('paso_telftutor'));

            $("#paso_lugar").val(button.data('paso_lugar'));

            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            // var modal = $(this)
            // modal.find('.modal-title').text('New message to ' + recipient)
            // modal.find('.modal-body input').val(recipient)
        })
        $('#example').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
        });
    });
</script>
</body>
</html>
