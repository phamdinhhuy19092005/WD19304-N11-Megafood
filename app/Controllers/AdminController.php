<?php

class AdminController
{
    public function login()
    {
        $title = "Admin - Đăng nhập";
        $page = "bo-Login";
        include __DIR__ . '/../Views/backoffice/pages/bo-login.php';
    }
    public function dashboard()
    {
        echo "Welcome to Admin Dashboard";
    }

    public function manageUsers()
    {
        // Quản lý người dùng
        echo "Admin User Management";
    }

    public function manageOrders()
    {
        // Quản lý đơn hàng
        echo "Admin Order Management";
    }

    public function settings()
    {
        // Cài đặt admin
        echo "Admin Settings";
    }
}
