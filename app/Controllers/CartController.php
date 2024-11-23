<!-- /app/Controllers/HomeController.php -->
<?php
class CartController
{
    public function cart()
    {
        $title = "MegaFood - Giỏ hàng";
        $page = "cart";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/cart.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}

