<?php 
include_once("db/db_connect.php");

//Post Params 
$empID = $_POST['empID'];
$emp_name = $_POST['emp_name'];  

//INSERT 
 $query = " INSERT INTO employee (empID, emp_name)  VALUES ('$empID', '$emp_name' ) "; 
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