<!-- /app/Controllers/HomeController.php -->
<?php
class PaymentController
{
    public function payment()
    {
        $title = "MegaFood - Giỏ hàng";
        $page = "payment";
        // include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/payment.php';
        // include __DIR__ . '/../Views/layouts/footer.php';
    }
}

