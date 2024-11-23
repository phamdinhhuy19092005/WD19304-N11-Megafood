<!-- /app/Controllers/HomeController.php -->
<?php
class LoginController
{
    public function login()
    {
        $title = "Mega Food - Đăng nhập";
        $page = "login";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/login.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}