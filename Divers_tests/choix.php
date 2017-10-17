<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			body{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<?php
			$tab = ['triangle', 'carré', 'rond'];
		
			echo 'Quelle forme voulez-vous?';

			for ($i=0; $i < count($tab) ; $i++) { 
				echo '<br><a href="formes.php?forme='.$tab[$i].'">'.$tab[$i].'</a>';
			}
		
			
		?>
	</body>
</html>