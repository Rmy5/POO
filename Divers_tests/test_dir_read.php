
		<?php

		$chemin="inc/";
		$dossier = opendir($chemin);
	
	



		while ($doc = readdir($dossier)){
			
			if (is_dir($chemin.$doc)) {
				echo $doc.' : ceci est un dossier<br>';
			}
			else echo $doc.'<br>';
		}



		

		
	echo '<br><br>';
		
		print_r(scandir('inc'));

	$tab = scandir('inc');

	echo '<br><br>';

	for ($i=0; $i < count($tab); $i++) { 

		if (is_dir($chemin.$tab[$i])) echo $tab[$i].' ceci est un dossier - dernière modif le : '. date('l jS \of F Y h:i:s A',filemtime($chemin.$tab[$i])).'<br>';
		else echo $tab[$i].' - dernière modif le : '. date('l jS \of F Y h:i:s A',filemtime($chemin.$tab[$i])).'<br>';
	}

	closedir($dossier);



		?>
