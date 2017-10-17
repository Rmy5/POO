<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		#triangle{
			margin: 40px auto 0;
			width: 0;
			height: 0;
			border-style: solid;
			border-width: 0 80px 80px 80px;
			border-color: transparent transparent #007bff transparent;
		}

		#carré{
			margin: 40px auto 0;
			width: 0;
			height: 0;
			border-style: solid;
			border-width: 0 10px 100px 100px;
			border-color: red;
		}

		#rond{
			margin: 40px auto 0;
			width: 100px;
			height: 100px;
			border-radius: 50%;
			background-color: black;
		}


	</style>
</head>
<body>
	<?php

		include 'choix.php';

		echo '<div id="'.$_GET['forme'].'"></div>';
		
	?>  

</body>
</html>