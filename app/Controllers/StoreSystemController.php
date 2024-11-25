
<?php
class StoreSystemController
{
    public function storeSystem()
    {
        $title = "MegaFood - Giỏ hàng";
        $page = "storeSystem";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/storeSystem.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}

