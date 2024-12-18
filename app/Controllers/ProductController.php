<?php

require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Categories.php';


class ProductController
{
    public function products()
    {
        $title = "MegaFood - Danh sách sản phẩm";
        $page = "products";

        include __DIR__ . '/../Views/layouts/header.php';

        $productModel = new Product();
        $categoriesModel = new Categories();

        if (isset($_GET['category_id'])) {
            $categoryId = intval($_GET['category_id']);
            $products = $productModel->getProductsByCategory($categoryId);
        } else {
            $products = $productModel->getAllProducts();
        }

        $categories = $categoriesModel->getAllCategory(); 

        foreach ($categories as &$category) {
            $category['product_count'] = $categoriesModel->getProductCountByCategory($category['id']);
        }


        include __DIR__ . '/../Views/pages/products.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }

    public function productDetail()
    {
        $title = "MegaFood - Chi tiết sản phẩm";
        $page = "product-details";

        include __DIR__ . '/../Views/layouts/header.php';

        $productModel = new Product();

        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $product = $productModel->getProductById($id);

            if (!$product) {
                die('Không có sản phẩm với ID này');
            }

            $categoryId = $product['id_categories'];
        } else {
            die('Không có ID sản phẩm');
        }

        if (isset($_GET['category_id'])) {
            $categoryId = intval($_GET['category_id']);
        }

        $products = $productModel->getProductsByCategory($categoryId);

        include __DIR__ . '/../Views/pages/product-details.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
   
}
