<?php
	$word = $_POST['word'];
	$definition = $_POST['definition'];

	require_once('dbconf.php');

	$sql = "insert into words (word, definition) values('$word', '$definition')";

	$result = $conn->query($sql);
	if($result){
		echo "New word created";
	}else{
		echo "Fail to create new word";
	}
?>