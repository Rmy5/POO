<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			body{
				font-size: 20px;
			}
			td, table{
				border: solid 1px black;
				background-color: lightblue;
			}
		</style>
	</head>
	<body>
		<?php
			// echo 'Hello world';
		

			// $number = 5;

			// echo '<br>Je veux afficher le nombre $number';

			// echo "<br>Je veux afficher le nombre $number";

			// echo '<br>Je veux afficher le nombre ' . $number . '<br>';

			// define('maConstante', '255');

			// $maConstante = 123;

			// echo maConstante;

			// echo '<br>' . $maConstante;

			// define('maConstante', '188');


			// $val = '1';
			// $valInteger = 1;
			// $valBoolean = true;
			// $valString = '1';

			// if( $val === $valInteger ) {
			//     echo 'Je suis un entier qui vaut '. $val;
			// } elseif( $val === $valBoolean ) {
			//     echo 'Je suis le booléen qui vaut ' . $val;
			// } elseif( $val === $valString ) {
			//     echo 'Je suis une chaine de caractère de valeur ' . $val;
			// } else {
			//     echo 'Je ne suis pas égal à ' . $val;
			// }


			// $abreviation = 'M';
			// switch($abreviation) {
			//     case 'Mme':
			//         echo 'Madame';
			//         break;
			//     case 'Mlle':
			//         echo 'Mademoiselle';
			//         break;
			//     case 'M':
			//         echo 'Monsieur';
			//         break;
			//     case 'Autre':
			//         echo 'Transgenre';
			//         break;
			//     default:
			//         echo 'Choix non listé';
			// 	}



			// define('stop', 10);
			// $val = 2;
			// $totalVal = 0;

			// echo 'Valeur initiale : $totalVal = ' . $totalVal . ' et $val = ' . $val . '<br /><br />';

			// while($val != stop) {

			//     $totalVal += $val; // Ecriture équivalente à $totalVal = $totalVal + $val

			//     $val += 1; // Ecriture équivalente à $val = $val + 1 ou encore à $val++

			//     echo 'Je boucle : $totalVal = ' . $totalVal . ' et $val = ' . $val . '<br />';

			// }

			// echo '<br />Le total des valeurs saisies est : ' . $totalVal;


			// define('stop2', 10);
			// $val = 2;
			// $totalVal = 0;

			// echo 'Valeur initiale : $totalVal = ' . $totalVal . ' et $val = ' . $val . '<br /><br />';

			// do {
			//     $val += 1; // Ecriture équivalente à $val = $val + 1 ou encore à $val++
			//     $totalVal += $val; // Ecriture équivalente à $totalVal = $totalVal + $val
			//     echo 'Je boucle : $val = ' . $val . ' et $totalVal = ' . $totalVal . '<br />';
			// } while($val <= stop2);
			// echo '<br />Le total des valeurs saisies est : ' . $totalVal;


			// EXO 1
			// echo 'EXO 1';

			// $a = 2;
			// $b = 5;
			// echo '<br>a est égal à ' . $a;
			// echo '<br>b est égal à ' . $b;
			// $tmp = $a;
			// $a = $b;
			// $b = $tmp;
			// echo '<br>a est maintenant égal à ' . $a;
			// echo '<br>b est maintenant égal à ' . $b;


			// // EXO 2
			// echo '<br><br>EXO 2';
			// echo '<br>a est égal à ' . $a;
			// echo '<br>b est égal à ' . $b;

			// if($a > 0 && $b > 0 || $a < 0 && $b < 0){
			// 	echo '<br>Le produit des deux nombres est positif';
			// }
			// else
			// 	echo "<br>Le produit des nombres est négatif";

			// // EXO 3
			// echo '<br><br>EXO 3';


			// do{	
			// 	$val = rand(-50,50);

			// 	echo "<br>La saisie vaut : " . $val;

			// 	if ($val < 10) {
			// 		echo " Plus grand !";
			// 	}

			// 	elseif ($val > 20) {
			// 		echo " Plus petit !";
			// 	}

			// } while ($val < 10 || $val > 20);

			// echo "<br>Valeur correspondante aux bornes : " . $val;


			// // TEST FONCTION 1
			// echo '<br><br>TEST FONCTION 1';

			// function retournerHelloYou($nom) { 
  	// 			return '<br><p>Bonjour ' . $nom . ' !</p>';
			// }

			// $result = retournerHelloYou('Jean');	

			// echo $result;


			// SUITE EXOS
		// 	echo '<br><br>SUITE EXOS';

		// 	// EXO 0
		// 	echo '<br><br>EXO 0';

		// 	$a = 5;
		// 	$b = 2;

		// 	echo '<br>Valeurs initiales : $a est égal à ' . $a . ' et $b est égal à ' . $b;

		// 	function Inverser(&$val1, &$val2){
		// 		$tmp = $val1;
		// 		$val1 = $val2;
		// 		$val2 = $tmp;
		// 	}



		// 	Inverser($a,$b);

		// 	echo '<br>Valeurs sortie: $a est égal à ' . $a . ' et $b est égal à ' . $b;






		// 	// EXO 1
		// 	echo '<br><br>EXO 1';

		// 	$x = rand(1,10);
		// 	$y = rand(1,10);


		// 	function Moyenne($x, $y){
		// 		return '<br>La moyenne de ' . $x . ' et ' . $y . ' est : ' . ($x + $y) / 2;
		// 	}

		// 	echo Moyenne($x, $y);




		// 	function Moyenne2($x, $y){
		// 		return '<br>La moyenne de ' . $x . ' et ' . $y . ' est : ' . ($x + $y) / 2;
		// 	}

		// 	echo Moyenne2(8, 7);










		// 	// EXO 2
		// 	echo '<br><br>EXO 2';



		// 	function ecrireTD(){
		// 		$confirm = rand(0, 5);
		// 		if ($confirm > 0) {
		// 			echo "<td>cellule</td>";
		// 			ecrireTD();
		// 		}
		// 	}

		// 	function ecrireTR(){
		// 		$confirm = rand(0, 5);
		// 		if ($confirm > 0) {
		// 			echo '<tr>';
		// 			ecrireTD();
		// 			echo '</tr>';
		// 			ecrireTR();
		// 		}
		// 	}

		// 	echo '<table>';
		// 	ecrireTR();
		// 	echo '</table>';






		// 	// EXO 3
		// 	echo '<br><br>EXO 3';

		

		// 	 $n = rand(0,10);

		// 		function fibonacci($n){
		// 			if ($n<2)
		// 				return($n);
		// 			else{
		// 				return (fibonacci($n - 1) + fibonacci($n - 2));
					
		// 			}
		// 		}



		// 	echo "<br>Le terme U de n de la suite de Fibonacci en fonction de 'n' $n est: " . fibonacci($n);


		// 	// EXO 4
		// 	echo '<br><br>EXO 4';

			

		// 	function compte($a, $b){
		// 		if ($a < $b) {
		// 			$a ++;
		// 			echo "<br>$a";
		// 			compte($a, $b);
		// 		}
		// 	}

		// 	compte(0, 10);




		// 	echo '<br><br>';

		// 	function fibonacci2($n, $max){
		// 			if ($n > $max){
		// 				return -1;
		// 			}
		// 			echo fibonacci($n).' ';
		// 			fibonacci2($n+1, $max);
		// 		}

		// 	fibonacci2(0, 30);

		// 	echo '<br><br>Fibonacci iteratif';



		// function fib($n) {
		// 	$val1 = 1;
		// 	$val2 = 0;

		// 	for($i=0; $i<$n; $i++){

		// 		if ($n < 2) {
		// 			return $n;
		// 		}
		// 		else{
		// 			$tmp = $val1;
		// 			$val1 += $val2;
		// 			$val2 = $tmp;
		// 		}
		// 	}
		// 	echo '<br>' .  $val2;
		// }

		// fib(10);
			
			

		
	// echo 'TRI A BULLE';

	// $table = array(12,25,13,40,5,8,9,0);

	// echo '<br>';
	
	
	//  print_r(tri_bulle($table));
	

	function tri_bulle($tab){
		$i=0;
		while($i < count($tab)-1){

			if($tab[$i] > $tab[$i+1]){
				$tmp = $tab[$i];
				$tab[$i] = $tab[$i+1];
				$tab[$i+1] = $tmp;

				$i = 0;
			}
			else{
				$i++;
			}
		}

		return $tab;
	}




// 	// echo '<br>';



// 	// echo '<br><br>TRI A SELECTION';


	function tri_selection($tab){

		for($indice=0; $indice<count($tab)-1; $indice++){

			$mem = $indice;

			for($i=$indice+1; $i<count($tab); $i++){

				if ($tab[$mem] > $tab[$i]) {
					$mem = $i;
				}
			}

			if ($mem != $indice) {
				$tmp = $tab[$indice];
				$tab[$indice] = $tab[$mem];
				$tab[$mem] = $tmp;
			}
			
		}
		return $tab;
	}

// 	// $uneTable = array(12,25,13,40,5,8,9,0);

// 	// print_r(tri_selection($uneTable));

// 	// echo '<br>';
	
	





// 	// echo '<br><br>TRI PAR INSERTION';



	function tri_insertion($tab){

		for($j=1; $j<count($tab); $j++){
			$i = $j;
			$mem = $tab[$i];

			while( $i > 0 && $tab[$i-1] > $mem){
				$tab[$i] = $tab[$i-1];
				$i--;
			}

			$tab[$i] = $mem;
		}

		return $tab;
	}


// 	// $monTableau = array(12,25,13,40,5,8,9,0);

// 	// print_r(tri_insertion($monTableau));

// 	// echo '<br>';
	





// // EXO 2.a
// 		echo 'EXO 2.a';



	$tmp = 0;


	while($tmp != -1){
		$tmp = rand(-1,20);
		$notes[] = $tmp;
	}



	$somme = 0;

	foreach ($notes as $value) {
		$somme += $value;
		echo "<td> $value </td>";
	}

// 	echo '<br>La moyenne de la classe est : ' . $somme / count($notes);



// EXO 2.b
	echo '<br><br>EXO 2.b';


	$max = 0;
	$min = 0;

	for($i=1; $i<count($notes) -1; $i++){
		if ($notes[$i] > $notes[$max]) {
			$max = $i;
		}
		if ($notes[$i] < $notes[$min]) {
			$min = $i;
		}
	}

	echo '<br>La plus la plus élevée est : ' . $notes[$max];
	echo '<br>La plus la plus faible est : ' . $notes[$min];

	echo '<br><br>Tableau trié en tri à bulle :<br>';
	print_r(tri_bulle($notes));

	'<br>';

	echo '<br><br>Tableau trié en tri par seletcion :<br>';
	print_r(tri_selection($notes));

	'<br>';

	echo '<br><br>Tableau trié en tri par insertion :<br>';
	print_r(tri_insertion($notes));

	'<br>';

	echo '<br><br>La moyenne de la classe est : ' . $somme / count($notes);








		?>
	</body>
</html>