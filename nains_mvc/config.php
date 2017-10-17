<?php
define('HOST', 'localhost');
define('DB', 'exo_nains');
define('USER', 'root');
define('PASS', '');

spl_autoload_register(function($class){

	$folder = 'classes';
	if (strpos($class, 'Model')) {
		$folder = 'models';
	}
	elseif (strpos($class, 'Controller')) {
		$folder = 'controllers';
	}

	$file = '.'.DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR.$class.'.php';
	if (file_exists($file)) 
	{
		require_once $file;
	}

});