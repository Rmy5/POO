<?php


class groupeController extends coreController{



	public function displayAction(){

		$id = $this->getParams('id');

		$groupe = $this->getModel()->getGroupe($id);
		$tunnels = $this->getModel()->getVillesTunnelsByGroupe($id);
		$nains = $this->getModel()->getNainsByGroup($id);
		$taverne = $this->getModel()->getTaverneByGroupe($id);





		include 'views/groupe/groupe.php';
	}
}