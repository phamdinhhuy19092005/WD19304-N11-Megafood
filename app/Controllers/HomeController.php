<?php

require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/News.php';  

class HomeController
{
    public function index()
    {
        $title = "Mega Food";
        $page = "home";

        include __DIR__ . '/../Views/layouts/header.php';

        $productModel = new Product();
        $newModel = new News();

        if (isset($_GET['category_id'])) {
            $categoryId = intval($_GET['category_id']);
            $products = $productModel->getProductsByCategory($categoryId);
        } else {
            $products = $productModel->getAllProducts();
        }

<<<<<<< HEAD
        $news = $newModel->getAllNews();
        $featuredProducts = $productModel->getProductFeatured();
=======
        // $featuredProducts = $productModel->getProductFeatured();
>>>>>>> 102bfbc70abf51e0d1d1c9bd5cd5c4c4ea0e9cc4

        include __DIR__ . '/../Views/pages/home.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
