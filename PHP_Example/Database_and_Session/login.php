<?php
	session_start();
	if(isset($_COOKIE['username'])){
		$_SESSION['username'] = $_COOKIE['username'];
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	<form role='form' method="post" name="logForm" action="postLogin.php">
		<input type="text" name="username"  placeholder="Username">
		<input type="password" name="password"  placeholder="Password">
		<input type="checkbox" value="r" name="rememberMe"> Remember Me
		<button type="submit">Login</button>
	</form>
	<br>
	<a href="register.php">Register New Account</a>
</body>
</html>