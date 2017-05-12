<?php
	require_once('../class/Student.php');
	require_once('../class/SubjectScore.php');

	$studentList = [];

	$student1 = new Student("e20160001", "SOK", "M", "012222222");

	$subjectScoreNet = new SubjectScore("Network", 60);
	$student1->setScore($subjectScoreNet);

	$subjectScorePi = new SubjectScore("Internet Programming", 40);
	$student1->setScore($subjectScorePi);


	$student2 = new Student("e20160002", "SAOV", "F", "012333333");

	$subjectScoreNet = new SubjectScore("Network", 90);
	$student2->setScore($subjectScoreNet);

	$subjectScorePi = new SubjectScore("Internet Programming", 80);
	$student2->setScore($subjectScorePi);

	$studentList['e20160001'] = $student1;
	$studentList['e20160002'] = $student2;
	// array_push($studentList, $student1);
	// array_push($studentList, $student2);

?>