<?php

class Database {
    private $_host = 'localhost';
    private $_db = 'apidb';
    private $_port = 5432;
    private $_user = 'postgres';
    private $_password = 'password';
    public $_pdo;

    public function getConnection() {
        $this->_pdo = null;
        $dsn = 'pgsql:host=' .$this->_host . ';port=' .$this->_port .';dbname=' .$this->_db;

        try {
            $this->_pdo = new PDO($dsn, $this->_user, $this->_password);
            echo 'connection ok';
        } catch (PDOException $e) {
            echo "Failed to connect to the database: " . $e->getMessage();
            exit;
        }

        return $this->_pdo;
    }

}
