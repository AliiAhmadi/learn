<?php

require_once "vendor/autoload.php";

$links = [];

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

$client = new Client();

$crawler = $client->request("GET", "https://www.google.com/");



$crawler->filter('a')->each(function ($node) {
    // $GLOBALS["links"] = $link;
    show($node);
});

// $crawler = $client->request('GET', 'https://www.google.com/');
// $crawler->filter('a')->each(function ($node) {
//     print $node->text()."\n";
// });
function show($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    echo "--------------------------------------------------------------------------------------------";
}

// show($links);