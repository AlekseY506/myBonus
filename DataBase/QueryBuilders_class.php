<?php


class QueryBuilders
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table)
    {
        $sql = "SELECT * FROM {$table}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        //3.Получить ассоциативный массив
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($table, $data)
    {
        $keys = implode(',', array_keys($data));
        $tags = ":" . implode(',:', array_keys($data));
        $sql = "INSERT INTO {$table} ({$keys}) VALUE ($tags)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
    }
}