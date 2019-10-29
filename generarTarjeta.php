<?php
define('FPDF_FONTPATH','font/');

use Fpdf\Fpdf;

require_once 'conexion.php';

$sql="select * from persona";
$result = $cnx->query($sql);

$pdf=new FPDF();

$pdf->AddPage(); 
$pdf->SetFont('Arial','B',16);
$pdf->Cell(180,10,'Listado de Personas',0,1,'C');
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,"Id",1);
$pdf->Cell(40,6,"Nombres",1);
$pdf->Cell(40,6,"Apellidos",1);
$pdf->Cell(40,6,"E-Mail",1);
$pdf->Cell(20,6,"Telefono",1);
$pdf->Ln();
$pdf->SetFont('Arial','',10);
while($registro=$result->fetchObject())
{
	$pdf->Cell(10,5,$registro->idpersona,0);
	$pdf->Cell(40,5,$registro->nombres,0);
	$pdf->Cell(40,5,$registro->apellidos,0);
	$pdf->Cell(40,5,$registro->email,0);
	$pdf->Cell(20,5,$registro->telefono,0);
	$pdf->Ln();
}
$pdf->Output();
?>