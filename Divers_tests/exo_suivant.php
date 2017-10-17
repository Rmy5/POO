<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
	<?php
	


		$donnees = array(
		array('lettre' => 'a', 'suivant' => 10),
		array('lettre' => 'e', 'suivant' => -1),
		array('lettre' => 'e', 'suivant' => 6),
		array('lettre' => 'l', 'suivant' => 1),
		array('lettre' => 'p', 'suivant' => 8),
		array('lettre' => 'o', 'suivant' => 11),
		array('lettre' => 'x', 'suivant' => 12),
		array('lettre' => 'p', 'suivant' => 3),
		array('lettre' => 'r', 'suivant' => 5),
		array('lettre' => 'm', 'suivant' => 7),
		array('lettre' => 'b', 'suivant' => 3),
		array('lettre' => 'b', 'suivant' => 0),
		array('lettre' => 'a', 'suivant' => 9)
		);

		
		?>

		<form method="POST">
			<input type="text" name="envoi">
			<input type="submit" value="OK">
		</form>

		<?php

	

		if (isset($_POST['envoi'])) {
			$recup = $_POST['envoi'];


			do{
				echo $donnees[$recup]['lettre'];
				$recup = $donnees[$recup]['suivant'];
			} while($donnees[$recup]['suivant'] != -1);

			echo $donnees[$recup]['lettre'];
		}
	?>
		<br><br>
		<form method="POST">
			<select name="selection">
				<option value="hello">hello</option>
				<option value="bonjour">bonjour</option>
				<option value="gutentag">gutentag</option>
			</select>
			<input type="submit" value="OK">
		</form>
	<?php

	if (isset($_POST['selection'])) {
		echo $_POST['selection'];
	}


	?>





		
	</body>
</html>