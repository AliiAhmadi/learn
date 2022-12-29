<?php

function test()
{
    echo "Hello World";
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $func = $_GET["func"];
    if (is_callable($func)) {
        $func();
    } else {
        echo "NOT IMPLEMENTED";
    }
}
