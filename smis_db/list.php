<!DOCTYPE html>
<html>
<head>
	<title>List Student</title>
</head>
<body>
	<table border="1" width="50%">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Sex</td>
			<td>Tel</td>
		</tr>
	<?php 
		require_once('dbconf.php');
		$sql = "select * from students";

		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['sex']."</td>";
			echo "<td>".$row['tel']."</td>";
			echo "</tr>";
		}
		$conn->close();
	?>
	</table>


</body>
</html>