<?php


require_once "BaseShape.php";

class Circle extends Shape
{
    protected string $name = "Circle";
    protected int|null $sides = null;
}

class Rectangular extends Shape
{

    protected string $name = "Rectangular";
    protected int|null $sides = 4;
}

$c = new Circle("circle");


// $c->draw();


// var_dump($c instanceof Rectangular);


// lets get started
