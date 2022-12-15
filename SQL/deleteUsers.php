<?php

$connection = new mysqli("localhost", "root", "", "w3school");

$query = "DELETE FROM test WHERE id = ?";

function deleteUser(int $userId)
{
    // $query = $GLOBALS["query"];
    global $query, $connection;
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $userId);
    return $stmt->execute();
}

$resultOfDelete = deleteUser(3);
print_r($resultOfDelete);
