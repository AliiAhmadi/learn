<?php

require_once "User.php";
require_once "User2.php";




// $me = new App\Base\todo();

// $me2 = new App\Second\todo();

use App\Base\todo as BaseTodo;
use App\Second\todo as SecondTodo;

$me = new BaseTodo();
$me2 = new SecondTodo();
