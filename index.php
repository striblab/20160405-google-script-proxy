<?php

require_once 'vendor/autoload.php';

$client = new GuzzleHttp\Client();

$macro = filter_input( INPUT_GET, 'macro', FILTER_SANITIZE_STRING );
$id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_STRING );
$sheet = filter_input( INPUT_GET, 'sheet', FILTER_SANITIZE_STRING );

$url = "https://script.google.com/macros/s/$macro/exec?id=$id&sheet=$sheet";

$response = $client->request( 'GET', $url );

echo $response->getBody();
