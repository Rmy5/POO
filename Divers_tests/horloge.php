<?php
	




	class HorlogeNum{

		private $heure;
		private $min;
		private $sec;

		function __construct($heure, $min, $sec){
			$this->heure = $heure;
			$this->min = $min;
			$this->sec = $sec;
		}

		function recup_time(){
			return '<div style="width:100px; margin:auto; font-size:25px;">'.$this->heure.':'.$this->min.':'.$this->sec.'</div>';
		}

		function avancer_heure($hr){
			$this->heure += $hr;
		}

		function avancer_minute($mn){
			$this->min += $mn;

			if ($mn >= 60) {
				$this->heure += 1;
			}
		}


	}


	$montre = new HorlogeNum(date('H'), date('i'), date('s'));


	$montre->avancer_heure(2);
	$montre->avancer_minute(10);

	echo $montre->recup_time();

	echo '<br><br>';


	include('Carbon.php');


	// $now = new Carbon();

	// echo $now->now();

?>