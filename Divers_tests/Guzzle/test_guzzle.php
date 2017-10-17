<?php
	require '../../composer/vendor/autoload.php';

	$client = new GuzzleHttp\Client(['verify' => false]);
	$res = $client->request('GET', 'https://jsonplaceholder.typicode.com/users', ['auth' => ['user', 'pass']]);
	// echo $res->getStatusCode();
	// "200"
	// print_r($res->getHeader('content-type'));
	// 'application/json; charset=utf8'
	// echo $res->getBody();
	// {"type":"User"...'


	// var_dump($res);

	$data = json_decode($res->getBody()->getContents(), true);


	// var_dump($data);


	foreach ($data as $value) {
		echo $value['name'].'<br>';
	}
	




// echo '<br><br>'.file_get_contents('https://jsonplaceholder.typicode.com/users/2');

?>