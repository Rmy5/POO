<?php
require_once 'config.php';

class SPDO{

	private static $_instance = NULL;
	private static $_pdo;


	private function __construct(){

		try{
			self::$_pdo = new PDO('mysql:host='._HOST_.';dbname='._DB_.';charset=utf8', _USER_, _PASS_, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(exception $e){ die('Erreur '.$e->getMessage()); }
	}



	public function getInst(){

		if (is_null(self::$_instance)) self::$_instance = new self();
		
		return self::$_instance;
	}



	private function MakeStatement($sql, $params = array()){

		$statement = false;
		if(count($params) == 0)
		{
			$statement = self::$_pdo->query($sql);
		}
		else
		{
			if(($statement = self::$_pdo->prepare($sql)) !== false)
			{
				foreach ($params as $placeholder => $value)
				{
					if($statement->bindValue($placeholder, $value=='' ? null : $value) === false)
						return false;
				}
				if(!$statement->execute())
				{
					return false;
				}
			}
		}
		
		return $statement;
	}



	public function makeSelect($sql, $params = array(), $fetchStyle = PDO::FETCH_ASSOC, $fetchArg = NULL){

		$statement = self::MakeStatement($sql, $params);

		if($statement === false)
		{
			return false;
		}

		$data = is_null($fetchArg) ? $statement->fetchAll($fetchStyle) : $statement->fetchAll($fetchStyle, $fetchArg);
		$statement->closeCursor();

		return $data;
	}


	public function makeInsert($sql, $params = array()){

		$statement = self::MakeStatement($sql, $params);
		if($statement === false)
		{
			return false;
		}
		$statement->closeCursor();

		return true;
	}


}











