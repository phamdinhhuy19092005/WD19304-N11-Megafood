<?php
class BoLoginController{
    public function boLogin(){
        $title = "Admin - Đăng nhập";
        $page = "bo-Login";
        include __DIR__ . '/../Views/backoffice/pages/bo-login.php';
    }
}