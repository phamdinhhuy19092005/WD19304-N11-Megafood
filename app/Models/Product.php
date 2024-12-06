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
    public function updateProduct($id, $data)
    {
        if (!is_array($data)) {
            throw new TypeError("Dữ liệu truyền vào phải là mảng.");
        }

        $sql = "UPDATE products SET 
                    name = ?, 
                    image_url = ?, 
                    price = ?, 
                    description = ?, 
                    status = ?, 
                    id_categories = ?, 
                    is_featured = ?, 
                    sale = ? 
                WHERE id = ?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $data['name'],
            $data['image_url'],
            $data['price'],
            $data['description'],
            $data['status'],
            $data['id_categories'],
            $data['is_featured'],
            $data['sale'],
            $id
        ]);
    }
}
