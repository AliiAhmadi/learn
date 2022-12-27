<?php

require_once "BaseModel.php";

class Task extends BaseModel
{
    protected string $table = "tasks";
}

$first = new Task();

var_dump($first->get(45));
