<?php
//comensando la creacion del reporte manual para exportar datos a excel
include "../../conexion.php";
require_once ('C:\xampp\htdocs\Classes\PHPExcel.php');
$excel= new PHPExcel();
$excel->getProperties()->setCreator("wilfredo saez")
                       ->setLastModifiedBy("wilfredo saez")
                       ->setTitle("Office 2010 XLSX Documento de prueba")
                       ->setSubject("Office 2010 XLSX Documento de prueba")
                       ->setDescription("Documento de prueba para Office 2010 XLSX, generado usando clases de PHP.")
                       ->setKeywords("office 2010 openxml php")
                       ->setCategory("Archivo con resultado de prueba");
// combinamos celdas
$excel->setActiveSheetIndex(0)->mergeCells('E1:K1');
// introducimos datos
$sheet=$excel->getActiveSheet();
$sheet->setTitle("Personal");//nombre de la hoja
        $sheet->setCellValue("E1","Lista de personal Albert Einstein");
        $sheet->setCellValue("A2","C.I.");
        $sheet->setCellValue("B2","Expedido");
        $sheet->setCellValue("C2","Nombre");
        $sheet->setCellValue("D2","Apellido paterno");
        $sheet->setCellValue("E2","Apellido materno");
        $sheet->setCellValue("F2","Sexo");
        $sheet->setCellValue("G2","Fecha de nacimiento");
        $sheet->setCellValue("H2","Direccion");
        $sheet->setCellValue("I2","Telefono");
        $sheet->setCellValue("J2","Celular");
        $sheet->setCellValue("K2","E-mail");
        $sheet->setCellValue("L2","Formacion");
        $sheet->setCellValue("M2","NUA");
        $sheet->setCellValue("N2","Cargo");
        $sheet->setCellValue("O2","Fecha de ingreso");
//aplicando fuente en la primera linea
$negrita=array('font'=>array('bold'=>true,),'alignment'=>array('horizontal'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER));
$excel->getActiveSheet()->getStyle('E1:K1')->applyFromArray($negrita);
//ancho de las columnas
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(25);
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
$excel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
$excel->getActiveSheet()->getColumnDimension('M')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('N')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('O')->setWidth(15);
//la consulta
$personal=mysqli_query($conectador,"select ci, ciudad.ciudad, nombre, ap_paterno, ap_materno,sexo, nacimiento, direccion,
telefono, celular, correo, formacion.categoria, info_formacion.descripcion, nua, cargo.descripcion, fecha_ingreso, estado from personal
  join ciudad on id_ciudad=expedido
  join formacion on id_formacion=formacion
  join info_formacion on id_info_formacion=info_formacion
  join cargo on id_cargo=cargo;");
//desde la fila donde empezara a crear el reporte
$celda=3;
while($personal_array=mysqli_fetch_array($personal)){
//poniendo el valor del arreglo en variable
      $ci=$personal_array[0];
      $exp=$personal_array[1];
      $nom=$personal_array[2];
      $ap_p=$personal_array[3];
      $ap_m=$personal_array[4];
      $sexo=$personal_array[5];
      $nac=$personal_array[6];
      $dir=$personal_array[7];
      $tel=$personal_array[8];
      $cel=$personal_array[9];
      $email=$personal_array[10];
      $for=$personal_array[11];
      $info_f=$personal_array[12];
      $nua=$personal_array[13];
      $cargo=$personal_array[14];
      $f_ingreso=$personal_array[15];
      $estado=$personal_array[16];
//asignando las celdas a variable
      $a="A".$celda;
      $b="B".$celda;
      $c="C".$celda;
      $d="D".$celda;
      $e="E".$celda;
      $f="F".$celda;
      $g="G".$celda;
      $h="H".$celda;
      $i="I".$celda;
      $j="J".$celda;
      $k="K".$celda;
      $l="L".$celda;
      $m="M".$celda;
      $n="N".$celda;
      $o="O".$celda;
//asignando a las celdas los valores
      $excel->setActiveSheetIndex(0)
      ->setCellValue($a, $ci)
      ->setCellValue($b, $exp)
      ->setCellValue($c, $nom)
      ->setCellValue($d, $ap_p)
      ->setCellValue($e, $ap_m)
      ->setCellValue($f, $sexo)
      ->setCellValue($g, $nac)
      ->setCellValue($h, $dir)
      ->setCellValue($i, $tel)
      ->setCellValue($j, $cel)
      ->setCellValue($k, $email)
      ->setCellValue($l, $for." en ".$info_f)
      ->setCellValue($m, $nua)
      ->setCellValue($n, $cargo)
      ->setCellValue($o, $f_ingreso);
      $celda=$celda+1;
}
//$excel->setActiveSheetIndex(0);

//$excel->getActiveSheet()->getStyle('A1:E1')->applyFromArray($estiloTituloColumnas);
//$exel->getActiveSheet()->getColumnDimension('A1:E1')->setAutoSize(true); 
//configurando su salida
header("Content-Type: application/vnd.ms-excel");
$nombre="Personal AE".date("y-m-d h:i:s");
header("Content-Disposition: attachment; filename=\"$nombre.xls\"");
header("Cache-Control: max_age=0");
$writer=PHPExcel_IOFactory::createWriter($excel,"Excel5");
$writer->save("php://output");
?>