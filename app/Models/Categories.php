<?php
require_once __DIR__ . '/../../config/database.php';

class Categories
{
    private $conn;
    private $table = 'categories';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Lấy tất cả tin tức
    public function getAllCategory()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $categories;
    }

    public function getProductCountByCategory($categoryId)
    {
        $query = "SELECT COUNT(*) AS product_count FROM products WHERE id_categories = :id_categories";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_categories', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['product_count'] ?? 0;
    }
}
