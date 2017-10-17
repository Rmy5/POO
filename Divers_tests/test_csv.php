<?php
	$list = [['03','02','Bases','Rémy','acquis'],
			['03','03','Inclusion','Rémy','acquis'],
			['03','04','Variables','Rémy','acquis'],
			['03','05','Structures','Rémy','acquis'],
			['03','06','Fonctions','Rémy','partiel'],
			['03','07','Tableaux','Rémy','acquis'],
			['03','08','Passage','Rémy','acquis'],
			['03','09','Sessions','Rémy','acquis'],
			['03','10','Fichiers','Rémy','acquis'],
			['03','11','Envoi mail','Rémy','partiel'],
			['03','12','Temporisation','Rémy','partiel']];

// ECRITURE DU FICHIER

	// print_r($list);

	// $csv = fopen('../txt/RemyComptences.csv', 'w');

	// foreach ($list as $fields) {
	// 	fputcsv($csv, $fields);
	// }

	// fclose($csv);


// LECTURE DU FICHIER

	$ist = file('../txt/RemyComptences.csv');

	// Le niveau pour la dernière notion:
	$niveau_derniere_notion = (end($list[4]));

	
	// Compte des niveaux:
	$non_acquis = 0;
	$acquis = 0;
	$partiel = 0;

	foreach ($list as $key => $value) {
		if ($value[4] == 'non acquis') {
			$non_acquis += 1;
		}
		if ($value[4] == 'acquis') {
			$acquis += 1;
		}
		if ($value[4] == 'partiel') {
			$partiel += 1;
		}
	}

	ob_start();

	echo 'Le niveau pour la dernière notion est : <strong>'.$niveau_derniere_notion.'</strong><br>
		  Le nombre de notions où j\'ai non acquis : <strong>'.$non_acquis.'</strong><br>
		  Le nombre de notions où j\'ai partiel : <strong>'.$partiel.'</strong><br>
		  Le nombre de notions où j\'ai acquis : <strong>'.$acquis.'</strong>';

	$tampon = ob_get_contents();

	ob_end_clean();

	file_put_contents( 'tampon.html', $tampon );

	readfile('tampon.html');

	

?>