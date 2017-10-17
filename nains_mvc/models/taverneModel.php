<?php


class taverneModel extends coreModel{


	public function getAllTavernes(){

		$sql = 'SELECT * FROM taverne';

		if (($data = $this->makeSelect($sql)) !== false) 
		{
			$tavernes = array();

			foreach ($data as $taverne) {

				$tavernes[] = new Taverne($taverne);
			}
			return $tavernes;
		}

		return false;
	}

	public function getTaverne($id){


		$sql = 'SELECT t.* FROM taverne t  WHERE t.t_id = :id';

		if (($data = $this->makeSelect($sql, array(':id' => $id))) !== false) {
			
			$taverne = new Taverne($data[0]);
			return $taverne;
		}

		return false;
	}




	public function getTaverneVille($id){

		$sql = 'SELECT v.v_id, v.v_nom, t.t_id, t.t_nom FROM ville v INNER JOIN taverne t ON v.v_id = t.t_ville_fk WHERE v_id = :id';

		if (($data = $this->makeSelect($sql, array(':id' => $id))) !== false) 
		{
			$tavernes = array();

			foreach ($data as $taverne) {

				$tavernes[] = new Taverne($taverne);
			}
			return $tavernes;
		}

		return false;
	}


	public function getTaverneByNain($id){


		$sql = 'SELECT t.* FROM nain n LEFT JOIN groupe g ON n.n_groupe_fk = g.g_id LEFT JOIN ville v ON n.n_ville_fk = v.v_id LEFT JOIN taverne t ON g.g_taverne_fk = t.t_id WHERE n.n_id = :id';

		if (($data = $this->makeSelect($sql, array(':id' => $id))) !== false) {
			
			$taverne = new Taverne($data[0]);

			return $taverne;
		}

		return false;
	}

	public function getTaverneByGroupe($id){
		

		$sql = 'SELECT t.t_id, t.t_nom, t.t_chambres, t.t_blonde, t.t_brune, t.t_rousse, t.t_rousse, t.t_ville_fk t_ville FROM nain n LEFT JOIN groupe g ON n.n_groupe_fk = g.g_id LEFT JOIN ville v ON n.n_ville_fk = v.v_id LEFT JOIN taverne t ON g.g_taverne_fk = t.t_id WHERE g.g_id = :id';

		if (($data = $this->makeSelect($sql, array(':id' => $id))) !== false) {
			
			$taverne = new Taverne($data[0]);

			return $taverne;
		}

		return false;
	}


	public function getVille($id){

		$vModel = new villeModel();
		$ville = $vModel->getVille($id);
		return $ville;
	}


	public function getChambresLibres($id){

		$sql = 'SELECT COUNT(nain.n_id) AS nbNains, taverne.t_chambres - COUNT(nain.n_id) AS chambresLibres FROM taverne LEFT JOIN groupe ON taverne.t_id = groupe.g_taverne_fk LEFT JOIN nain ON groupe.g_id = nain.n_groupe_fk LEFT JOIN ville v ON taverne.t_ville_fk = v.v_id WHERE taverne.t_id = :id';

		if (($count = $this->makeSelect($sql, array(':id' => $id))) !== false) {
			
			return $count;
		}

		return false;
	}



}