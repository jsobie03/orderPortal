<?php
include_once("../db/db_connect.php");

$orderID = $_POST['orderID'];  

//INSERT 
 $query = " DELETE FROM `orders` WHERE orderID = '$orderID' "; 
 $result = mysqli_query($conn, $query); 

 if( $result )
 {
 	echo 'Success';
	 header("Location: ../index.php");
 }
 else
 {
 	echo 'Query Failed';
 }
header("Location: ../index.php");
?>