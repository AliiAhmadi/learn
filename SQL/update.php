<?php
$connection = new mysqli("localhost", "root", "", "w3school");

$query = "UPDATE test SET age=? WHERE age = 10";
$newAge = 100;
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $newAge);

$result = $stmt->execute();

print_r($result);
