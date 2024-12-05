<?php

require_once __DIR__ . '/../../config/database.php';

class Users
{
    private $conn;
    private $table = 'users';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Lấy tất cả khách hàng
    public function getAllUser()
    {
        $query = "SELECT id, first_name, last_name, email, phone, status, created_at  FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }
}