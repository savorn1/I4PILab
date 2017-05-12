<!DOCTYPE html>
<html>
<head>
	<title>Search Result</title>
	<style type="text/css">
		dd{
			color:blue;
		}
		dt{
			color:red;
		}
	</style>
</head>
<body>
	<?php
	if(isset($_GET['query'])){
		$query = $_GET['query'];
		if($query == ''){
			echo "Query is empty";
		}else{
			$words = array(
				'go' => 'move from one place to another; travel.',
				'work' => 'activity involving mental or physical effort',
				'query' => 'a question, especially one expressing doubt',
				'string' => 'material consisting of threads of cotton'
			);

			if(array_key_exists($query, $words)){
				echo "
					<dl>
						<dt>$query : </dt>
						<dd>$words[$query]</dd>
					</dl>
				";
			}else{
				echo "Word not found";
			}
		}
	}else{
		echo "No query string";
	}
?>
</body>
</html>
