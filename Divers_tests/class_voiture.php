<?php
	class Voiture{
		private $marque;
		private $modele;
		private $prix;
		private $kilometrage;
		private $revision = 15000;
		private $deplacement = 1200;

		function __construct($marque, $modele, $prix){
			$this->marque = $marque;
			$this->modele = $modele;
			$this->prix = $prix;
		}

		function prevenir_revision(){
			if ($this->kilometrage >= 15000) {
				echo 'Vous devriez faire une revision';
			}
		}

		function deplacement(){
			
			$this->kilometrage += $this->deplacement;
		}

		function get_kilometre(){
			return $this->kilometrage;
		}

	}


	$car = new Voiture('VW','Polo','1000');
	
	$car->deplacement();
	$car->deplacement();
	$car->deplacement();
	$car->deplacement();
	$car->deplacement();
	$car->deplacement();
	$car->deplacement();
	$car->deplacement();
	$car->deplacement();
	$car->deplacement();
	$car->deplacement();
	$car->deplacement();
	$car->deplacement();
	

	$car->prevenir_revision();
echo '<br>';

	print_r($car->get_kilometre());


	



?>