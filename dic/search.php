<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Word</th>
			<th>Definition</th>
		</tr>
	<?php
		require_once('dbconf.php');
		$query = $_GET['query'];

		$sql = "select * from words where word like '%$query%'";
		$result = $conn->query($sql);

		while($row = $result->fetch_object()){
			echo "<tr>";
			echo "<td>$row->word</td>";
			echo "<td>$row->definition</td>";
			echo "</tr>";
		}
	?>
	</table>
</body>
</html>
