<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddFont('BebasNeue-Regular','','BebasNeue-Regular.php');
$pdf->AddPage();
$pdf->SetFont('BebasNeue-Regular','',25);
$pdf->Write(15,'Do not be a salad, be the best damn broccoli you could ever be - Pewdiepie');
$pdf->Ln(20,0,0);
$pdf->AddFont('CENTAUR','','CENTAUR.php');
$pdf->SetFont('CENTAUR','',40);
$pdf->Write(15,'Wealth consists not in having great possessions, but in having few wants. - Epictitus');
$pdf->Output();
?>