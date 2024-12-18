<?php
class Database {
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $port = 3306;
    // public $port = 3366;
    public $conn;

    public function connect() {
        try {
            $dsn = "mysql:host={$this->servername};port={$this->port};dbname=duan1;charset=utf8";
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn; 
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
