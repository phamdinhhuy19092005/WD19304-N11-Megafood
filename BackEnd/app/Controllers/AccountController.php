<?php
class AccountController
{
    public function accounts()
    {
        // Đặt tiêu đề và trang mặc định
        $title = "MegaFood - Thông tin tài khoản";
        $page = isset($_GET['page']) ? $_GET['page'] : "account";

        // Bao gồm header
        include __DIR__ . '/../Views/layouts/header.php';

        // Điều kiện kiểm tra giá trị của page
        if ($page === "account") {
            include __DIR__ . '/../Views/pages/account.php';
        } elseif ($page === "orders") {
            include __DIR__ . '/../Views/pages/orders.php';
        } elseif ($page === "changepassword") {
            include __DIR__ . '/../Views/pages/change-password.php';
        } elseif ($page === "addressbook") {
            include __DIR__ . '/../Views/pages/adddress-book.php';
        } elseif ($page === "addaddress") {
            include __DIR__ . '/../Views/pages/add-address.php';
        } 

        // Bao gồm footer
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
