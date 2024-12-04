<?php
// Thư viện PHPMailer
require_once './phpmailer/Exception.php';
require_once './phpmailer/PHPMailer.php';
require_once './phpmailer/SMTP.php';
require_once 'function.php';

// Nhận dữ liệu từ AJAX
$email = $_POST['email'];
$subject = $_POST['subject'];
$content = $_POST['content'];

// Kiểm tra dữ liệu
if (!empty($email) && !empty($subject) && !empty($content)) {
    try {
        sendMail($email, $subject, $content);
        echo "success"; // Trả về kết quả thành công
    } catch (Exception $e) {
        error_log("Mailer Error: " . $e->getMessage(), 3, "./error.log");
        echo "Mailer Error: " . $e->getMessage(); // Trả về lỗi để debug
    }
} else {
    echo "error: Missing data"; // Lỗi nếu dữ liệu không hợp lệ
}
?>