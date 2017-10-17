<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<span>Nom du nain : <em><?=$nain->getNom()?></em>, longueur de barbe : <em><?=$nain->getBarbe()?></em>cm</span><br>

		<span>Originaire de : <em><a href="?id=<?=$ville->getId()?>&c=ville&a=display"><?=$ville->getNom()?></a></em></span><br>

		<?php if (!is_null($taverne->getId())) {
			echo '<span>Boit dans : <em><a href="?id='.$taverne->getId().'&c=taverne&a=display">'.$taverne->getNom().'</a></em></span><br>';
		} 
		
		if (is_null($groupe->getId())) echo '<span>Ne fait partie d\'aucun groupe';
		if (!is_null($groupe->getId())) { ?>
		
		<span>Travaille de : <em><?=$groupe->getDebuttravail()?>h</em> à <em><?=$groupe->getFintravail()?>h</em></span><br>

		<span>Dans le tunnel de 
		<em><a href="?id=<?=$VillesTunnel['villeDepartId']?>&c=ville&a=display"><?=$VillesTunnel['villeDepart']?></a></em> à 
		<em><a href="?id=<?=$VillesTunnel['villeArriveeId']?>&c=ville&a=display"><?=$VillesTunnel['villeArrivee']?></a></em></span><br>

		<span>Fait partie du groupe <em><?=$groupe->getId()?></em></span>
		<?php } ?>
	</body>
</html>

<?php
