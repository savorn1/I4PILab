<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
</head>
<body>
	<table>
	<?php
		$arr = [
			"k1" => "key1",
			"k2" => "key2",
			"k3" => "key2",
		];
	
		foreach ($arr as $key => $value) {
	?>
		<tr>
			<td><?= $key ?></td>
			<td><?= $value ?></td>
		</tr>

	<?php
		}
	?>
	</table>

</body>
</html>