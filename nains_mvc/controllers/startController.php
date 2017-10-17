<?php


class startController extends coreController{


	public function selectAction(){

		$nains = $this->getModel()->getAllNains();
		$villes = $this->getModel()->getAllVilles();
		$groupes = $this->getModel()->getAllGroupes();
		$tavernes = $this->getModel()->getAllTavernes();
		


		include 'views/start/start.php';
	}
}