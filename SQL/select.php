<?php
$connection = new mysqli("localhost", "root", "", "w3school");

$query = "SELECT username FROM user_details WHERE user_id < 200";

// $response = $connection->query($query);

// print_r($response);
// $data = $response->fetch_all();

// echo "<pre>";
// print_r($data);
// echo "</pre>";


$stmt = $connection->prepare($query);

$stmt->execute();
$stmt->bind_result($username);


while ($stmt->fetch()) {
    echo "$username <br>";
}
