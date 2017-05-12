<!DOCTYPE html>
<html>
<head>
	<title>New Word</title>
</head>
<body>
	<form name="newWord" action="createWordDb.php" method="post">
		<label>Word</label><br>
		<input type="text" name="word"><br/>
		<label>Definition</label><br/>
		<textarea name="definition"></textarea>
		<br/>
		<button type="submit">Save</button>
	</form>
</body>
</html>