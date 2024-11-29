<?php
require_once __DIR__ . '/../../config/database.php';

class Product
{
    private $conn;
    private $table = 'products';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Lấy tất cả sản phẩm
    public function getAllProducts()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy sản phẩm theo danh mục
    public function getProductsByCategory($categoryId)
    {
        $query = "SELECT id, name, description, price, image_url, id_categories FROM " . $this->table . " WHERE id_categories = :id_categories";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_categories', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy sản phẩm theo ID
    public function getProductById($id)
    {
        $query = "SELECT id, name, description, price, image_url, id_categories FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Lấy sản phẩm nổi bật
    public function getProductFeatured()
    {
        $query = "SELECT id, name, description, price, image_url, id_categories 
              FROM " . $this->table . " 
              WHERE is_featured = TRUE"; 
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
