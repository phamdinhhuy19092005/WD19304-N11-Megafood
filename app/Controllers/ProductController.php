<!-- /app/Controllers/HomeController.php -->
<?php

include __DIR__ . '/../Models/Product.php';
class ProductController
{
    public function products()
    {
        $title = isset($_GET['id']) ? "MegaFood - Chi tiết sản phẩm" : "MegaFood - Danh sách sản phẩm";
        $page = isset($_GET['id']) ? "product-details" : "products";
        include __DIR__ . '/../Views/layouts/header.php';

        if (isset($_GET['id'])) {
            include __DIR__ . '/../Views/pages/product-details.php';
        } else {
            $productModel = new Product();
            $products = $productModel->getAllProducts();
            include __DIR__ . '/../Views/pages/products.php';
        }

        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
