<?php

require_once "autoload.php";


use App\Utilities\User;
use App\Utilities\Comment;

$conn = User::connect();

// var_dump($conn);

User::addUser();

Comment::deleteComment();
