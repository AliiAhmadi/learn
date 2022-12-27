<?php

class BaseModel
{
    protected string $dbname = "myproject";
    protected $db;
    protected string $primeryKey = "id";
    protected string $table;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:dbname={$this->dbname};host=localhost;charset=utf8", "root", "");
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }

    public function get(int $id)
    {
        $query = "SELECT * FROM {$this->table} WHERE {$this->primeryKey} = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // public function insert
}
