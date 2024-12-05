<?php
require_once __DIR__ . '/../../config/database.php';

// <============================= FRONTEND =============================>

//<======== REGISTER ==========>
if (isset($_POST["signUp"])) {
    $lastName = $_POST["lastName"];
    $firstName = $_POST["firstName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // echo $hashedPassword;

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

//<======== LOGIN ==========>

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

            // Start session if not already started
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            // Debugging: Check what data we are storing in the session
            echo "<br>First Name: " . $user['first_name'];
            echo "<br>Last Name: " . $user['last_name'];

            // Store the values in the session
            $_SESSION['email'] = $user['email'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];

            // Redirect to home page
            header('Location: http://localhost/MegaFood_DA1_N11/BackEnd/index.php?route=home');
            exit();
        } else {
            echo "<br>Mật khẩu không đúng.";
        }
    }
}

// // <============================= BACKOFFICE =============================>

if (isset($_POST['submitAdmin'])) {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Truy vấn thông tin admin từ cơ sở dữ liệu
    $sql = "SELECT * FROM admins WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    // Kiểm tra xem admin có tồn tại không
    if ($stmt->rowCount() > 0) {
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($password === $admin['password']) {
            // Đăng nhập thành công, bắt đầu session
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            // Lưu thông tin vào session
            $_SESSION['admin_email'] = $admin['email'];
            $_SESSION['admin_name'] = $admin['name'];

            // Chuyển hướng đến trang quản lý admin
            header('Location: http://localhost/MegaFood_DA1_N11/BackEnd/?route=admin&action=homeAdmin');
            exit();
        } else {
            // Mật khẩu không đúng
            echo "Mật khẩu không đúng.";
        }
    } else {
        // Không tìm thấy admin
        echo "Email không tồn tại trong hệ thống.";
    }
}
