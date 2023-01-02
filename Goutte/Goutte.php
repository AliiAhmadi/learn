<?php

require_once "vendor/autoload.php";

use Goutte\Client;

$url = "https://www.digikala.com/product/dkp-8169599/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B4%DB%8C%D8%A7%D8%A6%D9%88%D9%85%DB%8C-%D9%85%D8%AF%D9%84-redmi-note-11-pro-4g-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-128-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA-%D9%88-%D8%B1%D9%85-8-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA/";

$data = [];


$client = new Client();

$crawler = $client->request("GET", $url);


$data["title"] = $crawler->filter(".color-900");


function show($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


show($data);
