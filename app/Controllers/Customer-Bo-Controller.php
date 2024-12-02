<?php
class CustomerBoController{
    public function CustomerBo(){
        $title = "Admin - Khách hàng";
        $page = "customerBo";
        include __DIR__ . '/../Views/backoffice/layouts/dashboard.php';
        include __DIR__ . '/../Views/backoffice/pages/customer.php';
    }
}