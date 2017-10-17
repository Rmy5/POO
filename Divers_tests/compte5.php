<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>

	<body>
	<?php




	if (!empty($_GET)) {
		$compte = $_GET['compte'];
		echo $compte;

		if ($compte <= 4) {
			$compte = $_GET['compte']+1;
			echo '<br><a href="compte5.php?compte='.$compte.'">Compte</a>';
		}

		else echo '<br>OK';
	}

	else echo '<br><a href="compte5.php?compte=1">Compte</a>';




	?>



	</body>
</html>