<?php

$mysqli = new mysqli("localhost", "root", "", "w3school");

$static = "test";

for ($i = 0; $i < 100; $i++) {
    $var = $GLOBALS["static"] . $i;
    $query = "DROP TABLE {$var}";

    $mysqli->query($query);
}
