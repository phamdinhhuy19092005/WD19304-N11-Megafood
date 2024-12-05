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
        // Sử dụng đúng cột 'id_categories'
        $query = "SELECT id, name, description, price, image_url, id_categories FROM " . $this->table . " WHERE id_categories = :id_categories";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_categories', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy sản phẩm theo ID
    public function getProductById($id)
    {
        $query = "SELECT id, name, description, price, image_url, id_categories, is_featured, sale, status FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function getProductFeatured()
    {
        $query = "SELECT id, name, description, price, image_url, id_categories 
              FROM " . $this->table . " 
              WHERE is_featured = TRUE";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductSale()
    {
        $query = "SELECT id, name, description, price, image_url, id_categories 
              FROM " . $this->table . " 
              WHERE sale = TRUE";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // ========================= ADD PRODUCT =========================//




    // ========================= EDIT PRODUCT =========================//
    public function updateProduct($id, $name, $img, $price, $description, $status, $category_id, $is_featured, $sale)
    {
        $query = "UPDATE " . $this->table . " 
              SET 
                  name = :name, 
                  image_url = :img, 
                  price = :price, 
                  description = :description, 
                  status = :status, 
                  id_categories = :category_id, 
                  is_featured = :is_featured, 
                  sale = :sale
              WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':img', $img, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        $stmt->bindParam(':is_featured', $is_featured, PDO::PARAM_BOOL);
        $stmt->bindParam(':sale', $sale, PDO::PARAM_BOOL);

        return $stmt->execute();
    }
}
