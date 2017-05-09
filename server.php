<?php
	if(isset($_POST['firstName'])){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<h1>Welcome <?php echo $firstName.' '.$lastName ?></h1>
</body>
</html>