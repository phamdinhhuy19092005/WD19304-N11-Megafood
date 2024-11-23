<!-- /app/Controllers/HomeController.php -->
<?php
class HomeController
{
    public function index()
    {
        $title = "Mega Food";
        $page = "home";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/home.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}

