<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			body{
				margin: auto;
				width: 700px;
				text-align: center;
			}
			.in1{
				margin-top: 10px;
			}
			#monnaie{
				float: left;
			}
			#tickets{
				float: right;
				width: 160px;
				padding: 5px;
				text-align: justify;
			}
			#lancer{
				position: relative;
				top: 60px;
			}
			.grid{
				margin-right: 5px;
			}
		</style>
	</head>
	<body>
		<?php
			$prix = [100,50,20];

			if (!isset($_SESSION['porte_monnaie'])) $_SESSION['porte_monnaie'] = 500;

			function flash($num){
				$nombres = range(1, 100);
				shuffle($nombres);
				return array_slice($nombres, 0, $num);
			}

			function achat_tickets($num){
				if ($_POST['nb_tickets'] * 2 > $_SESSION['porte_monnaie']) {
					$nb_max = $_SESSION['porte_monnaie'] / 2;
					$_SESSION['tickets'] = flash($nb_max);
					sort($_SESSION['tickets']);
					return $_SESSION['tickets'];
				}
				else{
					$_SESSION['tickets'] = flash($num);
					sort($_SESSION['tickets']);
					return $_SESSION['tickets'];
				}
			}


		// menus

		// if (!isset($_POST['flash'])) {
			echo '<label>Achat des tickets :</label>
				 <form action="" method="POST">
					<input type="submit" name="flash" value="Flash" class="in1">
					<input type="submit" name="grille" value="Grille" class="in1">
				 </form>';
		// }
		
		if (isset($_POST['flash'])) {
			echo '<br><label>Flash : Nombre de tickets ?</label>
			<form action="" method="POST">
				<input type="number" name="nb_tickets" class="in1">
				<input type="submit" value="OK" class="in1"><br>
				<input type="submit" name="tirage" value="Lancer la tombola" id="lancer" class="in1">
			<form><br><br>';
		}
		
		// Achat des tickets
	
			if (!isset($_SESSION['tickets'])) $_SESSION['tickets'] = 0;
			
			if (isset($_POST['nb_tickets']) && $_POST['nb_tickets'] != 0 && $_SESSION['tickets'] == 0) {
				if (isset($_POST['nb_tickets']) && $_POST['nb_tickets'] <= 100 && $_POST['nb_tickets'] != 0) {
					achat_tickets($_POST['nb_tickets']);
					$_SESSION['porte_monnaie'] = $_SESSION['porte_monnaie'] - count($_SESSION['tickets']) * 2;
					echo '<div id="tickets">Nombre de tickets : '.count($_SESSION['tickets']).'<br><strong>';
					foreach ($_SESSION['tickets'] as $ticket) echo $ticket. ' ';
					echo '</strong></div>';
				}
				elseif ($_SESSION['tickets'] == 0 && $_POST['nb_tickets'] > 100) echo '100 tickets maximum !';
			}
			elseif (isset($_POST['nb_tickets']) && $_SESSION['tickets'] != 0) {
			 	echo '<div id="tickets">Nombre de tickets : '.count($_SESSION['tickets']).'<br><strong>';
				foreach ($_SESSION['tickets'] as $ticket) echo $ticket. ' ';
				echo '</strong></div>';
			}
			elseif (!isset($_POST['nb_tickets']) && $_SESSION['tickets'] == 0) echo '<div id="tickets">Nombre de tickets : 0</div>';
			elseif (isset($_POST['nb_tickets']) && $_POST['nb_tickets'] == '') echo 'Veuillez choisir un nombre de tickets<div id="tickets">Nombre de tickets : 0</div>';

		?>
		<div id="monnaie">Porte-monnaie : <?php echo '<span style="color:blue">'.$_SESSION['porte_monnaie'].'</span><br>Prix d\'un ticket : 2<br>1er prix : '.$prix[0].'<br>2eme prix : '.$prix[1].'<br>3eme prix : '.$prix[2] ?></div><br><br><br><br><br><br><br>
		
		<?php
			if (isset($_POST['grille']) && !isset($_POST['sub'])) {
				echo '<form id="grille" action="" method="POST">';
				for ($i=1; $i <=100 ; $i++) { 
					echo '<label class="grid">'.$i.'<input type="checkbox" value="'.$i.'" name="check_list[]"></label>';
				}
				echo '<br><br><input type="submit" name="sub" value="OK"></form>';
			}
			// print_r($_POST['check_list']);

			

			if (isset($_POST['sub']) && $_POST['sub'] != 0 && $_SESSION['tickets'] == 0) {

				if (isset($_POST['check_list']) && count($_POST['check_list']) > 0) {

					if (count($_POST['check_list']) * 2 <= $_SESSION['porte_monnaie']) {
						$_SESSION['tickets'] = $_POST['check_list'];
						$_SESSION['porte_monnaie'] = $_SESSION['porte_monnaie'] - count($_POST['check_list']) * 2;
					}		
				}

				elseif (isset($_POST['sub']) && !isset($_POST['check_list'])) echo 'Selectionnez au moin 1 tickets';

			}

			

			

print_r($_SESSION['tickets']);
// print_r($_POST['check_list']);
			


		// Tirage
		
			if (isset($_POST['tirage']) && $_SESSION['tickets'] != 0 && !isset($_SESSION['tirage'])) {
				$tirage = flash(3);
				$_SESSION['tirage'] = $tirage;
				echo '<br>Le tirage est :<br>n° 1 : '.$_SESSION['tirage'][0].'<br>n° 2 : '.$_SESSION['tirage'][1].'<br>n° 3 : '.$_SESSION['tirage'][2];

				for ($i=0; $i<count($_SESSION['tickets']); $i++) { 
					for ($j=0; $j < 3; $j++) { 
						if ($tirage[$j] == $_SESSION['tickets'][$i]) $_SESSION['result'][$j] = $_SESSION['tickets'][$i];
					}
				}
			}

			elseif (isset($_POST['tirage']) && $_SESSION['tickets'] == 0) echo 'Vous n\'avez pas de tickets';
		
			elseif (isset($_POST['tirage']) && $_SESSION['tirage'] != 0) echo '<br>Le tirage est :<br>n° 1 : '.$_SESSION['tirage'][0].'<br>n° 2 : '.$_SESSION['tirage'][1].'<br>n° 3 : '.$_SESSION['tirage'][2];
			
			elseif (isset($_SESSION['tirage'])) echo '<br>Le tirage est :<br>n° 1 : '.$_SESSION['tirage'][0].'<br>n° 2 : '.$_SESSION['tirage'][1].'<br>n° 3 : '.$_SESSION['tirage'][2];
			
			if (isset($_SESSION['result'])){
				for ($i=0; $i < 3; $i++) { 
					if (isset($_SESSION['result'][$i])) {
						echo '<br><br>Prix '.($i+1).' ! Vous gagnez : '.$prix[$i].'<br>Votre ticket gagnant est le : '.$_SESSION['result'][$i];
						$_SESSION['porte_monnaie'] += $prix[$i];
					}
				}
				echo '<br><br>Bravo !<br>';
				unset($_SESSION['tickets']);
				unset($_SESSION['tirage']);
				unset($_SESSION['result']);
				echo '<br><a href="tombola.php">Jouer encore ?</a>';
			}

			if (isset($_POST['tirage']) && !isset($_SESSION['result']) && isset($_SESSION['tickets']) && $_SESSION['tickets'] != 0){
				if ($_SESSION['porte_monnaie'] == 0) {
			 		session_destroy();
			 		echo '<br><br>Vous n\'avez plus d\'argent<br><br><a href="tombola.php">Nouvelle partie ?</a>';
				}
				else{
					echo '<br><br>Vous avez perdu.<br>';
					unset($_SESSION['tickets']);
					unset($_SESSION['tirage']);
					echo '<br><a href="tombola.php">Jouer encore ?</a>';
				}	 
			}

		// print_r($_SESSION);
		?>
	</body>
</html>



