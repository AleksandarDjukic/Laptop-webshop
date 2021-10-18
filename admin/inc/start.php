<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "laptop";
	$conn = mysqli_connect($host, $user, $pass, $db);
	if ($conn -> connect_errno) {
		echo "Failed to connect to MySQL: " . $conn -> connect_error;
		exit();
	}
?>