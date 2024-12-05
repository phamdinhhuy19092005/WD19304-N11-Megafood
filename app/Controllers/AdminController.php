<?php
require_once __DIR__ . '/../Models/Auth.php';
require_once __DIR__ . '/../Models/Users.php';
require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Categories.php';


class AdminController
{
    // ============================= PAGE ADMIN ============================= //

    // Login admin
    public function login()
    {
        $title = "Admin - Đăng nhập";
        $page = "bo-Login";
        include __DIR__ . '/../Views/backoffice/layouts/header.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-login.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    // Trang chủ admin
    public function homeAdmin()
    {
        $title = "Admin - Trang chủ";
        $page = "bo-Home";

        $userModel = new Users();
        $productModel = new Product();
        $categoriesModel = new Categories();


        $products = $productModel->getAllProducts();
        $users = $userModel->getAllUser();
        $categories = $categoriesModel->getAllCategory();


        $productCount = count($products);
        $usersCount = count($users);
        $categoryCount = count(($categories));

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-homeAdmin.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    //Trang quản trị viên
    public function adminitrastor()
    {
        $title = "Admin - Quản trị viên";
        $page = "bo-Administrator";
        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-Administrator.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    //Trang quyền truy cập
    public function access()
    {
        $title = "Admin - Quyền truy cập";
        $page = "bo-Access";
        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-Access.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    //Trang quản lí danh mục
    public function adminCategory()
    {
        $title = "Admin - Quản lí danh mục";
        $page = "bo-Category";

        $categoriesModel = new Categories();

        $categories = $categoriesModel->getAllCategory();


        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-Category.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    //Trang quản lí sản phẩm
    public function adminProduct()
    {
        $title = "Admin - Quản lí sản phẩm";
        $page = "bo-Product";

        $productModel = new Product();
        $products = $productModel->getAllProducts();


        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-Product.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    //Trang quản lí đơn hàng
    public function adminOrder()
    {
        $title = "Admin - Quản lí đơn hàng";
        $page = "bo-Order";
        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-Order.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    //Trang quản lí khách hàng
    public function adminCustomer()
    {
        $title = "Admin - Quản lí khách hàng";
        $page = "bo-Customer";

        $userModel = new Users();
        $users = $userModel->getAllUser();

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-Customer.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    // ============================= CREATED ============================= //

    public function createCategory()
    {
        $title = "Admin - Tạo danh mục";
        $page = "bo-CreateCategory";

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-CreateCategory.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }
    public function createAdministrator()
    {
        $title = "Admin - Tạo quản trị viên";
        $page = "bo-CreateAdministrator";

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-CreateAdministrator.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    public function createCustomer()
    {
        $title = "Admin - Tạo khách hàng";
        $page = "bo-CreateCustomer";

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-CreateCustomer.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    public function createProduct()
    {
        $title = "Admin - Tạo sản phẩm";
        $page = "bo-CreateProduct";

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-CreateProduct.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }
}
