<?php

list(
    $serverName,
    $dataBaseName,
    $userNameOfDataBase,
    $passwordOfDataBase,
    $charset
) = [
    "localhost",
    "w3school",
    "root",
    "",
    "utf8mb4"
];

try {
    $db = new PDO("mysql:host=$serverName;dbname=$dataBaseName;charset=$charset", $userNameOfDataBase, $passwordOfDataBase);
} catch (PDOException $error) {
    echo $error->getMessage() . " LINE :" . $error->getLine();
}


// +------------+-------------+------+-----+---------+----------------+
// | Field      | Type        | Null | Key | Default | Extra          |
// +------------+-------------+------+-----+---------+----------------+
// | id         | int(10)     | NO   | PRI | NULL    | auto_increment |
// | age        | int(11)     | YES  |     | NULL    |                |
// | first_name | varchar(32) | NO   |     | NULL    |                |
// | last_name  | varchar(32) | NO   |     | NULL    |                |
// +------------+-------------+------+-----+---------+----------------+


$query = "INSERT INTO test (age, first_name, last_name) VALUES (:age,:first_name,:last_name)";
$userData = [
    "age" => 20,
    "name" => "zaynab",
    "family" => "..."
];

// $stmt = $db->prepare($query);
// $stmt->execute([$userData["age"], $userData["name"], $userData["family"]]);

// echo "id in database : " . $db->lastInsertId();

$newUsers = [
    [
        "age" => 33,
        "name" => "reza",
        "family" => "ahadi"
    ],
    [
        "age" => 36,
        "name" => "fatemeh",
        "family" => "fatemi"
    ],
    [
        "age" => 88,
        "name" => "rahim",
        "family" => "rahimi"
    ],
    [
        "age" => 90,
        "name" => "jalal",
        "family" => "jalali"
    ],
    [
        "age" => 12,
        "name" => "ramin",
        "family" => "rami"
    ],
];
$stmt = $db->prepare($query);

foreach ($newUsers as $user) {
    $stmt->execute(["age" => $user["age"], "first_name" => $user["name"], "last_name" => $user["family"]]);
}


// +----+------+------------+-----------+
// | id | age  | first_name | last_name |
// +----+------+------------+-----------+
// | 14 |   33 | reza       | ahadi     |
// | 15 |   36 | fatemeh    | fatemi    |
// | 16 |   88 | rahim      | rahimi    |
// | 17 |   90 | jalal      | jalali    |
// | 18 |   12 | ramin      | rami      |
// +----+------+------------+-----------+