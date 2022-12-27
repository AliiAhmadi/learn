<?php

class Shape
{
    protected string $name;
    protected int|null $sides;

    public function __construct()
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSides(): int
    {
        if ($this->sides) {
            return $this->sides;
        } else {
            return 0;
        }
    }

    public function draw(): void
    {
        echo "drawing a " . $this->name . PHP_EOL;
    }
}
