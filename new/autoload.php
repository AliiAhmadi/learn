<?php

spl_autoload_register("autoload");

function autoload($class)
{
    $fullPath = __DIR__ . "/$class.php";
    if (file_exists($fullPath)) {
        require_once $fullPath;
    } else {
        die("$fullPath does not exist");
    }
}
