<?php
require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Categories.php';


class DetailCategoriesController
{
    public function detailCategories()
    {
        $title = "Mega Food";
        $page = "detailCategories";

        $categoriesModel = new Categories();
        $categories = $categoriesModel->getAllCategory();
        
        // Gọi giao diện
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/detailCategories.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
