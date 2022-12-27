<?php

require_once "BaseShape.php";

class Rectangular extends Shape
{

    protected string $name = "Rectangular";
    protected int|null $sides = 4;
}


$r = new Rectangular();

echo $r->getSides() . PHP_EOL;

$r->draw();


var_dump($r instanceof Rectangular);
