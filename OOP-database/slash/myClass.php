<?php

function printer($data)
{
    echo "\n";
    print_r($data);
    echo "\n";
}


class test
{
    public $first = "public";
    protected $second = "protected";
    private $third = "private";
}

$test1 = new test();
printer($test1);
$test2 = (array) $test1;
printer($test2);
$test3 = (object) $test2;
printer($test3);
