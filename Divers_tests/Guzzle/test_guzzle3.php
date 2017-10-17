<?php

   require '../../composer/vendor/autoload.php';
   use GuzzleHttp\Client;
   use GuzzleHttp\Exception\RequestException;
   use GuzzleHttp\Psr7\Request;

   $client = new GuzzleHttp\Client(['verify' => false]);

   $response = $client->put('https://jsonplaceholder.typicode.com/posts/10', ['json' =>["userId" => 1,"id" => 10,"title"=>"solo mio bla bla car it","body"=>"dolorem quibusdam ducimus consea"]]);


?>