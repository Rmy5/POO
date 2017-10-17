<?php
	
	class Document{
		private $titre;
		private $auteur;


		function __construct($titre, $auteur){
			$this->titre = $titre;
			$this->auteur = $auteur;
		}

		function __toString(){
			return 'L\'auteur est : '.$this->auteur;
		}

	}


	class Livre extends Document{
		private $editeur;

		function __construct($editeur,$titre,$auteur){

			parent::__construct($titre, $auteur);

			$this->editeur = $editeur;
		}

		function __toString(){
			return 'L\'éditeur est : '.$this->editeur;
		}

	}

	class These extends Document{
		private $discipline;

		function __construct($discipline, $titre, $auteur){

			parent::__construct($titre, $auteur);
			
			$this->discipline = $discipline;
		}

		function __toString(){
			return 'la discipline est : '.$this->discipline;
		}

	}





	$livre = new Livre('Gallimard','Le jour de la nuit','un super auteur');



	echo '<br><br>';


	$document = new Document('monDoc','l\'aut');
	$these = new These('Physique','Le hasard','Wam');

	echo $document.', '.$these;
	
	echo '<br>'.$livre;

	


?>