<?php

# test table in database like below 


// +----+------+------------+-----------+
// | id | age  | first_name | last_name |
// +----+------+------------+-----------+
// | 14 |   33 | reza       | ahadi     |
// | 15 |   36 | fatemeh    | fatemi    |
// | 16 |   88 | rahim      | rahimi    |
// | 17 |   90 | jalal      | jalali    |
// | 18 |   12 | ramin      | rami      |
// +----+------+------------+-----------+


$db = new PDO("mysql:host=localhost;dbname=w3school;charset=utf8mb4", "root", "");
$query = "SELECT * FROM test WHERE first_name LIKE 'r%'";

$stmt = $db->prepare($query);
$stmt->execute();

echo $stmt->rowCount();

$result = $stmt->fetchAll();

print_r($result);

# output ???

// Array
// (
//     [0] => Array
//         (
//             [id] => 14
//             [0] => 14
//             [age] => 33
//             [1] => 33
//             [first_name] => reza
//             [2] => reza
//             [last_name] => ahadi
//             [3] => ahadi
//         )

//     [1] => Array
//         (
//             [id] => 16
//             [0] => 16
//             [age] => 88
//             [1] => 88
//             [first_name] => rahim
//             [2] => rahim
//             [last_name] => rahimi
//             [3] => rahimi
//         )

//     [2] => Array
//         (
//             [id] => 18
//             [0] => 18
//             [age] => 12
//             [1] => 12
//             [first_name] => ramin
//             [2] => ramin
//             [last_name] => rami
//             [3] => rami
//         )

// )