<?php 
	// init_set(1);
	// require_once('functions.php');
	require_once('Student.php');
	require_once('Subject.php');
?>
<?php
	$students = [
		"sok" =>[
			"pi" => 90,
			"network" => 80,
			"os" => 50,
			"french" => 45
		],
		"dara" => [
			"pi" => 50,
			"network" => 40,
			"os" => 90,
			"french" => 80
		],
		"saov" => [
			"pi" => 45,
			"network" => 40,
			"os" => 50,
			"french" => 30
		],
		"kimheng" => [
			"pi" => 45,
			"network" => 40,
			"os" => 10,
			"french" => 20
		]
	];
	// displayName();
	// calculateScore("kimheng", $students);
	// calculateScore("kimheng", $students);
	//calculateScore("sok") => 100
	// $student1 = getStudent("kimheng", $students);
	// calculateScore($student1);

	// $student2 = getStudent("sok", $students);
	// calculateScore($student2);

	// $student3 = getStudent("saov", $students);
	// calculateScore($student3);

	// $getStudentFuction = "getStudent";
	// calculateScore($getStudentFuction("kimheng", $students));
	// calculateScore($getStudentFuction("sok", $students));
	// calculateScore($getStudentFuction("saov", $students));
	$sok = new Student('SOK Dara', 'e20104440', 'Male');
	$scorePi = new Subject('PI', 90);
	$sok->setScore($scorePi);

	$scoreFr = new Subject('FR', 50);
	$sok->setScore($scoreFr);

	$scoreEn = new Subject('EN', 60);
	$sok->setScore($scoreEn);

	$scoreNet = new Subject('NT', 50);
	$sok->setScore($scoreNet);

	$sok->display();


	echo $sok->caculateAvgScore();

	// $sok = new Student('Jonh', 'e201044444', 'Male');
	// $sok->display();
?>