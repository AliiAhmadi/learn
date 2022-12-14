<?php

$mysqli = new mysqli("localhost", "root", "", "w3school");

$query = "DROP TABLE test";

$mysqli->query($query);
