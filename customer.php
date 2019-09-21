<?php
include_once("db/db_connect.php");

//Post Params   
$cust_name = $_POST['cust_name'];  
$cust_phone = $_POST['cust_phone'];  

//INSERT 
 $query = " INSERT INTO customer (cust_name, cust_phone)  VALUES ('$cust_name', '$cust_phone' ) "; 
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