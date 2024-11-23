<!-- /app/Controllers/HomeController.php -->
<?php
class FaqController
{
    public function faq()
    {
        $title = "MegaFood - Câu hỏi thường gặp";
        $page = "faq";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/faq.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}

