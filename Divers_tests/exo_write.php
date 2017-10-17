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
				border: solid 1px black;
				width: 50px;
			}
		</style>
	</head>
	<body>
		<?php
		// $txt =	file('../txt/test3.txt');
		// print_r($txt);
	
		// echo '<br>';


		// for ($i=0; $i <count($txt) ; $i++) $ligne[$i] = explode(":", $txt[$i]);
		
		// print_r($ligne);
	
		// echo '<table>';
		// for ($i=0; $i < count($ligne); $i++) echo '<tr><td>'.$ligne[$i][0].'</td><td>'.$ligne[$i][1].'</td></tr>';
		// echo '</table><br><br>';

		// print_r(pathinfo('../txt/test3.txt'));

		// echo '<br><br>';

		// echo realpath('../txt/test3.txt');

		// fopen('../txt/test4.txt', 'a');

		// fclose('../txt/test4.txt');

		// unlink('../txt/test4.txt');

		$fichier = opendir('../txt');
		$docs = scandir('../txt');
		print_r($docs);
		echo '<br>';
		readdir($fichier);

		is


		?>
	</body>
</html>