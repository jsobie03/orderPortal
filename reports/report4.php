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
    $this->Cell(80,10,'Closed Order List',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',6);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('orderID'=>'ID', 'order_date'=> 'DATE', 'item_number'=> 'UPC','item_description'=> 'DESC', 'custID'=> 'CUST_ID', 'item_size'=> 'SIZE', 'item_qty'=> 'QTY', 'animal'=> 'ANIMAL', 'other_explain'=> 'OTHER', 'empID'=> 'EMP_ID', 'placedBy'=> 'EMP_PLC', 'placedDate'=> 'PLC_DATE', 'arrivalDate'=> 'ARR_DATE', 'calledDate'=> 'DATE_PH', 'calledBy'=> 'PH_BY', 'pickedUpDate'=> 'DATE_PU', 'orderOpen'=> 'STATUS');
 
$result = mysqli_query($connString, "SELECT orderID, order_date, item_number, item_description, custID, item_size, item_qty, animal, other_explain, empID, placedBy, placedDate, arrivalDate, calledDate, calledBy, pickedUpDate, orderOpen FROM psrsm_spos.orders WHERE orderOpen = '0'") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM orders");
 
$pdf = new PDF('l');
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',6);
foreach($header as $heading) {
$pdf->Cell(16,12,$display_heading[$heading['Field']],1,0,'C');
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(16,12,$column,1,0,'C');
}
$pdf->Output();
?>