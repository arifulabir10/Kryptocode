<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname="software_lab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_errno) {
	printf("Connect failed: %s\n", $conn->connect_error);
	exit();
	}

?>