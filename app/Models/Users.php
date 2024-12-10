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

    public function getUserById($id)
    {
        if (!$id || !is_numeric($id)) {
            return null;
        }

        $query = "SELECT id, first_name, last_name, email, phone, status, created_at FROM " . $this->table . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user ? $user : null;
    }

    public function updateCustomer($id, $data)
    {
        if (!is_array($data)) {
            throw new TypeError("Dữ liệu truyền vào phải là mảng.");
        }

        if (!$this->conn) {
            throw new RuntimeException("Không thể kết nối đến cơ sở dữ liệu.");
        }


        $sql = "UPDATE users SET 
                first_name = ?, 
                last_name = ?, 
                email = ?, 
                phone = ?, 
                status = ? 
            WHERE id = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $data['first_name'],
            $data['last_name'],
            $data['email'],
            $data['phone'],
            $data['status'],
            $id
        ]);
    }

    // public function deleteCustomer($id)
    // {
    //     if (!$id || !is_numeric($id)) {
    //         return false;
    //     }

    //     $query = "DELETE FROM " . $this->table . " WHERE id = :id LIMIT 1";
    //     $stmt = $this->conn->prepare($query);

    //     $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    //     return $stmt->execute();
    // }
}
