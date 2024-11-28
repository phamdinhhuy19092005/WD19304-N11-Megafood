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


// Đảm bảo dùng `require_once` để tránh khai báo lại lớp Product
// require_once __DIR__ . '/../Models/Product.php';

// class CartController
// {
//     public function cart()
//     {
//         $title = "MegaFood - Giỏ hàng";
//         $page = "cart";

//         $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
//         $productModel = new Product();

//         $cartDetails = [];
//         foreach ($cart as $product_id => $product) {
//             $cartDetails[$product_id] = $productModel->getProductById($product_id);
//         }

//         include __DIR__ . '/../Views/layouts/header.php';
//         include __DIR__ . '/../Views/pages/cart.php';
//         include __DIR__ . '/../Views/layouts/footer.php';
//     }
// }
