<?php

require_once __DIR__ . '/../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["btnPayment"])) {
        sleep(3);

        // Lấy giá trị từ POST
        $email = $_POST['email'] ?? '';
        $name = $_POST['name'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';
        $note = $_POST['note'] ?? '';
        $delivery_method = $_POST['delivery'] ?? '';
        $shipping_method = $_POST['shipping'] ?? '';
        $discount_code = $_POST['code'] ?? '';
        $payment_method = $_POST['payment'] ?? '';
        $total_price = $_POST['total_price'] ?? 0;
        $total_product = $_POST['total_product'] ?? 0;
        

        // Lấy id_users dựa trên email
        $query_get_user_id = "SELECT id FROM users WHERE email = :email";
        $stmt = $conn->prepare($query_get_user_id);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() == 0) {
            echo 'Error: Người dùng không tồn tại.';
            exit;
        }

        // Lấy id_users từ kết quả truy vấn
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $id_users = $user['id'];

        // PDO chuẩn bị truy vấn để bảo vệ khỏi SQL injection
        $query = "INSERT INTO orders (customer_name, shipping_address, phone_number, email, status, total_price, payment_method, shipping_method, discount_code, notes, id_users, total_product, created_at, updated_at)
                  VALUES (:name, :address, :phone, :email, :status, :total_price, :payment_method, :shipping_method, :discount_code, :note, :id_users, :total_product, NOW(), NOW())";

        $stmt = $conn->prepare($query);

        $status = 'Pending';
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':total_price', $total_price);
        $stmt->bindParam(':payment_method', $payment_method);
        $stmt->bindParam(':shipping_method', $shipping_method);
        $stmt->bindParam(':discount_code', $discount_code);
        $stmt->bindParam(':note', $note);
        $stmt->bindParam(':id_users', $id_users, PDO::PARAM_INT);
        $stmt->bindParam(':total_product', $total_product, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Đơn hàng đã được tạo thành công!";
        } else {
            $errorInfo = $stmt->errorInfo();
            echo "Lỗi khi tạo đơn hàng: " . $errorInfo[2];
        }
    } else {
        // echo "Lỗi: Nút btnPayment không được gửi.";
    }
}

class Orders
{
    private $conn;
    private $table = 'orders';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }
    public function getAllOrder()
    {
        $query = "SELECT id, customer_name, shipping_address, phone_number, email, status, total_price,  payment_method, shipping_method, total_product, created_at, updated_at FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }
}
