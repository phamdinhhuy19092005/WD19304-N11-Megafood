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


    // ============================= EDIT ============================= //
    public function editProduct()
    {
        $title = "Admin - Chỉnh sửa sản phẩm";
        $page = "bo-EditProduct";

        $productModel = new Product();

        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $product = $productModel->getProductById($id);

            if (!$product) {
                die('Không có sản phẩm với ID này');
            }

            $isFeatured = $product['is_featured'];
            $categoryId = $product['id_categories'];
            $sale = $product['sale'];
        } else {
            die('Không có ID sản phẩm');
        }

        $fullPath = $product['image_url'];

        $relativePath = str_replace('/MegaFood_DA1_N11/BackEnd/public/img/frontend/layouts/', '', $fullPath);

        $products = $productModel->getAllProducts();

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-EditProduct.php';  // Ensure that $product is available here
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    public function updateProduct()
    {
        $productModel = new Product();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
            if (!isset($_GET['id'])) {
                die('Không tìm thấy ID sản phẩm.');
            }

            $productId = intval($_GET['id']);
            $name = $_POST['name'];
            $img = $_POST['img'];
            $price = str_replace('.', '', $_POST['price']); 
            $description = $_POST['mota'];
            $status = $_POST['status'];
            $categoryId = $_POST['category_id'];
            $isFeatured = ($_POST['is_featured'] === 'true') ? true : false;
            $sale = ($_POST['sale'] === 'true') ? true : false;

            $result = $productModel->updateProduct($productId, $name, $img, $price, $description, $status, $categoryId, $isFeatured, $sale);

            if ($result) {
                header('Location: ' . BASE_URL . '?route=admin&action=bo-Product');
                exit;
            } else {
                echo "Cập nhật sản phẩm thất bại!";
            }
        } else {
            die('Yêu cầu không hợp lệ.');
        }
    }
    public function editCustomer()
    {
        $title = "Admin - Chỉnh sửa khách hàng";
        $page = "bo-EditCustomer";

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-EditCusstomer.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }
}
