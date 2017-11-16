<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dkpsemarang";

	$conn = new mysqli($server, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Something wrong go!" . $conn->connect_error);
	}
?>