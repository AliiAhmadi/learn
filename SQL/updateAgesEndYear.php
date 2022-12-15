<?php

$connection = new mysqli("localhost", "root", "", "w3school");

$query = "SELECT * FROM test";

// $connection->execute_query($query);

$response = $connection->query($query);

// var_dump($response);

// foreach()

// while ($row = $response->fetch_assoc()) {
//     print_r($row);
//     echo "\n";
// }
$all = $response->fetch_all();
// $baseQuery = "UPDATE test SET age = ? WHERE id = ?";
for ($i = 0; $i < count($all); $i++) {
    $result = updater((int) $all[$i][0], $all[$i][1]);
    print_r($result);
}
// while($user = $response->fetch)

function updater($userID, $currentAge)
{
    global $connection;
    $updateQuery = "UPDATE test SET age = ? WHERE id = ?";
    $stmt = $connection->prepare($updateQuery);
    $newAge = $currentAge + 1;
    $stmt->bind_param("ii", $newAge, $userID);
    return $stmt->execute();
}
// print_r($all);
