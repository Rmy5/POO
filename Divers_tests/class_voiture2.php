<?php
	class Voiture{

		public function avance($distance){
			echo 'on avance de '.$distance;
			return $this;
		}

		public function stop(){
			echo ' stop';
			return $this;
		}

		public function demiTour(){
			echo ' demi tour';
			return $this;
		}


	}

		$voiture = new Voiture();

		$voiture->avance(100)->stop()->demiTour();



?>