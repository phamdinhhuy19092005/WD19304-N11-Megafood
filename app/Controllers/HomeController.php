<?php

require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/News.php';
require_once __DIR__ . '/../Models/Categories.php';

class HomeController
{
    public function index()
    {
        $title = "Mega Food";
        $page = "home";

        include __DIR__ . '/../Views/layouts/header.php';

        $productModel = new Product();
        $newModel = new News();
        $categoriesModel = new Categories();

        if (isset($_GET['category_id'])) {
            $categoryId = intval($_GET['category_id']);
            $products = $productModel->getProductsByCategory($categoryId);
        } else {
            $products = $productModel->getAllProducts();
        }

        $news = $newModel->getAllNews();
        $featuredProducts = $productModel->getProductFeatured();

        $categories = $categoriesModel->getAllCategory(); 

        foreach ($categories as &$category) {
            $category['product_count'] = $categoriesModel->getProductCountByCategory($category['id']);
        }

        include __DIR__ . '/../Views/pages/home.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
