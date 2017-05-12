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

		$sql = "select * from accounts where username = '$username' and password='$password'";

		$result = $conn->query($sql);

		if($result->num_rows > 0){			
			session_start();
			$_SESSION['username'] = $username;
			if($_POST['rememberMe'] == 'r'){
				setcookie('username', $username, time()+60*60*24);
			}
			header('Location: index.php');
		}else{
			echo "Wrong username or password";
		}
	}else{
		header('Location: login.php');
	}
?>