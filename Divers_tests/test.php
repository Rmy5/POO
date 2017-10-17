<?php


class Test{

	private static $cpt = 5;

	public function __construct(){

		self::$cpt++;
	}

	public function __destruct(){
		self::$cpt--;
	}

	public static function GetCpt(){

		return self::$cpt;
	}
}

$test1 = new Test();
$test2 = new Test();
$test3 = new Test();
echo Test::GetCpt();
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
// echo cpt().'<br>';
