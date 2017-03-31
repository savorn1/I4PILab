<?php
	define("HOST_NAME", "172.17.0.1");
	define("USER_NAME", "root");
	define("PASSWORD", "root");
	define("DB_NAME", "dictionary");

	$conn = new mysqli(HOST_NAME, USER_NAME, PASSWORD, DB_NAME);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>