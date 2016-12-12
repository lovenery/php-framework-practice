<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass = 'stdClass')
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        // return $statement->fetchAll(PDO::FETCH_OBJ); // 這個也可以
        // return $statement->fetchAll(PDO::FETCH_CLASS); // 這個也可以
        // 但這樣才可用model裡的method, ex: $tasks[0]->foobar();
        return $statement->fetchAll(PDO::FETCH_CLASS, "App\\Models\\{$intoClass}");
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) value (%s)',
            $table,
            implode(', ', array_keys($parameters)), // colum name : (name, age)
            ':' . implode(', :', array_keys($parameters)) // value ： (:name, :age)
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $e) {
            die('Whoops, something went wrong.');
        }

    }
}
