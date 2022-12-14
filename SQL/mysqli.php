<?php
// $connection = mysqli_connect("localhost", "root", "", "w3school");

// $result = $connection.exec() ????
$mysqli = new mysqli("localhost", "root", "", "w3school");
// $mysqli->exec() ????

if ($mysqli->connect_errno) {
    echo "Error available : " . $mysqli->error;
    // die("Finish");
    exit;
} else {
    echo "Successful connection";
}
$mysqli->set_charset("utf8");


// print_r($mysqli);
$query = "
CREATE TABLE test(
    id int(10) NOT NULL PRIMARY KEY,
    age int,
    first_name varchar(32) NOT NULL,
    last_name varchar(32) NOT NULL
);";

$mysqli->query($query);
