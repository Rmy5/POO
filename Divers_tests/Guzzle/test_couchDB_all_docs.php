<?php
	require '../../composer/vendor/autoload.php';

	$client = new GuzzleHttp\Client(['verify' => false]);
	// $res = $client->request('GET', 'http://localhost:5984/users/2dca3d1e3e27c17cac9b5a0857001f73', ['auth' => ['Rmy5', 'wxcvbn']]);
	$res = $client->request('GET', 'http://localhost:5984/users/_all_docs?include_docs=true');
	

	$data = json_decode($res->getBody()->getContents(), true);




	foreach ($data as $value) {
		var_dump($value);
	}
	




?>