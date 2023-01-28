<?php
    ob_start ();
    require ("../../fpdf181/fpdf.php"); //llamamos a la libreria pdf
	include "../../conexion.php";
	error_reporting(E_ALL);
    ini_set('display_errors', true);
	$usuario=$_GET["user"];//obteniendo el id de usuario que viene de form_pagos.php
	$rude=$_GET["rude"];
	$nom=$_POST["nom_estu"];	
	$cur=$_POST["curso"];
	$im_mensual=$_POST["importe"];

	$y=$_POST["year"];
	$fe=date("y-m-d(H:i:s)",time()); //OJO
	$fecha=$fe;						//OJO
	$user=$_POST["usuario"];
	$descri=$_POST["desc"];
	$anio=date("Y");

	$mes_pagado=$_POST["meses"]; 
	$importes = $_POST["importe_m"];

	$Password=$_POST["cod_estu"]; 
	$tipo_pago = $_POST["tipo_pago"];
	//isertando datos
	
	mysqli_query($conectador,"insert into recibo2(id_recibo,id_usuario,tiempo_cobro,rude_estu,gestion,observaciones)values(null,$usuario,NOW(),'$rude',$y,'$descri');");
	
	$ult_recibo=mysqli_fetch_row(mysqli_query($conectador,"select max(id_recibo) from recibo2;"));
	
    $Registrado=1;
	for($i=0;$i<sizeof($mes_pagado); ++$i)
	{
		mysqli_query($conectador,"insert into `otros_pagos`     (`id_pago`,`nombre_estudiante`,`rude_estu`,`del_curso`,`concepto`,       `mes`,`gestion`,`tiempo_cobro`,`usuario`,`importe_recibido`,`descripcion`,`id_recibo`,`Registrado`,`Password`,`tipo_pago`) values (Null,'$nom','$rude','$cur',$im_mensual,'$mes_pagado[$i]','$y',NOW(),'$user',$importes[$i],'$descri',$ult_recibo[0],$Registrado,'$Password','$tipo_pago');");
		
		//mysqli_query($conectador,"insert into `pago_estudiantes`(`id_pago`,`nombre_estudiante`,`rude_estu`,`del_curso`,`importe_mensual`,`mes`,`gestion`,`tiempo_cobro`,`usuario`,`importe_recibido`,`descripcion`,`id_recibo`,`Registrado`,`Password`,`tipo_pago`) values (Null,'$nom','$rude','$cur',$im_mensual,'$mes_pagado[$i]','$y',NOW(),'$user',$importes[$i],'$descri',$ult_recibo[0],$Registrado,'$Password','$tipo_pago');");
	}
	
//obteniendo el id ultimo
$i=mysqli_query($conectador,"select * from otros_pagos where id_recibo='$ult_recibo[0]';");

$pdf= new FPDF(); ///creamos un objeto
$pdf->AddPage(); //agregamos a una nueva pagina
$pdf->SetFont("Arial","B","10"); //seteamos el tipo de letra estilo y tamano
$pdf->SetX(65);
$pdf->Cell(80,10,"RECIBO DE PAGO",0,1,"C");//ancho, alto, contenido,borde,alineacion de la siguiente celda,alineacion de texto
$pdf->SetX(35);//para darle espacio a la imagen
$pdf->Cell(20,5,"Cajero(a):",0,0);
$pdf->Cell(90,5,$user,0,0,"L");
$pdf->Cell(20,5,"RECIBO Nro.: ".$ult_recibo[0],0,1);
$pdf->SetX(35);//para darle espacio a la imagen
$pdf->Cell(20,5,"Gestion:",0,0);
$pdf->Cell(80,5,utf8_decode($anio),0,1,"L");
$pdf->SetX(35);//para darle espacio a la imagen
$pdf->Cell(20,5,"Alumno(a):",0,0);
$pdf->Cell(80,5,utf8_decode($nom),0,1,"L");
$pdf->SetX(35);//para darle espacio a la imagen
$pdf->Cell(20,5,"Curso:",0,0);
$pdf->Cell(80,5,utf8_decode($cur),0,1,"L");
$pdf->SetX(35);//para darle espacio a la imagen
$pdf->Cell(20,5,utf8_decode("Código est.: "),0,0);
$pdf->Cell(80,5,utf8_decode($Password),0,1,"L");

$pdf->SetY(50);
$pdf->SetX(30);

$pdf->Cell(150,5,"DETALLE","LRBT",2,"C");
$pdf->Cell(75,10,"Concepto","LRB",0,"C");
$pdf->Cell(75,10,"Importe(Bs)","LRB",1,"C");
$total=0;
while($recibo_array=mysqli_fetch_array($i)){
$total=$total+$recibo_array[9];
$pdf->SetX(30);
$pdf->Cell(75, 5,$recibo_array[5],"LR",0,"C");//mes
$pdf->Cell(75,5,$recibo_array[9],"LR",1,"C");//monto
}
$pdf->SetX(30);
$pdf->Cell(75,10,"Total = ","LRBT",0,"R");
$pdf->Cell(75,10,$total,"RBT",1,"C");
$pdf->SetX(80);
$pdf->Cell(150,15,"",0,1,"C");
$pdf->SetX(80);
$pdf->Cell(50,5,"...................................",0,2,"C");
$pdf->Cell(50,5,"Vo.Bo.",0,2,"C");
$pdf->SetX(70);
$pdf->Cell(70,5,"Cochabamba, ".$fecha,0,0,"C");
   
$pdf->Output();
ob_end_flush();
//header("location: reporte.php?dat2=$nom&da2=$user" );
mysqli_close($conectador);
?>