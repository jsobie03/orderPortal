<?php
include_once("../db/database.php");
include_once('../libs/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
	$this->Image('../images/logo@2xOption2.png',10,0,100,25,'png');
	
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(100);
    // Title
    $this->Cell(80,10,'Employee List',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',14);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('empID'=>'EMPLOYEE ID', 'emp_name'=> 'EMPLOYEE NAME');
 
$result = mysqli_query($connString, "SELECT * FROM psrsm_spos.employee") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM employee");
 
$pdf = new PDF('l');
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',10);
foreach($header as $heading) {
$pdf->Cell(90,12,$display_heading[$heading['Field']],1,0,'C');
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(90,12,$column,1,0,'C');
}
$pdf->Output();
?>