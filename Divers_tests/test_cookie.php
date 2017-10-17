<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="" method="POST">
	<input type="text" name="nom">
	<input type="submit" value="OK">
</form><br><br>

	<?php
		$num = rand(1000,100000);

		$_SESSION['verif'] = $num;
		$_SESSION['nom'] = $_POST['nom'];

		setcookie(''.$_POST['nom'].'', $num);
	
		// foreach ($_COOKIE as $key => $value) {
		// 	echo $key.' '.$value;
		// }

		print_r($_COOKIE);
		echo '<br>';

		echo '<br>'.$_COOKIE[''.$_POST['nom'].''].' => $COOKIE<br>';

		echo $_SESSION['verif'].' => $SESSION';



	?>
	<br><br><br><a href="test_cookie2.php">Lien page 2</a>
</body>
</html>