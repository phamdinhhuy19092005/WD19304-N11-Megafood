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
    // Lấy sản phẩm giảm giá
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
    public function createProduct($data)
    {

        
        // Kiểm tra nếu dữ liệu truyền vào là mảng
        if (!is_array($data)) {
            throw new TypeError("Dữ liệu truyền vào phải là mảng.");
        }

        // Kiểm tra kết nối cơ sở dữ liệu
        if (!$this->conn) {
            throw new RuntimeException("Không thể kết nối đến cơ sở dữ liệu.");
        }

        // Tạo câu truy vấn
        $sql = "INSERT INTO products (name, image_url, price, description, status, id_categories, is_featured, sale) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        // Thực thi câu lệnh
        return $stmt->execute([
            $data['name'] ?? '',
            $data['image_url'] ?? '',
            $data['price'] ?? 0,
            $data['description'] ?? '',
            $data['status'] ?? '',
            $data['id_categories'] ?? 0,
            $data['is_featured'] ?? 0,
            $data['sale'] ?? 0
        ]);
    }





    // ========================= EDIT PRODUCT =========================//
    public function updateProduct($id, $data)
    {
        if (!is_array($data)) {
            throw new TypeError("Dữ liệu truyền vào phải là mảng.");
        }

        if (!$this->conn) {
            throw new RuntimeException("Không thể kết nối đến cơ sở dữ liệu.");
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
            $data['name'] ?? '',
            $data['image_url'] ?? '',
            $data['price'] ?? 0,
            $data['description'] ?? '',
            $data['status'] ?? '',
            $data['id_categories'] ?? 0,
            $data['is_featured'] ?? 0,
            $data['sale'] ?? 0,
            $id
        ]);
    }
}
