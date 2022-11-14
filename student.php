<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Name: David Aaron Echon');
$pdf->Ln();
$pdf->Cell(40,10,'Program: BSIT');
$pdf->Ln();
$pdf->Cell(40,10,'Email: echon.davidaaron@auf.edu.ph');
$pdf->Ln();
$pdf->Cell(40,10,'Student Number: 20-1441-991');
$pdf->Output();
?>