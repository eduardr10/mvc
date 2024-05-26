<?php

class Database{

    public $pdo;

    public function __construct(
        private $host,
        private $db_name,
        private $username,
        private $password,    
        )
    {
        //Data source name
        $dsn = "mysql:host=$this->host;dbname=$this->db_name";
        $this->pdo = new PDO($dsn, $this->username, $this->password);
    }

    public function prepareQuery($sql) {
        return $this->pdo->prepare($sql);
    }

    public function executeQuery($stmt) {
        $stmt->execute();
        return $stmt;
    }

    public function fetchAll($stmt) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}