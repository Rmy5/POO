<?php
define('_HOST_', 'localhost');
define('_DB_', 'cours_forum');
define('_USER_', 'root');
define('_PASS_', '');

spl_autoload_register(function($class){
	require 'classes/'.$class.'.class.php';
});

?>