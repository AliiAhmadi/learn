<?php

function loader($class)
{
    $fullPath = __DIR__ . "/$class.php";
    if (file_exists($fullPath)) {
        require_once "$fullPath";
    } else {
        die("$fullPath does not exist");
    }
}

spl_autoload_register("loader");
