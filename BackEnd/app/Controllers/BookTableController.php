<?php
class BookTableController
{
    public function booktable()
    {
        $title = "MegaFood - Giỏ hàng";
        $page = "book-table";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/book-table.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}