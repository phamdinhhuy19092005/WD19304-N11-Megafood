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

        if (isset($_GET['category_id'])) {
            $categoryId = intval($_GET['category_id']); 
            $products = $productModel->getProductsByCategory($categoryId);
            include __DIR__ . '/../Views/pages/products.php';
        }
        elseif (isset($_GET['id'])) {
            $title = "MegaFood - Chi tiết sản phẩm";
            $page = "product-details";
            include __DIR__ . '/../Views/pages/product-details.php';
        }
        else {
            $products = $productModel->getAllProducts(); 
            include __DIR__ . '/../Views/pages/products.php';
        }

        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
