<?php

trait Connection
{
    private static $db;

    private final function __construct()
    {
        echo __CLASS__ . " initialize only once ";
    }

    public static function Connect()
    {
        if (!isset(static::$db)) {
            static::$db = new PDO("mysql:host=localhost;dbname=myproject;charset=utf8", "root", "");
        }
        return static::$db;
    }
}

class DB
{
    use Connection;
}

$conn1 = DB::Connect();
$conn2 = DB::Connect();

var_dump($conn1 === $conn2);
