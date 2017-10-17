<?php
	// function ref(&$var){

	// 	$var++;
	// }

	// $a = [5,2,6];


	// ref($a[0]);


	// var_dump($a);

	// xdebug_debug_zval('$a');


	$a = array( 'meaning' => 'life', 'number' => 42 );
	$a['life'] = $a['meaning'];

	var_dump('$a');

	xdebug_debug_zval( 'a' );

?>