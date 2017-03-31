<?php
	if(isset($_GET['query'])){
		$query = strtolower($_GET['query']);
		if($query == ''){
			echo "No query string";
		}else{
			$words = [
				'go' => [
					'move from one place to another; travel.',
					'leave; depart.',
					'an attempt or trial at something.',
					'a person\'s turn to use or do something.'
				],
				'work' => 'activity involving mental or physical effort done in order to achieve a result.',
				'query' => 'a question, especially one expressing doubt or requesting information',
				'string' => 'material consisting of threads of cotton, hemp, or other material twisted together to form a thin length'
			];
			//Check if search word exist in Dictionary
			if(array_key_exists($query, $words)){
				//If word exist
				if(is_array($words[$query])){
					echo "
					<dl>
						<dt>$query : </dt>";
						foreach($words[$query] as $el){
							echo "<dd>$el</dd>";
						}
					echo "</dl>";
				}else{
					echo "
					<dl>
						<dt>$query : </dt>
							<dd>$words[$query]</dd>
						</dl>
					";
				}

			}else{
				//If word not exist
				echo "Word not fount";
			}
			
		}
	}else{
		echo "No query string";
	}
?>