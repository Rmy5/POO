<?php
session_start();

	if (isset($_COOKIE[''.$_SESSION['nom'].'']) && $_COOKIE[''.$_SESSION['nom'].''] == $_SESSION['verif']) {

		echo $_COOKIE[''.$_SESSION['nom'].''].' => $COOKIE<br>';
		
		echo $_SESSION['verif'].' => $SESSION';

		echo '<br>Verif OK';
	}

	else echo '<br>Cookie pas reconnu.';

	echo '<br><br><a href="test_cookie.php">Retour page 1</a>';

?>