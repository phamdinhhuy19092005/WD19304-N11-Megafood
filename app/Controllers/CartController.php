<!-- /app/Controllers/HomeController.php -->
<?php
class CartController
{
    public function index()
    {
        $title = "MegaFood - Giỏ hàng";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/cart.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}

