<!DOCTYPE html>
<html>
<head>
	<title>Dictionary</title>
</head>
<body>
	<form action="search.php" method="get">
		<input type="text" name="query">
		<button type="submit">Search</button>
	</form>
	<a href="create.php">Add New Word</a>
	<table border="1">
		<tr>
			<th>Word</th>
			<th>Definition</th>
		</tr>
	<?php
		require_once('dbconf.php');
		// echo phpinfo();
		$sql = "select * from words";
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
