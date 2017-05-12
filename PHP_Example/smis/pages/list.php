<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<?php
		require_once('../data/students.php');
	?>
	<table border="1" width="50%">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Sex</th>
			<th>Tel</th>
			<th>Score</th>
			<th>Action</th>
		</tr>
	<?php
		foreach($studentList as $key=>$student){
			// $student = $studentList[$i];
			echo "<tr>";
			echo "<td>$student->id</td>";
			echo "<td>$student->name</td>";
			echo "<td>$student->sex</td>";
			echo "<td>$student->tel</td>";
			echo "<td>".$student->avgScore()."</td>";
			echo "<td>".$student->viewButton().$student->deleteButton()."</td>";
			echo "</tr>";
		}
	?>
	</table>
</body>
</html>