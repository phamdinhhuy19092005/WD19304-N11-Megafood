<?php
require_once __DIR__ . '/../../config/database.php';

if (isset($_POST["createCategory"])) {
    $name = $_POST['name'] ?? '';
    $status = $_POST['status'] ?? '';
    $image = $_FILES['image'] ?? null;

    echo $_SERVER['DOCUMENT_ROOT'];


    if (isset($_POST["createCategory"])) {
        $name = $_POST['name'] ?? '';
        $status = $_POST['status'] ?? '';
        $image = $_FILES['image'] ?? null;

        if ($image && $image['error'] == 0) {
            $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/MegaFood_DA1_N11/BackEnd/public/img/frontend/layouts/category/';
            $fileName = basename($image['name']);
            $uploadFile = $uploadDir . $fileName;

            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (in_array($image['type'], $allowedTypes)) {
                if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
                    // Lưu vào cơ sở dữ liệu đường dẫn tương đối
                    $category = new Categories();
                    $imagePath = 'category/' . $fileName; 
                    $category->createCategory($name, $status, $imagePath);
                } else {
                    echo 'Lỗi khi tải ảnh lên.';
                }
            } else {
                echo 'Chỉ cho phép ảnh (JPEG, PNG, GIF).';
            }
        } else {
            echo 'Không có ảnh được tải lên hoặc có lỗi.';
        }
    }
}



class Categories
{
    private $conn;
    private $table = 'categories';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Lấy tất cả danh mục
    public function getAllCategory()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $categories;
    }

    // Lấy số lượng sản phẩm theo danh mục
    public function getProductCountByCategory($categoryId)
    {
        $query = "SELECT COUNT(*) AS product_count FROM products WHERE id_categories = :id_categories";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_categories', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['product_count'] ?? 0;
    }

    // Tạo danh mục mới
    public function createCategory($name, $status, $imagePath)
    {
        // Kiểm tra xem $imagePath có phải là chuỗi hợp lệ không
        if (empty($imagePath)) {
            echo 'Đường dẫn ảnh không hợp lệ.';
            return;
        }

        // Lưu vào cơ sở dữ liệu
        $query = "INSERT INTO categories (name, status, image_url, created_at, updated_at) 
              VALUES (:name, :status, :image_url, NOW(), NOW())";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $stmt->bindParam(':image_url', $imagePath, PDO::PARAM_STR); // Đảm bảo imagePath là chuỗi

        if ($stmt->execute()) {
            echo "Tạo danh mục thành công!";
        } else {
            echo "Có lỗi xảy ra!";
        }
    }
}
