<?php


class nainController extends coreController{


	public function displayAction(){

		$id = $this->getParams('id');

		$nain = $this->getModel()->getNain($id);
		$ville = $this->getModel()->getVilleByNain($id);
		$taverne = $this->getModel()->getTaverneByNain($id);
		$groupe = $this->getModel()->getGroupeByNain($id);
		$VillesTunnel = $this->getModel()->getVillesTunnelsByNain($id);
		

		include 'views/nain/nain.php';
	}
}