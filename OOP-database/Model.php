<?php

class Task
{
    private $database;

    public function __construct()
    {
        try {
            $this->database = new PDO("mysql:dbname=tasks;host=localhost;charset=utf8", "root", "");
        } catch (PDOException $error) {
            // echo $error->getMessage();
            die($error->getMessage());
        }
    }

    public function find(int $id)
    {
        $query = "SELECT * FROM task_table WHERE id = ?";
        $stmt = $this->database->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
