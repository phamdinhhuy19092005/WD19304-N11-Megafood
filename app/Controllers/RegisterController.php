<!-- /app/Controllers/HomeController.php -->
<?php
class RegisterController
{
    public function register()
    {
        $title = "Mega Food - Đăng ký";
        $page = "register";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/register.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}