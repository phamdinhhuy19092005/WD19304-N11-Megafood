<!-- /app/Controllers/HomeController.php -->
<?php
class ContactController
{
    public function contact()
    {
        $title = "Mega Food - Liên Hệ";
        $page = "contact";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/contact.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}

