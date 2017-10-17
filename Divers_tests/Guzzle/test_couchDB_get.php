<?php
	require '../../composer/vendor/autoload.php';

	$client = new GuzzleHttp\Client(['verify' => false]);
	// $res = $client->request('GET', 'http://localhost:5984/users/2dca3d1e3e27c17cac9b5a0857001f73', ['auth' => ['Rmy5', 'wxcvbn']]);
	$res = $client->request('GET', 'http://localhost:5984/users/2dca3d1e3e27c17cac9b5a0857001f73');
	

	$data = json_decode($res->getBody()->getContents(), true);


	var_dump($data);

	echo $data['nom'];
	




echo '<br><br>'.file_get_contents('http://localhost:5984/users/2dca3d1e3e27c17cac9b5a0857001f73');

?>