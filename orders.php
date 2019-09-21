<?php 
include_once("db/db_connect.php");

//Post Params  
$order_date = $_POST[ 'order_date' ];
$item_number = $_POST[ 'item_number' ];
$item_description = $_POST[ 'item_description' ];
$custID = $_POST[ 'custID' ];
$item_size = $_POST[ 'item_size' ];
$item_qty = $_POST[ 'item_qty' ];
$animal = $_POST[ 'animal' ];
$other_explain = $_POST[ 'other_explain' ];
$empID = $_POST[ 'empID' ];


//INSERT 
$query = " INSERT INTO orders (order_date, item_number, item_description, custID, item_size, item_qty, animal, other_explain, empID)  VALUES ('$order_date', '$item_number', '$item_description', '$custID', '$item_size', '$item_qty', '$animal', '$other_explain', '$empID')";
$result = mysqli_query($conn, $query);

if ( $result ) {
	echo 'Success';
	header("Location: index.php");
} else {
	echo 'Query Failed';
}
header("Location: index.php");
?>