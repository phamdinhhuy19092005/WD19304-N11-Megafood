<?php

include __DIR__ . '/../Models/Auth.php';

class AccountController
{
    public function accounts()
    {
        $title = "MegaFood - Thông tin tài khoản";
        $page = isset($_GET['page']) ? $_GET['page'] : "account";

        include __DIR__ . '/../Views/layouts/header.php';

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

        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
