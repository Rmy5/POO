<?php
require_once 'config.php';




$params = array_merge(array('c' => 'start', 'a' =>' select'), $_GET);

$controllerName = $params['c'].'Controller';


require 'controllers/'.$controllerName.'.php';


$controller = new $controllerName();
$controller->setParams($_GET);


$controller->CallActionName($params['a']);