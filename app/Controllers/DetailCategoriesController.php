<?php
require_once __DIR__ . '/../Models/Product.php';

class DetailCategoriesController
{
    public function detailCategories()
    {
        $title = "Mega Food";
        $page = "detailCategories";

        // Lấy category_id từ URL
        $categoryId = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;

        if ($categoryId <= 0) {
            die('Invalid category ID');
        }

        // Tạo đối tượng Product và lấy sản phẩm theo danh mục
        $productModel = new Product();
        $products = $productModel->getProductsByCategory($categoryId); // lấy sản phẩm theo category_id

        // Kiểm tra nếu không có sản phẩm
        if (empty($products)) {
            $message = "No products available in this category.";
        }

        // Gọi giao diện
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/detailCategories.php';  // đảm bảo view nhận dữ liệu
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
