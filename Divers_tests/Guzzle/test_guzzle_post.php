<?php

   require '../../composer/vendor/autoload.php';
   use GuzzleHttp\Client;
   // use GuzzleHttp\Exception\RequestException;
   // use GuzzleHttp\Psr7\Request;

   $client = new GuzzleHttp\Client();

  
   $response = $client->post('http://localhost:5984/users', ['json' =>["prenom"=>"test ","nom"=>"test"]]);



?>