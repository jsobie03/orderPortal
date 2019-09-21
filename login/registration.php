<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	
	<style>
		
		.btn-primary {
			font-family: Lato;
			font-size: 1.3em;
			width: 25%;
			border: 5px outset black;
			border-radius: 10px;
			margin-top: 1%;
			margin-left:10%;
		}
		
		.login-lost {
			margin-left:10%;
			margin-top:1%;
			font-size:1.3em;
			font-family:Lato;
		}
		
		.login-lost a {
			color:white;
			font-family: Lato;
			font-size: 1.3em;
		}
		
				
		input {
			
			width: 25%;
			padding-left: 5px;
			padding-right: 5px;
			font-family: Lato;
			font-size: 1.5em;
			border: 2px black outset;
			border-radius: 10px;
		}
		
		.login {
			margin-left:33%;
			margin-top: 1%;
		}
		
		.headerline{
			border: 5px solid black;
		}
		
		.backColor {
			background-image:url('../images/default_thumb.jpg'); 
			background-size: cover; 
			background-attachment: scroll;
		}
		
		.login-title {
			margin-left:44%;
			font-family:Bangers;
			font-size: 3em;
			color:white;
		}
		
		p {
			color:white;
			font-family:Lato;
		}	
	</style>
</head>
<body class="backColor">
<?php
require('../db/db_connect.php');
if (isset($_REQUEST['username'])){
$username = stripslashes($_REQUEST['username']);
$username = mysqli_real_escape_string($conn,$username);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($conn,$password);
$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, trn_date)
VALUES ('$username', '".md5($password)."' , '$trn_date')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<img src="../images/logo@2xOption2.png" width="500px" height="100px" style="margin-left:35%;"/>
<hr class="headerline">
	<h1 class="login-title">Register</h1>
	<form class="login" action="" method="post">
<input type="text" class="login-input" name="username" placeholder="Username" required />
    <input type="password" class="login-input" name="password" placeholder="Password"><br/>
    <input type="submit" name="submit" value="Register" class="btn btn-primary"><br/>
  <p class="login-lost">Already Registered? <a href="login.php">Login Here</a></p>
  </form>
 
<?php } ?>
</body>
</html>