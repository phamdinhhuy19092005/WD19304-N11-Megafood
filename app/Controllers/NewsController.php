<!-- /app/Controllers/HomeController.php -->
<?php
class NewsController
{
    public function news()
    {
        $title = "Mega Food - Tin tức";
        $page = "news";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/news.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}