<?php

namespace App\Utilities;

class Math
{
    private static float $PI = 3.14;
    private static float $E = 2.71828182;

    public static function PI(): float
    {
        return self::$PI;
    }

    public static function E(): float
    {
        return self::$E;
    }
}
