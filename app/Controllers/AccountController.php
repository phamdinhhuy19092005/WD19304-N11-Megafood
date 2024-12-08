<?php

include __DIR__ . '/../Models/Auth.php';

class AccountController
{
    public function accounts()
    {
        $title = "MegaFood - Thông tin tài khoản";
        $page = isset($_GET['page']) ? $_GET['page'] : "account";

        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/account.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }

    public function orders()
    {
        $title = "MegaFood - Thông tin tài khoản";
        $page = isset($_GET['page']) ? $_GET['page'] : "account";

        $orderModel = new Orders();

        $orders = $orderModel->getAllOrder();

        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/orders.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }

    public function changepassword()
    {
        $title = "MegaFood - Thông tin tài khoản";
        $page = isset($_GET['page']) ? $_GET['page'] : "account";

        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/change-password.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }

    public function addressbook()
    {
        $title = "MegaFood - Thông tin tài khoản";
        $page = isset($_GET['page']) ? $_GET['page'] : "account";

        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/adddress-book.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }

    public function addaddress()
    {
        $title = "MegaFood - Thông tin tài khoản";
        $page = isset($_GET['page']) ? $_GET['page'] : "account";

        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/add-address.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}

 