<?php
require_once 'nain.class.php';

class NainManager{

	private $_pdo;

	public function __construct($host, $db, $user, $pass){

		$this->_pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $pass);
	}

	public function getAllNain(){

		$nains = array();
		$datas = $this->prepareSelect('SELECT * FROM nain n INNER JOIN ville v ON n.n_ville_fk = v.v_id');

		foreach ($datas as $data) {
			
			$nains[] = new Nain($data);
		}

		return $nains;
	}

	public function getNain($id){

		$nain = array();
		$data = $this->prepareSelect('SELECT * FROM nain n INNER JOIN ville v ON n.n_ville_fk = v.v_id WHERE n_id = ?', $id);
		$nain = $data[0];
		return $nain;
	}

	public function updateNain($nain){

		$upd = $nain->getNom().','.$nain->getBarbe().','.$nain->getNumGroup();
		$this->prepareUpdate('UPDATE nain SET n_nom = ?, n_barbe = ?, n_groupe_fk = ? WHERE id = ?', $nain->getId());
	}


	private function prepareSelect($sql, $id = null){
	
		$q = $this->_pdo->prepare($sql);
		$q->execute(array($id));
		$res = $q->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}

	private function prepareUpdate($sql, $upd, $id){

		$upd = explode(',', $upd);
		$q = $GLOBALS['pdo']->prepare($sql);
		foreach ($upd as $key => $value) {
			$q->bindValue($key+1, $value);
		}
		$q->bindValue((count($upd)+1), $id);
		$q->execute();
	}
}


