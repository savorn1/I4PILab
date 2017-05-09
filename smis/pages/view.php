<!DOCTYPE html>
<html>
<head>
	<title>View Student</title>
</head>
<body>
	<?php
		require_once('../data/students.php');
		$sid = $_POST['sid'];
		$student = $studentList[$sid];

	?>
	<ul>
		<li><?= $student->id ?></li>
		<li><?= $student->name ?></li>
		<li><?= $student->sex ?></li>
		<li><?= $student->tel ?></li>
		<li><?= $student->avgScore() ?></li>
	</ul>
	<table border="1" width="50%">
		<tr>
			<th>Subject</th>
			<th>Score</th>
		</tr>
		<?php
			foreach ($student->scores as $subject) {
				echo "<tr>";
				echo "<td>$subject->name</td>";
				echo "<td>$subject->score</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>
