<?php
include("login/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pet Supply RSM Special Order System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
		
		* {
			background-image: url("images.jpg") cover scroll;
		}
		
		input, select {
			float: right;
			width: 50%;
			padding-left: 5px;
			padding-right: 5px;
			font-family: Lato;
			font-size: 1.5em;
			border: 2px black outset;
			border-radius: 10px;
		}
		
		label {
			text-align: right;
			width: 42%;
			font-size: 1.5em;
			font-family: Lato;
		}
		
		.modal-header .modal-title {
			margin: 0 auto;
			font-family: Lato;
			font-size: 2em;
		}
		
		.btn-group-lg {
			border: 5px solid black;
			border-radius: 15px;
			padding: 10px;
			width: 35%;
			min-height: 460px;
			float: left;
			margin-bottom: 1%;
			margin-right: 1%;
			
		}
		
		#first {
			margin-left:-14%;
		}
		
		.btn-group-lg> .btn,
		.btn-lg {
			border-radius: 10px;
			font-size: 1.5rem;
			
		}
	
		
		h2 {
			text-align:center;
			margin-bottom:1%;
			font-family: Lato;
			color:rgb(238,211,46);
			font-weight: bolder;
			font-size:2.3em;
			-webkit-text-stroke: 1px black;
			letter-spacing: .02em;
		}
		
			
		h3 {
			text-align:center;
			margin-bottom:1%;
			font-family: Lato;
			color:rgb(238,211,46);
			font-weight: bolder;
			font-size:2.3em;
			-webkit-text-stroke: 1px black;
			letter-spacing: .02em;
		}
		
		button.btn-primary {
			font-family: Lato;
			font-size: 1.3em;
			width: 100%;
			border: 5px outset black;
			border-radius: 10px;	
		}
	
		#send_order {
			font-family: Lato;
			font-size: 1.3em;
			margin-left: 30%;
			margin-top: 5%;
			border: 5px outset black;
			border-radius: 10px;
			background-color: rgb(238,211,46);
		}
		
		
		.headerline1 {
			border: 6px solid black;
			margin-bottom:2%;
		}
		
		.headerline2 {
			border: 6px solid black;
			margin-bottom:-2%;
		}
		
	</style>
</head>

<body style="background-image:url('images/default_thumb.jpg'); background-size: cover; background-position: center; background-attachment: scroll;">

	<img src="images/logo@2xOption2.png" width="800px" height="auto" style="margin-top: 2%; margin-left:24%;"/><br/>
	<hr class="headerline2">
		
	<h6 style="color:white; margin-top:3%; margin-left:1%;">Welcome <strong style="color:red;"><?php echo $_SESSION['username']; ?>!</strong><br/> This is your secured index.<div style="float:right; width:200px;"><a href="login/logout.php" style="float:right; color:white; margin-top:3%; margin-right:3%;">Logout</a></div></h6>
<hr class="headerline1">
	<div class="container" style="margin-left:22%;">
		
		<div class="btn-group-lg" id="first">
			<h3>Special Order Book</h3>
			<hr class="headerline1">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1" style="margin-bottom:2%;">Input Special Order</button>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2" style="margin-bottom:2%;">Place Special Order</button><br/>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal3" style="margin-bottom:2%;">Update Special Order</button>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal4" style="margin-bottom:2%;">Close Special Order</button>
		</div>
		
		<div class="btn-group-lg">
			<h2>Reports</h2>
			<hr class="headerline1">
			<a href="reports/report2.php" target="_blank"><button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary" style="margin-bottom:2%;"><i class="fa fa-pdf" aria-hidden="true"></i>
Generate Customer Report</button></a>

			<a href="reports/report3.php" target="_blank"><button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary" style="margin-bottom:2%;"><i class="fa fa-pdf" aria-hidden="true"></i>
Generate Employee Report</button></a><br/>


			<a href="reports/report.php" target="_blank"><button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary" style="margin-bottom:2%;"><i class="fa fa-pdf" aria-hidden="true"></i>
Generate Open Order Report</button></a>

			<a href="reports/report4.php" target="_blank"><button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary" style="margin-bottom:2%;"><i class="fa fa-pdf" aria-hidden="true"></i>
Generate Closed Order Report</button></a>
		</div>
		
		<div class="btn-group-lg" style="width:35%;">
			<h2>Add and Search</h2>
			<hr class="headerline1">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal6" style="margin-bottom:2%;">Add Employee Info</button><br/>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal5" style="margin-bottom:2%;">Add Customer Info</button>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal7" style="margin-bottom:2%;">Search By Customer Name</button>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal8" style="margin-bottom:2%;">Search By Customer Phone</button>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal9" style="margin-bottom:2%;">Delete An Order</button>
		</div>
		
		

		<!-- The Modal -->
		<div class="modal" id="Modal1">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Order Form</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<fieldset class="psrsmFormFS">
							<form id="form1" name="form1" method="post" action="orders.php">
								<label for="order_date">Order Date: </label>&nbsp;<input type="date" name="order_date" id="order_date"/>
								<br class="clear"/>
								<label for="item_number">Item Number: </label>&nbsp;<input type="text" name="item_number" id="item_number"/>
								<br class="clear"/>
								<label for="item_description">Item Description: </label>&nbsp;<input type="text" name="item_description" id="item_description"/>
								<br class="clear"/>
								<label for="custID">Cust ID: </label>&nbsp;<input type="text" name="custID" id="custID"/>
								<br class="clear"/>
								<label for="item_size">Item Size: </label>&nbsp;<input type="text" name="item_size" id="item_size"/>
								<br class="clear"/>
								<label for="item_qty">Item Qty: </label>&nbsp;<input type="text" name="item_qty" id="item_qty"/>
								<br class="clear"/>
								<label for="animal">Animal: </label>&nbsp;
								<select name="animal" id="animal">
									<option value="Dog">Dog</option>
									<option value="Cat">Cat</option>
									<option value="Small Animal">Small Animal</option>
									<option value="Horse">Horse</option>
									<option value="Fish">Fish</option>
									<option value="Lizard">Lizard</option>
									<option value="Bird">Bird</option>
									<option value="Other">Other</option>
								</select>
								<br class="clear"/>
								<label for="other_explain">Other Explain: </label>&nbsp;<input type="text" name="other_explain" id="other_explain"/>
								<br class="clear"/>
								<label for="empID">Emp ID: </label>&nbsp;<input type="text" name="empID" id="empID"/>
								<br class="clear"/>
								<button type="submit" id="send_order" class="btn-lg">Submit Order</button>
							</form>
						</fieldset>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>

		<!-- The Modal -->
		<div class="modal" id="Modal2">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Update Order</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<fieldset class="psrsmFormFS">
							<form action="placed.php" method="POST" class="psrsmForm">
								<label>Order ID:</label>
								<input class="orderID" name="orderID" placeholder="Enter Order ID" type="text"/>
								<label for="placedDate">Placed Date:</label><input type="date" name="placedDate" id="placedDate"/>
								<br class="clear"/>
								<label for="placedBy">Placed By:</label><input type="text" name="placedBy" id="placedBy"/>
								<br class="clear"/>
								<button type="submit" id="send_order" class="btn-lg">Update Order</button>
							</form>
						</fieldset>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>


		<!-- The Modal -->
		<div class="modal" id="Modal3">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Add Date of Arrival and Customer Call</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<fieldset class="psrsmFormFS">
							<form id="form1" name="form1" method="post" action="arrived.php">
								<label for="orderID">Order ID:</label><input type="text" name="orderID" id="orderID"/>
								<br class="clear"/>
								<label for="arrivalDate">Arrival Date:</label><input type="date" name="arrivalDate" id="arrivalDate"/>
								<br class="clear"/>
								<label for="calledDate">Called Date:</label><input type="date" name="calledDate" id="calledDate"/>
								<br class="clear"/>
								<label for="calledBy">Called By:</label><input type="text" name="calledBy" id="calledBy"/>
								<br class="clear"/>
								<button type="submit" id="send_order" class="btn-lg">Update Order</button>
							</form>
						</fieldset>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>

		<!-- The Modal -->
		<div class="modal" id="Modal4">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Close the Order</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<fieldset class="psrsmFormFS">
							<form id="form1" name="form1" method="post" action="closed.php">
								<label for="orderID">Order ID:</label><input type="text" name="orderID" id="orderID"/>
								<br class="clear"/>
								<label for="pickedUpDate">Picked Up Date:</label><input type="date" name="pickedUpDate" id="pickedUpDate"/>
								<br class="clear"/>
								<button type="submit" id="send_order" class="btn-lg">Close Order</button>
							</form>
						</fieldset>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>
		<!-- The Modal -->
		<div class="modal" id="Modal5">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Add Customer Info</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<fieldset class="psrsmFormFS">
							<form id="form1" name="form1" method="post" action="customer.php">
								<label for="cust_name">Customer Name:</label><input type="text" name="cust_name" id="cust_name"/>
								<br class="clear"/>
								<label for="cust_phone">Customer Phone:</label><input type="text" name="cust_phone" id="cust_phone"/>
								<br class="clear"/>
								<button type="submit" id="send_order" class="btn-lg">Add Customer</button>
							</form>
						</fieldset>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>

		<!-- The Modal -->
		<div class="modal" id="Modal6">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<fieldset class="psrsmFormFS">
							<form id="form1" name="form1" method="post" action="employee.php">
								<label for="empID">Employee ID</label><input type="text" name="empID" id="empID"/>
								<br class="clear"/>
								<label for="emp_name">Employee Name</label><input type="text" name="emp_name" id="emp_name"/>
								<br class="clear"/>
								<button type="submit" id="send_order" class="btn-lg">Add Employee</button>
							</form>
						</fieldset>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>

		<!-- The Modal -->
		<div class="modal" id="Modal7">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Search Orders By Customer</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<fieldset class="psrsmFormFS">
							<form id="form1" name="form1" method="post" action="reports/customerOrders.php">
								<label for="custName">Customer Name</label><input type="text" name="custName" id="custName"/>
								<br class="clear"/>
								<button type="submit" id="send_order" class="btn-lg">Search</button>
							</form>
						</fieldset>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>
		
		<!-- The Modal -->
		<div class="modal" id="Modal8">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Search Orders By Customer Phone</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<fieldset class="psrsmFormFS">
							<form id="form1" name="form1" method="post" action="reports/custPhone.php">
								<label for="custPhone">Customer Phone</label><input type="text" name="custPhone" id="custPhone"/>
								<br class="clear"/>
								<button type="submit" id="send_order" class="btn-lg">Search</button>
							</form>
						</fieldset>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>
		
				<!-- The Modal -->
		<div class="modal" id="Modal9">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Delete An Order</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<fieldset class="psrsmFormFS">
							<form id="form1" name="form1" method="post" action="reports/delete.php">
								<label for="orderID">Enter Order ID:</label><input type="text" name="orderID" id="orderID"/>
								<br class="clear"/>
								<button type="submit" id="send_order" class="btn-lg">Delete</button>
							</form>
						</fieldset>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>