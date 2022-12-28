<?php

class Math
{
    private static float $PI = 3.14;
    private static float $e = 2.71828;

    public static function PI(): float
    {
        return self::$PI;
    }

    public static function E(): float
    {
        return self::$e;
    }

    public static function sum(float $first, float $second): float
    {
        return $first + $second;
    }

    public static function product(float $first, float $second): float
    {
        return $first * $second;
    }

    public static function power(float $first, float $second): float
    {
        return $first ** $second;
    }

    public static function division(float $first, float $second): float
    {
        return $first / $second;
    }

    public static function  floorDivision(float $first, float $second): float
    {
        $result = 0;
        while ($first >= $second) {
            $first -= $second;
            $result++;
        }
        return $result;
    }
}


echo Math::floorDivision(12, 5);
