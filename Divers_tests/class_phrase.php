<?php
	class Phrase{
		public $sujet;
		public $verbe;
		public $complement;

		function __construct($suj, $ver, $comp){
			$this->sujet = $suj;
			$this->verbe = $ver;
			$this->complement = $comp;
		}

		function affiche_phrase(){
			return $this->sujet.' '.$this->verbe.' '.$this->complement.'<br>';
		}

		function mettre_pluriel(){
			if ($this->sujet == "Je") {
				$this->sujet = "Nous";
			}
			if ($this->sujet == "Nous") {
				$this->verbe = "allons";
			}
		}
	}

	class Document{

		public $classeur = array();

		public function ajout_phrase($phrs){
			$this->classeur[] = $phrs;
		}

		function affiche_classeur(){
			foreach ($this->classeur as $ph){
				echo $ph->sujet.' '.$ph->verbe.' '.$ph->complement.'<br>';
			}
		}
	}


$phrase1 = new Phrase("Je","vais","au cinema");
$phrase2 = new Phrase("Elle","fait","du karaté");
$phrase3 = new Phrase("Nous","jouons","du pipeau");
// print_r($phrase1);

$doc = new Document();


$doc->ajout_phrase($phrase1);
$doc->ajout_phrase($phrase2);
$doc->ajout_phrase($phrase3);



print_r($doc->affiche_classeur());








?>