<?php
include_once("db/db_connect.php");

$orderID = $_POST['orderID'];
$arrivalDate = $_POST['arrivalDate'];  
$calledDate = $_POST['calledDate'];  
$calledBy = $_POST['calledBy']; 

 //INSERT 
 $query = " UPDATE orders SET arrivalDate = '$arrivalDate', calledDate = '$calledDate', calledBy = '$calledBy' WHERE orderID = '$orderID' "; 
 $result = mysqli_query($conn, $query); 

 if( $result )
 {
 	echo 'Success';
	 header("Location: index.php");
 }
 else
 {
 	echo 'Query Failed';
 }

header("Location: index.php");

?>