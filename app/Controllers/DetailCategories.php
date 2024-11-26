<?php
class DetailCategoriesController
{
    public function detailCategories()
    {
        $title = "Mega Food";
        $page = "detailCategories";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/detailCategories.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}