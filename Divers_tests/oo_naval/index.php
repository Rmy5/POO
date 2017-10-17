<?php
session_start();


if (isset($_GET['logout']) && $_GET['logout'] = 1) {
	session_destroy();
	header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="classes/style.css">
	</head>

	<body>
		<a id="log" href="?logout=1">Deconnexion</a>

		<?php
			require ('classes/Board.php');
			require ('classes/Arsenal.php');
			require ('classes/Navire.php');
			require ('classes/Tir.php');

			$board = new Board();
			// $flotte = new Flotte();
			$nav1 = new Navire('Nav1',['b2','b3','b4']);
			$nav2 = new Navire('Nav2',['g2','h2','i2']);
			$nav3 = new Navire('Nav3',['h7','h8','h9']);


			if (isset($_GET['tir'])){
				$tir = new Tir($_GET['tir']);
				$tir->testTir($nav1);
				echo $tir->afficheTir();
			}
			
		

		?>

	</body>
</html>

