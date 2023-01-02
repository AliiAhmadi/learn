<?php

$url = "https://www.google.com/";
$filePath = __DIR__ . DIRECTORY_SEPARATOR . "result.html";


$curlHandler = curl_init();
$file = fopen($filePath, "w");


curl_setopt_array($curlHandler, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FILE => $file,
    CURLOPT_HEADER => true
]);

$result = curl_exec($curlHandler);



// echo $result;

echo "------------------------------------------------------------------------------------------------------";
