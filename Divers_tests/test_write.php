<?php 
	session_start();
	$today = date("j/m/Y à  H:i");
	
	define('BASE_TXT', '../txt/test3.txt');
	define('LOG_TXT', '../txt/log.txt');

	if (isset($_SESSION['user']) && isset($_GET['log']) && $_GET['log'] = 1) {
		$log = fopen(LOG_TXT, 'a');
		fwrite($log, '<strong>'.$_SESSION['pseudo'].'</strong> connecté en tant que <strong>'.$_SESSION['user'].'</strong>, le : '.$today.PHP_EOL);
		fclose($log);
		header('location:test_write.php');
	}
	
	if (isset($_GET['logout']) && $_GET['logout'] == 'logout') {
		session_destroy();
		header('location:espace_membre_v1_1/index.php');
	}

	if (isset($_SESSION['user'])) {
		echo '<strong>'.$_SESSION['pseudo'].'</strong> vous êtes connecté en tant que <strong>'.$_SESSION['user'].'</strong> (<a href="?logout=logout">Deconnexion</a>)<br><br>';
	}
	
// AFFICHAGE MENU AJOUT DE LIGNE
	if (isset($_SESSION['user']) && ($_SESSION['user'] == 'Admin' ||  $_SESSION['user'] == 'Superadmin')) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		td{
			border: 1px solid black;
			width: 70px;
		}
	</style>
</head>
<body>

	<?php
	?>

	<form action="" method="POST">
		<label>Nom : </label><input type="text" name="nom">
		<label>Prénom : </label><input type="text" name="prenom">
		<label>Age : </label><input type="text" name="age">
		<label>Ville : </label><input type="text" name="ville">
		<input type="submit" value="OK" name="saisie">
	</form>

	<?php 
		}	

// ECRITURE NOUVELLE LIGNE
		if (isset($_POST['saisie'])) {
		
			if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age']) && !empty($_POST['ville'])) {

				if (!is_numeric($_POST['nom']) && !is_numeric($_POST['prenom'])) {

					if (is_numeric($_POST['age'])) {

						if (!is_numeric($_POST['ville'])){

							// AJOUT LIGNE
							$fichier = fopen(BASE_TXT, 'a');
							fwrite($fichier, strip_tags($_POST['nom']).' : '.strip_tags($_POST['prenom']).' : '.strip_tags($_POST['age']).' : '.strip_tags($_POST['ville']).PHP_EOL);
							fclose($fichier);

							// MODIF LOG
							$log = fopen(LOG_TXT, 'a');
							fwrite($log, '<strong>'.$_SESSION['pseudo'].'</strong> connecté en tant que <strong>'.$_SESSION['user'].'</strong> a ajouté une entrée dans la base ('.$_POST['nom'].' : '.$_POST['prenom'].' : '.$_POST['age'].' : '.$_POST['ville'].'), le : '.$today.PHP_EOL);
							fclose($log);
			
						}
						else echo 'Entrez un vrai nom de ville';
					}	
					else echo 'Entrez un vrai age';
				}
				else echo 'Entrez un vrai nom';
			}
			else echo 'Remplissez toutes les infos';
		}		

		echo '<br><br>';

// AFFICHAGE TABLEAU
		$tab = file(BASE_TXT);
		for ($i=0; $i <count($tab) ; $i++) $ligne[$i] = explode(":", $tab[$i]);

		if (isset($_SESSION['user']) && $_SESSION['user'] == 'User' || isset($_SESSION['user']) && $_SESSION['user'] == 'Admin' || isset($_SESSION['user']) && $_SESSION['user'] == 'Superadmin'){
			if (isset($ligne)) {
				echo '<table><tr><td>Nom</td><td>Prénom</td><td>Age</td><td>Ville</td></tr>';
				for ($i=0; $i < count($ligne); $i++) {
					echo '<tr><td>'.$ligne[$i][0].'</td><td>'.$ligne[$i][1].'</td><td>'.$ligne[$i][2].'</td><td>'.$ligne[$i][3].'</td>';
					
					if ($_SESSION['user'] == 'Superadmin') echo '<td><a href="?delete='.$i.'">Supprimer</a></td><td><a href="?modif='.$i.'">Modifier</a></td>'; 
					echo'</tr>';
				}
				echo '</table><br><br>';
			}
		}

// SUPPRESSION DE LIGNE
		if (isset($_GET['delete'])) {

			for ($i=0; $i < count($tab); $i++) { 
				if ($_GET['delete'] == $i) {

					// MODIF LOG
					$tab[$i] = str_replace(PHP_EOL, '', $tab[$i]);
					$log = fopen(LOG_TXT, 'a');
					fwrite($log, '<strong>'.$_SESSION['pseudo'].'</strong> connecté en tant que <strong>'.$_SESSION['user'].'</strong> a supprimé la ligne <strong>'.$_GET['delete'].'</strong> ('.$tab[$i].'), le : '.$today.PHP_EOL);
					fclose($log);

					// MODIF LIGNE
					unset($tab[$i]);
					$del = fopen(BASE_TXT, 'w');
					foreach ($tab as $key => $value) fwrite($del, $value);
					fclose($del);

					header('location:test_write.php');
				}
			}
		}

// MODIF DE LIGNE
		if (isset($_GET['modif'])) {
			for ($i=0; $i < count($tab); $i++){
				if ($_GET['modif'] == $i) {
					echo '<form action="" method="get"><input type="hidden" name="ligne" value="'.$i.'"><label>Nom : </label><input type="text" name="nom"><label> Prenom : </label><input type="text" name="prenom"><label> Age : </label><input type="text" name="age"><label> Ville : </label><input type="text" name="ville"><input type="submit" value="OK" name="sub"></form><br>';
				}
			}
		}

		if (isset($_GET['sub']) && $_GET['sub'] == 'OK') {
		
			if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age']) && isset($_GET['ville'])) {

				if (!empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['age']) && !empty($_GET['ville'])) {

					// MODIF LOG
					$tab[$_GET['ligne']] = str_replace(PHP_EOL, '', $tab[$_GET['ligne']]);
					$log = fopen(LOG_TXT, 'a');
					fwrite($log, '<strong>'.$_SESSION['pseudo'].'</strong> connecté en tant que <strong>'.$_SESSION['user'].'</strong> a modifié la ligne <strong>'.$_GET['ligne'].'</strong> ('.$tab[$_GET['ligne']].'), le : '.$today.PHP_EOL);
					fclose($log);

					// MODIF LIGNE
					$tab[$_GET['ligne']] = $_GET['nom'].' : '.$_GET['prenom'].' : '.$_GET['age'].' : '.$_GET['ville'].PHP_EOL;
					$del = fopen(BASE_TXT, 'w');
					foreach ($tab as $key => $value) fwrite($del, $value);
					fclose($del);

					header('location:test_write.php');
				}
				else echo 'Entrez toutes les données.<br><br>';
			}	
		}

// AFFICHAGE LOG
		if (isset($_SESSION['user']) && $_SESSION['user'] == 'Superadmin') {
			echo '<a href="?vider=go">(Vider le log)</a><br>';
			if (isset($_GET['vider']) && $_GET['vider'] == 'go') {
					$log = fopen(LOG_TXT, 'w');
					fclose($log);
					header('location:test_write.php');
			}

			$log = fopen(LOG_TXT, 'r');
				while(!feof($log))echo nl2br(fgets($log));
			fclose($log);
		}
	?>
</body>
</html>