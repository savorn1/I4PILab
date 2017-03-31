<?php
	require_once('Subject.php');

	class Student{
		// public $name = '';
		// private $id = '';
		// protected $nationality = '';
		// public static $institude = 'ITC';
		public $name;
		public $id;
		public $sex;
		private $score = [];

		function __construct($name, $id, $sex){
			$this->name = $name;
			$this->id = $id;
			$this->sex = $sex;
		}

		function setScore($score){
			array_push($this->score, $score);
		}

		function getScore(){
			return $this->score;
		}

		function caculateAvgScore(){
			$avgScore = 0;
			for($i=0; $i<count($this->score); $i++){
				$subject = $this->score[$i];
				$avgScore += $subject->score;
			}
			return $avgScore/count($this->score);
		}

		function display(){
			// echo "$this->name is $this->sex and has id = $this->id ";
			echo "<ul>
					<li>$this->id</li>
					<li>$this->name</li>
					<li>$this->sex</li>
				</ul>
			";
		}
	}
?>