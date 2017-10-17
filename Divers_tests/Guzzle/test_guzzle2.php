<?php
	require '../../composer/vendor/autoload.php';



	$client = new GuzzleHttp\Client(['verify' => false]);
	$response = $client->request('POST', 'localhost/test/composer/test_guzzle2.php', [
	    'form_params' => [
	        'pseudo' => 'Bob',
	        'mdp' => '123'
	    ]
	]);


	
?>