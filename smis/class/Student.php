<?php
	class Student{
		public $id;
		public $name;
		public $sex;
		public $tel;
		public $scores = [];

		public function __construct($id, $name, $sex, $tel){
			$this->id = $id;
			$this->name = $name;
			$this->sex = $sex;
			$this->tel = $tel;
		}

		public function setScore($score){
			array_push($this->scores, $score);
		}

		public function avgScore(){
			$totalScore = 0;
			$numberSubject = count($this->scores);
			for($i = 0; $i < $numberSubject; $i++){
				$totalScore += $this->scores[$i]->score;
			}
			$avgScore = $totalScore/$numberSubject;
			return $avgScore;
		}

		public function viewButton(){
			return "
				<form action='view.php' method='post' name='viewForm'>
					<input type='hidden' value='$this->id' name='sid'>
					<button type='submit'>View</button>
				</form>
			";
		}

		public function deleteButton(){
			return "
				<form action='delete.php' method='post' name='deleteForm'>
					<input type='hidden' value='$this->id' name='sid'>
					<button type='submit'>Delete</button>
				</form>
			";
		}

	}
?>