<?php

class AdminController
{
    public function login()
    {
        $title = "Admin - Đăng nhập";
        $page = "bo-Login";
        include __DIR__ . '/../Views/backoffice/layouts/header.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-login.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    // Trang chủ admin
    public function homeAdmin()
    {
        $title = "Admin - Trang chủ";
        $page = "bo-Home";
        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-homeAdmin.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    
}
