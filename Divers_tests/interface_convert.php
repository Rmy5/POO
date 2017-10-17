<?php
	interface Convertisseur{

		public function convert($devise, $montant);
	}



	class convertDevise implements Convertisseur{

		private $taux = ['USD' => 1.197,'CFA' => 657.43];
		private $result;

		public function convert($devise, $montant){
			
					$this->result = $this->taux[$devise] * $montant;
					echo 'Le résultat de votre conversion de '.$montant.' EUR en '.$devise.' est : '.$this->result.' '.$devise;
			
		}
	}

?>
<form action="" method="POST">Convertir 
	<input type="number" name="montant"> EUR en 
	<select name="devise">
		<option value="USD">USD</option>
		<option value="CFA">CFA</option>
	</select>
	<input type="submit" value="OK">
</form>
<?php

if (isset($_POST['devise']) && isset($_POST['montant'])) {
	$convert = new convertDevise();
	echo $convert->convert($_POST['devise'],$_POST['montant']);
}

// var_dump($convert);


xdebug_debug_zval('$convert');

?>