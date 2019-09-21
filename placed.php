<?php
include_once("db/db_connect.php");

$orderID = $_POST['orderID'];  
$placedDate = $_POST['placedDate'];  
$placedBy = $_POST['placedBy'];  

 //INSERT 
 $query = " UPDATE orders SET placedDate = '$placedDate', placedBy = '$placedBy' WHERE orderID = '$orderID' "; 
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