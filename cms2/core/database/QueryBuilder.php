<?php

class QueryBuilder {
    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;

    }

    public function getAll($table) {
        $statement = $this->conn->prepare("SELECT * FROM {$table};");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {


        $sql = sprintf(
          "INSERT INTO %s (%s) VALUES(%s)",
            $table,
            implode(', ', array_keys($parameters)),
            ":" . implode(', :', array_keys($parameters))
        );
        $statement = $this->conn->prepare($sql);

        $statement->execute($parameters);
    }
}

