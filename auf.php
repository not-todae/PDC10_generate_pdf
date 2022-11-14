<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Brief History of AUF',0,10,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Write(10, 'It was established on May 25, 1962, by Agustin P. Angeles, Barbara Yap-Angeles, and their family. The university was granted autonomous status and certified with the Institutional Quality Assurance Monitoring and Evaluation (IQuAME) by the Commission on Higher Education. It is an ISO-certified university.');
$pdf->Output();
?>