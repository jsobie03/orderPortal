<html>
  <head>
    <title>Number Maker</title>
    <style>
      table, th, td, tr {
  		  border: 3px solid black;
		  padding:3px;
		  text-align:center;
}
		table {
			margin: 0 auto;
		}
		h1 {
			font-size:2em;
			text-align: center;
		}
		
		button {
			font-family: Lato;
			font-size: 2em;
			background-color: rgb(238,211,26);
			width: 10%;
			border: 5px outset black;
			border-radius: 10px;
			margin-left:45%;
			margin-top: 2%;
			cursor: pointer;
		}
    </style>
  </head>
<body>
	<h1>ORDER HISTORY BY CUSTOMER</h1>
<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "psrsm_spos";

// Create connection
$link = new mysqli($servername, $username, $pass, $dbname);
$custName = $_POST[ 'custName' ];
// Check connection
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);
} 
echo "<table>";
$sql = "SELECT a.item_number, 
			   a.item_description, 
			   a.custID, 
			   b.custID, 
			   a.item_size, 
			   a.item_qty, 
			   a.animal, 
			   b.cust_name, 
			   b.cust_phone 
			   FROM orders a, customer b
			   WHERE a.custID = b.custID
			   AND b.cust_name = '$custName' ";
$result = $link->query($sql);

if ($result->num_rows > 0) {
	echo "<tr><th>Customer ID</th><th>Customer Name</th><th>Customer Phone</th><th>UPC</th><th>Description</th><th>Size</th><th>QTY</th><th>Animal</th></tr> ";
// output data of each row
while($row = $result->fetch_assoc()) {
	
echo "<tr><td> " . $row['custID']. "</td><td> " . $row['cust_name']. "</td><td> " . $row['cust_phone']. "</td><td> " . $row['item_number']. "</td><td> " . $row['item_description']. "</td><td> " . $row['item_size']. "</td><td> " . $row['item_qty']. "</td><td> " . $row['animal']. "</td></tr> ";
}
} else {
echo "0 results";
}

echo "</table>";
$link->close();
?>
	<a href="../index.php"><button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary">
Home</button></a>
	</body>
</html>