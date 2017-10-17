<?php

	echo sha1('Bonjour');
	echo '<hr>';

	$sel = bin2hex(random_bytes(2));


	var_dump($sel);

	echo '<br>';
	echo sha1('Bonjour'. $sel);


	$mabddComplexe = array('sel' => 'f056', 'hash' => '0d8f9cb45901566b1d4e4724b25e18c87885c8e7');

	$entreeUser = 'Bonjour';


	var_dump(sha1($entreeUser . $mabddComplexe['sel']) == '0d8f9cb45901566b1d4e4724b25e18c87885c8e7');

	echo '<br><hr>';

	echo password_hash('Bonjour', PASSWORD_DEFAULT);

	// $entree = 'Bonjour';
	$entree = 'Bonjou';
	$hash = '$2y$10$1aKtLwkb9DX7HNDwFahuWuY0sVUL8kXv6kb0MLoGVRcD1ebELztN.';

	var_dump(password_verify($entree, $hash));


?>