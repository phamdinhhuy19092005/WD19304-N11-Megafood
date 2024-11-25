<?php
require_once __DIR__ . '/../../config/database.php';

if (isset($_POST["signUp"])) {
    // Lấy thông tin từ form đăng ký
    $lastName = $_POST["lastName"];
    $firstName = $_POST["firstName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $checkEmail = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($checkEmail);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Email đã tồn tại.";
    } else {
        $insertQuery = "INSERT INTO users (first_name, last_name, email, phone, password) 
                        VALUES (:firstName, :lastName, :email, :phone, :password)";
        $insertStmt = $conn->prepare($insertQuery);
        $insertStmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $insertStmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $insertStmt->bindParam(':email', $email, PDO::PARAM_STR);
        $insertStmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $insertStmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

        if ($insertStmt->execute()) {
            echo "Đăng ký thành công!";
        } else {
            $errorInfo = $insertStmt->errorInfo();
            echo "Lỗi: " . $errorInfo[2];
        }
    }
}
