<?php
	
	class Nain{

		private $_id;
		/**
		* string Le nom du nain
		*/
		private $_nom;
		/**
		* string La longueur de la barbe du nain en cm
		*/
		private $_barbe;
		/**
		* string Le nom de la ville d'origine
		*/
		private $_origine;
		/**
		* string L'id du groupe
		*/
		private $_numGroup;

		public function __construct($data)
		{
			$this->_id = $data['n_id'];
			$this->setNom($data['n_nom']);
			$this->setbarbe($data['n_barbe']);
			$this->setOrigine($data['v_nom']);
			$this->setNumGroup($data['n_groupe_fk']);
		}

		private function hydrate($data){

			foreach ($data as $name => $value) 
			{	
				$name = substr($name, 2);
				$name = str_replace('_', ' ', $name);
				$name = ucwords($name);
				$name = str_replace(' ', '', $name);
				$name = 'Set'.$name;
				// var_dump($name);
				$this->$name($value);
			}
		}

		public function getId(){

			return $this->_id;
		}

		public function getNom(){

			return $this->_nom;
		}

		public function setNom($nom){

			// if (ctype_alpha($nom))
			$this->_nom = $nom;
		}

		public function getBarbe(){

			return $this->_barbe;
		}

		public function setBarbe($barbe){

			if (is_numeric($barbe))
			$this->_barbe = (float)$barbe;
		}

		public function getOrigine(){

			return $this->_origine;
		}

		public function setOrigine($origine){

			// if (ctype_alpha($origine))
			$this->_origine = $origine;
		}

		public function getNumGroup(){

			return $this->_numGroup;
		}

		public function setNumGroup($numGroup){

			if (ctype_digit(strval($numGroup)))
			$this->_numGroup = (int)$numGroup;
		}

		public function sePresenter(){


		}

	}


?>