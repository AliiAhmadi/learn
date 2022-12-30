<?php


class Math
{
    public static function multiply($Numbers): int|float
    {
        $result = 1;
        foreach ($Numbers as $key => $Number) {
            # code...
            $result *= $Number;
        }
        return $result;
    }
}
class Magic
{
    public function __construct()
    {
    }

    public function __sleep()
    {
    }

    public function __serialize(): array
    {
        return [];
    }

    public function __unserialize(array $data): void
    {
    }

    public function __destruct()
    {
    }

    public function __wakeup()
    {
    }

    public function __toString()
    {
    }

    public function __invoke(...$arr)
    {
    }

    public function __debugInfo()
    {
        // This method is used when try to var_dump an object of this class
    }

    public function __clone()
    {
    }

    public function __set($name, $value)
    {
        // This method will call when the object is try to set a value to a property that is not accessible
    }

    public function __get($name)
    {
        // This method will call when the object is try to get a value from a property that is not accessible
    }

    public function __isset($name)
    {
    }

    public function __unset($name)
    {
    }

    public function __call($name, $arguments)
    {
        return Math::{$name}($arguments);
    }

    public static function __callStatic($name, $arguments)
    {
    }
}


$magic = new Magic();

echo $magic->multiply(12, 4);
