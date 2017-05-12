<?php
	function calucalateAvgScore($student){
		$totalScore = 0;
		$subjectNumber = 0;
		foreach ($student as $subject => $score) {
			$totalScore += $score;
			$subjectNumber++;
		}


		return $totalScore /= $subjectNumber;
	}


	function calculateScore($student){

		$avgScore = calucalateAvgScore($student);

		echo "$name got $avgScore <br/>";

	}

	function getStudent($name, $students){
		return $students[$name];
	}

	// function displayName($name = "Jonh", $age = 0, $sex){
	// 	echo "Hello $name, you are $age old";
	// }
?>