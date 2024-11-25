<?php
require_once __DIR__ . '/../../config/database.php';

if (isset($_POST["signUp"])) {
    $lastName = $_POST["lastName"];
    $firstName = $_POST["firstName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    echo $hashedPassword;

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
            header('Location: http://localhost/MegaFood_DA1_N11/BackEnd/index.php?route=login');
            exit();
        } else {
            $errorInfo = $insertStmt->errorInfo();
            echo "Lỗi: " . $errorInfo[2];
        }
    }
}

if (isset($_POST['login'])) {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Mật khẩu lưu trong DB: " . $user['password']; 
        echo "<br>Mật khẩu nhập: " . $password;

        if (password_verify($password, $user['password'])) {
            echo "<br>Đăng nhập thành công!";
            session_start();
            $_SESSION['email'] = $user['email'];
            header('Location: http://localhost/MegaFood_DA1_N11/BackEnd/index.php?route=home');
            exit();
        } else {
            echo "<br>Mật khẩu không đúng.";
        }
    } else {
        echo "Email không tồn tại.";
    }
}
 

