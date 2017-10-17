<?php


class nainModel extends coreModel{


	public function getAllNains(){

		$sql = 'SELECT n_id, n_nom, n_barbe, n_groupe_fk n_groupe, v.v_nom v_ville FROM nain n INNER JOIN ville v ON n.n_ville_fk = v.v_id';

		if (($data = $this->makeSelect($sql)) !== false) 
		{
			$nains = array();

			foreach ($data as $nain) {

				$nains[] = new Nain($nain);
			}
			return $nains;
		}

		return false;
	}


	public function getNain($id){

		$sql = 'SELECT n_id, n_nom, n_barbe, n_groupe_fk n_groupe, n_ville_fk n_ville FROM nain n WHERE n_id = :id';

		if (($data = $this->makeSelect($sql, array(':id' => $id))) !== false) {
			
			$nain = new Nain($data[0]);

			return $nain;
		}

		return false;
	}

	public function getNainsByGroup($id){

		$sql = 'SELECT * FROM nain WHERE n_groupe_fk = :id';

		if (($data = $this->makeSelect($sql, array(':id' => $id))) !== false) 
		{
			$nains = array();

			foreach ($data as $nain) {

				$nains[] = new Nain($nain);
			}
			return $nains;
		}

		return false;
	}


	public function getNainsVille($ville){

		$sql = 'SELECT n_id, n_nom, n_barbe, n_groupe_fk n_groupe, v.v_nom v_ville FROM nain n INNER JOIN ville v ON n.n_ville_fk = v.v_id WHERE n.n_ville_fk = :ville';

		if (($data = $this->makeSelect($sql, array(':ville' => $ville))) !== false) 
		{
			$nains = array();

			foreach ($data as $nain) {

				$nains[] = new Nain($nain);
			}
			return $nains;
		}

		return false;
	}

	public function getVilleByNain($id){

		$vModel = new villeModel();
		$ville = $vModel->getVilleByNain($id);
		return $ville;
	}

	public function getTaverneByNain($id){

		$tModel = new taverneModel();
		$taverne = $tModel->getTaverneByNain($id);
		return $taverne;
	}

	public function getGroupeByNain($id){

		$gModel = new groupeModel();
		$groupe = $gModel->getGroupeByNain($id);
		return $groupe;
	}

	public function getVillesTunnelsByNain($id){

		$gModel = new groupeModel();
		$VillesTunnel = $gModel->getVillesTunnelsByNain($id);
		$VillesTunnel = $VillesTunnel[0];
		return $VillesTunnel;
	}


}