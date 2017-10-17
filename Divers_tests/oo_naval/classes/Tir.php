<?php
	class Tir{
		private $_coord;
		private $_touche;
		private $_rate;
		
		// On passe les coordonnées de tir en GET
		function __construct($coord){
			$this->_coord = $coord;
		}

		function testTir($nav){

			// On initialise les tables
			if (!isset($_SESSION['touche'])) $_SESSION['touche'] = array();
			if (!isset($_SESSION['rate'])) $_SESSION['rate'] = array();	

			// On compare les coordonnées de tir et la position du navire
			if (in_array($this->_coord, $nav->getPosition())) $this->_touche = $this->_coord;	
			
			else $this->_rate = $this->_coord;

			// On teste si le tir existe déjà dans la table, et sinon on l'ajoute (raté ou touché) 
			if (isset($this->_touche ) && !empty($_SESSION['touche'])){
				if (!in_array($this->_touche, $_SESSION['touche'])) array_push($_SESSION['touche'], $this->_touche);

			}
			elseif (empty($_SESSION['touche']) && !empty($this->_touche)) array_push($_SESSION['touche'], $this->_touche);

			if (isset($this->_rate) && !empty($_SESSION['rate'])){
				if (!in_array($this->_rate, $_SESSION['rate'])) array_push($_SESSION['rate'], $this->_rate);				
			}
			elseif (empty($_SESSION['rate']) && !empty($this->_rate)) array_push($_SESSION['rate'], $this->_rate);	
		}

		function afficheTir(){
			echo $this->_touche;
			print_r($_SESSION['touche']);

			if (isset($this->_touche)) echo '<div id="res" style="color:red; font-size:20px; position:absolute; right:100px;"><br><strong>touché<strong></div>';
			
			if (isset($this->_rate)) echo '<div id="res" style="color:yellow; font-size:20px;"><br><strong>raté<strong></div>';

			if (isset($_SESSION['touche'])) {
				foreach ($_SESSION['touche']as $v) echo '<style>#'.$v.'{background-color:red;}</style>';	
			}

			if (isset($_SESSION['rate'])) {
				foreach ($_SESSION['rate']as $v) echo '<style>#'.$v.'{background-color:yellow;}</style>';	
			}
			

		}
	}



?>