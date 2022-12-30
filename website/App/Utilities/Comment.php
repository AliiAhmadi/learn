<?php

namespace App\Utilities;

require_once "Connection.php";


class Comment
{
    use Connection;

    public static function addComment()
    {
        echo "comment added";
    }

    public static function deleteComment()
    {
        echo "comment deleted";
    }

    public static function countComment()
    {
        echo rand(100, 10000);
    }
}
