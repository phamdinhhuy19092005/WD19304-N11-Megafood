<?php

include __DIR__ . '/../Models/Product.php';

class ProductController
{
    public function products()
    {
        $title = "MegaFood - Danh sách sản phẩm";
        $page = "products";
        include __DIR__ . '/../Views/layouts/header.php';

        $productModel = new Product();

        // Hiển thị sản phẩm theo danh mục
        if (isset($_GET['category_id'])) {
            $categoryId = intval($_GET['category_id']); // Lấy `category_id` từ URL
            $products = $productModel->getProductsByCategory($categoryId); // Lấy sản phẩm theo danh mục
            include __DIR__ . '/../Views/pages/products.php';
        }
        // Hiển thị chi tiết sản phẩm
        elseif (isset($_GET['id'])) {
            $title = "MegaFood - Chi tiết sản phẩm";
            $page = "product-details";
            include __DIR__ . '/../Views/pages/product-details.php';
        }
        // Hiển thị tất cả sản phẩm
        else {
            $products = $productModel->getAllProducts(); // Lấy tất cả sản phẩm
            include __DIR__ . '/../Views/pages/products.php';
        }

        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
