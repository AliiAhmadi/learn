<?php
// PDO
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
    $database = new PDO("mysql:host=$serverName;dbname=$dataBaseName;charset=$charset", $userNameOfDataBase, $passwordOfDataBase);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Successfully connected to $dataBaseName";
} catch (PDOException $err) {
    echo $err->getMessage() . " in Line " . $err->getLine();
} finally {
    echo "\nFinish!!!";
}
