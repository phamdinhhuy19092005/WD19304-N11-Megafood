<?php
class AboutController
{
    public function about()
    {
        $title = "Mega Food - Giới thiệu";
        $page = "about";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/about.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}