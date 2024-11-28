<!-- /app/Controllers/HomeController.php -->
<?php

require_once __DIR__ . '/../Models/Product.php';
class HomeController
{
    public function index()
    {
        $title = "Mega Food";
        $page = "home";

        include __DIR__ . '/../Views/layouts/header.php';

        $productModel = new Product();

        if (isset($_GET['category_id'])) {
            $categoryId = intval($_GET['category_id']);
            $products = $productModel->getProductsByCategory($categoryId);
        } else {
            $products = $productModel->getAllProducts();
        }


        include __DIR__ . '/../Views/pages/home.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
