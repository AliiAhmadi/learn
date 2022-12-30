<?php

namespace App\Utilities;

trait Connection
{
    protected static $db;
    protected static $dbName = "myproject";
    protected static $tableName = "users";
    protected static $server = "localhost";

    public static function connect()
    {
        if (!(isset(static::$db))) {
            $dbName = static::$dbName;
            $server = static::$server;
            static::$db = new \PDO("mysql:host=$server;dbname=$dbName;charset=utf8", "root", "");
        }
        return static::$db;
    }
}
