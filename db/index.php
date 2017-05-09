<a href="logout.php">Logout</a><br>
<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('Location: login.php');
	}

	$hostname = '172.17.0.1';
	$username = 'root';
	$password = 'root';
	$dbname = 'learnmysql';
	//Create connection to mysql database
	$conn = new mysqli($hostname, $username, $password, $dbname);

	if($conn->connect_error){
		die('Fail to connect to mysql database');
	}
	//Insert record
	$sql = "insert into users (name, sex, telephone) values ('MAKARA', 'M', '99999')";

	$result = $conn->query($sql);
	if($result){
		echo "Record is created successfully <br>";
		echo "Record id is ".$conn->insert_id ."<br/>";
	}

	//Update record

	$sql = "update users set telephone ='1111111111' where name ='HENG Sotharith'";

	$result = $conn->query($sql);
	if($result){
		echo "Record is update successfully <br/>";
	}

	//Delete Record

	$sql = "delete from users where name = 'HENG Sotharith'";
	$result = $conn->query($sql);
	if($result){
		echo "Record is deleted successfully <br/>";
	}

	//Retrieve record

	$sql = "select * from users";

	$result = $conn->query($sql);

	echo "Total records ".$result->num_rows."<br/>";

	// while($row = $result->fetch_array()){
	// 	echo $row[0]."<br/>";
	// 	echo $row[1]."<br/>";
	// 	echo $row[2]."<br/>";
	// 	echo $row[3]."<br/>";
	// 	echo "<hr/>";
	// }

	// while($row = $result->fetch_assoc()){
	// 	echo $row['id']."<br/>";
	// 	echo $row['name']."<br/>";
	// 	echo $row['sex']."<br/>";
	// 	echo $row['telephone']."<br/>";
	// 	echo "<hr/>";
	// }

	while($row = $result->fetch_object()){
		echo $row->id."<br/>";
		echo $row->name."<br/>";
		echo $row->sex."<br/>";
		echo $row->telephone."<br/>";
		echo "<hr/>";
	}
?>