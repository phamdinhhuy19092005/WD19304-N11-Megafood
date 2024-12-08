<?php
include __DIR__ . '/../Models/Orders.php';
class PaymentController
{
    public function payment()
    {
        $title = "MegaFood - Thanh toán";
        $page = "checkout";

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
        $totalPrice = 0;
        $totalQuantity = 0;

        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'] + 40000;
            $totalQuantity += $item['quantity'];
        }

        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/payment.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
