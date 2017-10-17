<?php

   require '../../composer/vendor/autoload.php';
   use GuzzleHttp\Client;
   // use GuzzleHttp\Exception\RequestException;
   // use GuzzleHttp\Psr7\Request;

   $client = new GuzzleHttp\Client();

  
   $response = $client->put('http://localhost:5984/users/2dca3d1e3e27c17cac9b5a0857001f73', ['json' =>["_id" => '2dca3d1e3e27c17cac9b5a0857001f73',"_rev" => '11-7c5c963f94c0fc93cf641379d028e221',"prenom"=>"sdfdsf ","nom"=>"sdfsdf"]]);



?>