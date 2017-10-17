<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			table{
				position: absolute;
				left: 37%;
				text-align: center;
				margin: 180px auto 0;
				border-collapse: collapse;
			}
			td{
				text-transform: uppercase;
				width: 30px;
				height: 30px;
				border: 1px solid black;
			}
			a{
				display: block;
				width: 100%;
				height: 100%;
			}
			#res{
				position: absolute;
				left: 700px;
				top: 140px;
			}	
		</style>
	</head>
	<body>
		<a href="?logout=logout">Deconnexion</a>
		<?php if (isset($_GET['logout']) && $_GET['logout'] == 'logout') {
			session_destroy();
			header('location:naval.php');
		}
		
		echo '<table>';
		for ($i=0; $i < 11; $i++) {echo '<td>'.$i.'</td>';}

		for ($a='a';$a<'k';$a++){ 
			echo '<tr>';
			echo '<td>'.$a.'</td>';
			for ($i=1; $i <= 10; $i++) echo '<td id="'.$a.$i.'"><a href="?row='.$a.'&col='.$i.'"></a></td>';
		}

	
		$flotte = [['b',7,8,9], ['f','g','h',4], ['e','f','g',10]];



		if (isset($_GET['row'])) {
			for($i=0; $i < 3; $i++){
				for ($j=0; $j < 4 ; $j++) { 
					if ($_GET['row'] == $flotte[$i][$j]) $tir_row[$i] = true;
					if ($_GET['col'] == $flotte[$i][$j]) $tir_col[$i] = true;
				}
			}
		}
		if (isset($_GET['row'])) {
			for($i=0; $i < 3; $i++){
				for ($j=0; $j < 4 ; $j++) { 
					if ($_GET['row'] != $flotte[$i][$j]) $mis_row[$i] = true;
					if ($_GET['col'] != $flotte[$i][$j]) $mis_col[$i] = true;
				}
			}
		}


	
		if (!isset($_SESSION['crd'])) {
			$_SESSION['crd'] = array();
		}
		if (!isset($_SESSION['plf'])) {
			$_SESSION['plf'] = array();
		}	
		


		for($i=0; $i < count($flotte); $i++){

			if (isset($tir_row[$i]) && isset($tir_col[$i])) {

				if ($tir_row[$i] == true && $tir_col[$i] == true){
					echo '<div id="res" style="color:red">touché<br></div>';
					array_push($_SESSION['crd'], $_GET['row'].$_GET['col']);
				}
				// elseif ($tir_row[$i] == false && $tir_col[$i] == false) {
				// 	array_push($_SESSION['plf'], $_GET['row'].$_GET['col']);
				// }
			}
		}

		// print_r($_SESSION['crd']);
		// if (isset($_SESSION['plf'])) {
		// 	foreach ($_SESSION['plf'] as $value) {
		// 		echo '<style>#'.$value.'{background-color:blue;}</style>';
		// 	}
		// }

		if (isset($_SESSION['crd'])) {
			foreach ($_SESSION['crd'] as $value) {
				echo '<style>#'.$value.'{background-color:red;}</style>';
			}
		}
	
			
				

		echo '</table>';
		?>
	</body>
</html>