<?php
	$fichier3 = fopen('../txt/test3.txt', 'a');

	$tab = file('../txt/test3.txt');

	print_r($tab);

	unset($tab[0]);


	file_put_contents($fichier3, str_replace($tab[0] . "\r\n", "", file_get_contents($fichier3)));


?>