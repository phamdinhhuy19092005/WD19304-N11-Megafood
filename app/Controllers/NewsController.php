<!-- /app/Controllers/HomeController.php -->
<?php
require_once __DIR__ . '/../Models/News.php';
class NewsController
{
    public function news()
    {
        $title = "Mega Food - Tin tức";
        $page = "news";

        $newModel = new News();
        $news = $newModel->getAllNews();

        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/news.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}