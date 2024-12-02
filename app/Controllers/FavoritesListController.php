<!-- /app/Controllers/HomeController.php -->
<?php
class FavoritesListController
{
    public function favoritesList()
    {
        $title = "Mega Food - Danh sách yêu thích";
        $page = "favorites";

        

        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/favoritesList.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}