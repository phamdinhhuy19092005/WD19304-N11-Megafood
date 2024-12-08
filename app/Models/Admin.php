<?php
require_once __DIR__ . '/../../config/database.php';

class Admins
{
    private $conn;
    private $table = 'admins';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Lấy tất cả danh mục
    public function getAllAdmin()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $admins = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $admins;
    }

   
}