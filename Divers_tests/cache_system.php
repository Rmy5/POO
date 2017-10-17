<?php
	$url = $_SERVER["SCRIPT_NAME"];
	print_r($_SERVER["SCRIPT_NAME"]);echo '<br>';



	$break = Explode('/', $url);
	print_r($break);
	echo '<br>';

	$file = $break[count($break) - 1];
	echo $file;
	echo '<br>';

	$cachefile = 'cached-'.substr_replace($file ,"",-4).'.html';
	echo $cachefile;

	$cachetime = 10;
	echo'<br><br><br>';

	// Serve from the cache if it is younger than $cachetime
	if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
	    echo "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n";
	    include($cachefile);
	    exit;
	}
	ob_start(); // Start the output buffer




// Your regular PHP code goes here
	echo '12 test cache<br>';
	
	echo 'Hello World<br>';
	if (!isset($test)) {
		echo 'test<br>';
	}
	echo 'fin test cache';








	// Cache the contents to a file
	$cached = fopen($cachefile, 'w');
	fwrite($cached, ob_get_contents());
	fclose($cached);
	ob_end_flush(); // Send the output to the browser
?>