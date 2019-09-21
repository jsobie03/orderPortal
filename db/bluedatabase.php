<?php
Class dbObj{
	/* Database connection start */
	var $dbhost = "www.jonsobier.com";
	var $username = "jsobieze_roots";
	var $password = "vBUyR.-py*6w";
	var $dbname = "jsobieze_psrsm";
	var $conn;
	function getConnstring() {
		$con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		} else {
			$this->conn = $con;
		}
		return $this->conn;
	}
}
?>