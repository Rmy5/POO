<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			body{
				text-align: center;
			}
			label, input{
				display: block;
				margin: 10px auto 0;
			}
		</style>
	</head>
	<body>
		<?php 
		function test_nombre($saisie,$num){
			if (isset($_POST[$saisie])) {
				if (is_numeric($_POST[$saisie])) {
					if ($_POST[$saisie] > $_SESSION[$num]) return 'Plus petit';
					elseif($_POST[$saisie] < $_SESSION[$num]) return 'Plus grand';
					elseif($_POST[$saisie] = $_SESSION[$num]) return 'Trouvé !';			
				}
				else return 'Votre saisie n\'est pas un nombre';	
			}
		} $result = test_nombre('saisie','num');

		echo '<a href="minijeu.php">Nouvelle partie</a>';

		if (!isset($_SESSION['num'])) $_SESSION['num'] = rand(0,50);
		if (isset($result) && $result === 'Trouvé !') session_destroy();
		?>
		<br><br>
		<form action="" method="POST">
			<label>Saisir un nombre entre 0 et 50</label>
			<input type="number" name="saisie">
			<input type="submit" value="OK">
			<p><?php echo $result; ?></p>
		</form>
		<?php 

		if (!isset($_SESSION['hist'])) $_SESSION['hist'] = '';
		
		if (isset($_POST['saisie'])) {
			$_SESSION['hist'] .= $_POST['saisie'].' : '.$result.'<br>';
			echo $_SESSION['hist'];
		}
		?>
	</body>
</html>