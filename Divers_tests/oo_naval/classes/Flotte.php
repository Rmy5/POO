<?php
		class Flotte extends Arsenal{

		private $_nombreNavires;
		private $_positionFlotte = array();

		function __construct(){
		
		}

		function setNombreNavires(){
			return false;
		}

		function getNombreNavires(){
			return 1;
		}

		function setInfoNavire(){
			return false;
		}

		function getPosition(){
			return $this->_positionFlotte;
		}
		
	}



?>