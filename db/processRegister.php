<?php
	if(isset($_POST['username']) && $_POST['username']!= ''){
		$username = $_POST['username'];
		$password = $_POST['password'];

		//Check user in database
		$hostname = '172.17.0.1';
		$usernameDB = 'root';
		$passwordDB = 'root';
		$dbname = 'learnmysql';
		//Create connection to mysql database
		$conn = new mysqli($hostname, $usernameDB, $passwordDB, $dbname);

		if($conn->connect_error){
			die('Fail to connect to mysql database');
		}
		require_once('salt.php');
		$password = crypt($password, KEY_SALT);

		$sql = "insert into accounts (username, password) values('$username', '$password')";
		$result = $conn->query($sql);
		if($result){
			header('Location: login.php');
		}else{
			header('Location: register.php');
		}
	}else{
		header('Location: login.php');
	}
?>
