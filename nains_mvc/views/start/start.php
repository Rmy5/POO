<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<form action="" method="GET">
			<select name="id"><option value="" disabled selected>Les nains</option>';
			<?php
				foreach ($nains as $nain) {
					echo '<option value="'.$nain->getId().'">'.$nain->getNom().'</option>';	
			}?>
			</select>
			<input type="hidden" name="c" value="nain">
			<input type="hidden" name="a" value="display">
			<input type="submit">
		</form>

		<form action="" method="GET">
			<select name="id"><option value="" disabled selected>Les villes</option>';
			<?php
				foreach ($villes as $ville) {
					echo '<option value="'.$ville->getId().'">'.$ville->getNom().'</option>';	
			}?>
			</select>
			<input type="hidden" name="c" value="ville">
			<input type="hidden" name="a" value="display">
			<input type="submit">
		</form>

		<form action="" method="GET">
			<select name="id"><option value="" disabled selected>Les groupes</option>';
			<?php
				foreach ($groupes as $groupe) {
					echo '<option value="'.$groupe->getId().'">'.$groupe->getId().'</option>';	
			}?>
			</select>
			<input type="hidden" name="c" value="groupe">
			<input type="hidden" name="a" value="display">
			<input type="submit">
		</form>

		<form action="" method="GET">
			<select name="id"><option value="" disabled selected>Les tavernes</option>';
			<?php
				foreach ($tavernes as $taverne) {
					echo '<option value="'.$taverne->getId().'">'.$taverne->getNom().'</option>';	
			}?>
			<input type="hidden" name="c" value="taverne">
			<input type="hidden" name="a" value="display">
			</select><input type="submit">
		</form>

	</body>
</html>