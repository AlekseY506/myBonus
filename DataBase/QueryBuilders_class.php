<?php


class QueryBuilders
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM users";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        //3.Получить ассоциативный массив
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}