<?php
	$file = '../../txt/txt';
	$concat = '';

	$res = new DirectoryIterator(dirname($file));

	foreach ($res as $v) {

		if (!$v->isDir()) {

			$path = '../../txt/'.$v->getFilename();

			$concat .= file_get_contents($path);
		}
	}

	file_put_contents('../recup_fichiers_txt.txt', $concat);



?>