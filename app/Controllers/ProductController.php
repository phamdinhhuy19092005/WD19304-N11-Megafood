
<?php
class ProductController
{
    public function index()
    {
        $title = "MegaFood - Sản Phẩm";
        $page = "product";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/products.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}