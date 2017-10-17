<?php
	class Voiture{
		public $marque;
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

		function __destruct(){
			echo 'Destruction de '.$this->marque.' '.$this->modele.'<br>';
		}

	}




	$voiture1 = new Voiture('VW','Polo','1000');
	$voiture1 = null;
	print_r($voiture1);

	echo '<br><br>';

	$voiture2 = new Voiture('GG','IJKL','1000');
	print_r($voiture2);

	echo '<br><br>';

	$voiture3 = clone $voiture2;
	$voiture3->marque = 'Peugeot';
	print_r($voiture3);

	echo '<br><br>';

// SI UN DESTRUCTEUR EXISTE LES INSTANCES SONT DETRUITES AUTOMATIQUEMENT EN FIN DE SCRIPT
	// SI ON ASSIGNE "null" A UNE REFERENCE L'INSTANCE EST DETRUITE IMMEDIATEMENT



?>