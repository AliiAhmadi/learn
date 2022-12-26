<?php


class Human
{
    public $name;
    private $age;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setAge($newAge)
    {
        if (isset($this->age)) {
            if ($newAge > $this->age) {
                $this->age = $newAge;
            }
        }
        if (is_numeric($newAge)) {
            $this->age = $newAge;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$me = new Human();
