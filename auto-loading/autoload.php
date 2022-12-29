<?php

function auto_load($class)
{
    $fileName = "$class.php";
    echo "require this class => $class";
    require_once $fileName;
}

spl_autoload_register("auto_load");
