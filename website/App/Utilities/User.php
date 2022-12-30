<?php

namespace App\Utilities;

require_once "Connection.php";


class User
{
    use Connection;

    public static function addUser()
    {
        echo "User Added";
    }

    public static function checkUser()
    {
        echo "User Checked";
    }

    public static function deleteUser()
    {
        echo "user deleted";
    }
}
