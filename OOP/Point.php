<?php

class Point
{
    private float $x;
    private float $y;
    private static int $counter;

    public function __construct($x, $y)
    {
        self::$counter++;
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function setX(float $x): Point
    {
        $this->x = $x;
        return $this;
    }
    public function setY(float $y): Point
    {
        $this->y = $y;
        return $this;
    }

    public function copy(): Point
    {
        return new Point($this->getX(), $this->getY());
    }

    public function add(Point $point): Point
    {
        return new Point($this->getX() + $point->getX(), $this->getY() + $point->getY());
    }
}



class Line
{
    private Point $firstPoint;
    private Point $secondPoint;
    private float $slope;

    public function __construct(Point $first, Point $second)
    {
        $this->firstPoint = $first;
        $this->secondPoint = $second;
        $this->slope = ($second->getY() - $first->getY()) / ($second->getX() - $first->getX());
    }

    public function getSlope(): float
    {
        return $this->slope;
    }

    public function changeFirstPoint(Point $point): Line
    {
        $this->firstPoint = $point;
        return $this;
    }

    public function changeSecondPoint(Point $point): Line
    {
        $this->secondPoint = $point;
        return $this;
    }

    public function getFirstPoint(): Point
    {
        return $this->firstPoint;
    }

    public function getSecondPoint(): Point
    {
        return $this->secondPoint;
    }

    public function copy(): Line
    {
        return new Line($this->getFirstPoint(), $this->getSecondPoint());
    }
}
