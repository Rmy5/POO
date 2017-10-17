<!-- <style type="text/css">#res{position: absolute;left:300;}</style> -->
<?php
	class Navire extends Arsenal{

		private $_nom;
		private $_taille = 3;
		private $_position;

		function __construct($nom,$pos){
			$this->_nom = $nom;
			$this->_position = $pos;
		}

		function setNombreNavires(){
			return false;
		}

		function getNombreNavires(){
			return 1;
		}

		function getInfoNavire(){
			return $this;
		}

		function getPosition(){
			return $this->_position;
		}
		
	}
	
?>