<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		body{
			text-align: center;
		}
		textarea{
			display: block;
			width: 400px;
			height: 250px;
			margin: 10px auto 10px;
		}
		form{
			margin-top: 20px;
		}
	</style>
</head>
	<body>
		<?php

		$result = '';

		if (isset($_POST['nombre1']) ) {
			$_POST['nombre1'] = str_replace(',', '.', $_POST['nombre1']);
			$_POST['nombre1'] = str_replace(' ', '', $_POST['nombre1']);
		}
		if (isset($_POST['nombre2']) ) {
			$_POST['nombre2'] = str_replace(',', '.', $_POST['nombre2']);
			$_POST['nombre2'] = str_replace(' ', '', $_POST['nombre2']);
		}
		if (isset($_POST['nombre1']) && is_numeric($_POST['nombre1'])) {

			if (isset($_POST['nombre2']) && is_numeric($_POST['nombre2'])) {

				if (isset($_POST['signe']) && $_POST['signe'] == '+') {
					$result = $_POST['nombre1'] + $_POST['nombre2'];
				}
				elseif (isset($_POST['signe']) && $_POST['signe'] == '-') {
					$result = $_POST['nombre1'] - $_POST['nombre2'];	
				}
				elseif (isset($_POST['signe']) && $_POST['signe'] == 'x') {
					$result = $_POST['nombre1'] * $_POST['nombre2'];
				}
				elseif (isset($_POST['signe']) && $_POST['signe'] == '/') {
					if ($_POST['nombre2'] == 0) {
						$msg = 'Vous ne pouvez pas diviser par zéro !';
					}
					else{
						$result = $_POST['nombre1'] / $_POST['nombre2'];
					}
				}
			}		
		}

		?>
		<form method="POST">
			<input name="nombre1" value="<?php if(isset($_POST['nombre1'])){echo $_POST['nombre1'];}?>">
			<select name="signe">
				<option value="+" <?php if(isset($_POST['signe']) && $_POST['signe'] == '+'){echo 'selected="selected"';}?>>+</option>
				<option value="-" <?php if(isset($_POST['signe']) && $_POST['signe'] == '-'){echo 'selected="selected"';}?>>-</option>
				<option value="x" <?php if(isset($_POST['signe']) && $_POST['signe'] == 'x'){echo 'selected="selected"';}?>>x</option>
				<option value="/" <?php if(isset($_POST['signe']) && $_POST['signe'] == '/'){echo 'selected="selected"';}?>>/</option>
			</select>
			<input name="nombre2" value="<?php if(isset($_POST['nombre2'])){echo $_POST['nombre2'];}?>">
			<input type="submit" value="="><?php echo ' ' . $result;?>
			<textarea name="text"><?php  
				if(isset($_POST['nombre1']) && $_POST['nombre1'] != 0 || isset($_POST['nombre2']) && $_POST['nombre2'] != 0){

					if (!is_numeric($_POST['nombre1']) || !is_numeric($_POST['nombre2'])) {
						$msg2 = 'Votre saisie n\'est pas un nombre !';
					}
					else{
						echo $_POST['nombre1'].' '.$_POST['signe'].' '.$_POST['nombre2']. ' = '. $result."&#13;&#10;";}
					}

				if(isset($_POST['text'])){

					echo $_POST['text'];} ?>		
			</textarea>
		</form>

		<div>
			<?php 
			if (isset($msg)) {echo $msg;}
			if (isset($msg2)) {echo $msg2;}

			if(isset($_POST['nombre1']) && isset($_POST['nombre1'])){

				if (empty($_POST['nombre1'])) {
					echo 'Vous devez entrer un nombre';
				}

				if(empty($_POST['nombre2']) && $_POST['nombre2'] != 0){
					echo 'Vous devez entrer un nombre';
				}
			}


			?>
		</div>
	</body>
</html>





















