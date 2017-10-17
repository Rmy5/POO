<style type="text/css">

			body{
				/*background-color: rgba(69, 71, 69, 1);*/
				background-color: rgba(0, 0, 0, .8);
				color: rgba(255,255,255,.8);
			}	
			.xdebug-var-dump {
				font-size: 17px;
				/*color: rgba(255,255,255,.8);*/
			}
		 	.xdebug-error {
				width: 60%;
				margin: 10px;
				border-collapse: collapse;
				border-right: 1px #5b5440 solid;
				border-left: 1px #5b5440 solid;
			}
			.xdebug-error th,.xdebug-error td {
				padding: 4px 6px 3px 5px;
				border-top: 1px #5b5440 solid;
				border-bottom: 1px #5b5440 solid;
				border-left: none;
				border-right: none;
			}	 
			.xdebug-error th:first-child {
				font-size: 16px;
				padding-top: 0;
			} 
			.xdebug-error th {
				background-color: #E4DBBF;
				color: #383127;
			} 
			.xdebug-error td {
				background-color: #fff;
			}
			.xdebug-error span {
				background-color: inherit !important;
				color: #DC5B21 !important;
			}
			
			font[color="#00bb00"] ,
			font[color="#4e9a06"] {
			 color: #618e34 !important;
			}

			font[color="#ff0000"] ,
			font[color="#cc0000"] {
			 color: #F46F03 !important;
			}

			font[color="#3465a4"] {
			 color: #0075c2 !important;
			}
</style>

<?php
	
interface iParleur{

	function Parler();
}

abstract class EtreVivant{

	private $age;

	public abstract function Manger();
}


class Humain extends EtreVivant implements iParleur{

	public function Manger(){

		echo 'Je mange de tout';
	}

	public function Parler(){

		echo 'Salut je m\'appelle Bob';
	}
}


abstract class Oiseau extends EtreVivant{

	public function Voler(){

		echo 'Flap flap';
	}
}


class Pigeon extends Oiseau{

	public function Manger(){

		echo 'Je mange des graines';
	}
}


class Perroquet extends Oiseau implements iParleur{

	public function Manger(){

		echo 'Je mange des cacahuètes';
	}

	public function Parler(){

		echo 'Cacahuèèèèèèèèète';
	}
}

function Vieillire(EtreVivant $$etre){


}