<?php
require_once __DIR__ . '/../Models/Auth.php';
require_once __DIR__ . '/../Models/Users.php';
require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Categories.php';
require_once __DIR__ . '/../Models/Orders.php';
require_once __DIR__ . '/../Models/Admin.php';


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
        $orderModel = new Orders();


        
        
        
        $orders = $orderModel->getAllOrder();
        $products = $productModel->getAllProducts();
        $users = $userModel->getAllUser();
        $categories = $categoriesModel->getAllCategory();
        
        
        $productCount = count($products);
        $usersCount = count($users);
        $categoryCount = count(($categories));
        $orderCount = count($orders);

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-homeAdmin.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    //Trang quản trị viên
    public function adminitrastor()
    {
        $title = "Admin - Quản trị viên";
        $page = "bo-Administrator";

        $adminModel = new Admins();

        $admins = $adminModel->getAllAdmin();

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-Administrator.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    //Trang quyền truy cập
    // public function access()
    // {
    //     $title = "Admin - Quyền truy cập";
    //     $page = "bo-Access";
    //     include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
    //     include __DIR__ . '/../Views/backoffice/pages/bo-Access.php';
    //     include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    // }

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

        $orderModel = new Orders();

        $orders = $orderModel->getAllOrder();

        $usersCount = count($orders);

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

    // ============ CATEGORY ============ //
    public function createCategory()
    {
        $title = "Admin - Tạo danh mục";
        $page = "bo-CreateCategory";


        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-CreateCategory.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }
    // ============ CATEGORY ============ //
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
    // ===== PRODUCT ===== //
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
            $status = $product['status'];
        } else {
            die('Không có ID sản phẩm');
        }

        $fullPath = $product['image_url'];

        $relativePath = str_replace('/MegaFood_DA1_N11/BackEnd/public/img/frontend/layouts/', '', $fullPath);

        $products = $productModel->getAllProducts();

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-EditProduct.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    public function updateProduct()
    {

        // echo "đã và hàm";
        $productModel = new Product();

        $productId = intval($_GET['id']);

        $name = trim($_POST['name']);
        $img = trim($_POST['img']);
        $price = str_replace('.', '', trim($_POST['price']));
        $description = trim($_POST['mota']);
        $status = trim($_POST['status']);
        $categoryId = intval($_POST['category_id']);

        $isFeatured = isset($_POST['is_featured']) ? true : false;
        $sale = isset($_POST['sale']) ? true : false;

        if (empty($name) || empty($img) || empty($price) || empty($description) || empty($status) || $categoryId <= 0) {
            die('Vui lòng nhập đầy đủ thông tin và kiểm tra lại.');
        }


        // Gọi phương thức cập nhật
        $result = $productModel->updateProduct($productId, [
            'name' => $name,
            'image_url' => $img,
            'price' => $price,
            'description' => $description,
            'status' => $status,
            'id_categories' => $categoryId,
            'is_featured' => $isFeatured,
            'sale' => $sale
        ]);

        // Debugging: In ra giá trị để kiểm tra
        // echo "<pre>";
        // print_r([
        //     'name' => $name,
        //     'image_url' => $img,
        //     'price' => $price,
        //     'description' => $description,
        //     'status' => $status,
        //     'id_categories' => $categoryId,
        //     'is_featured' => $isFeatured,
        //     'sale' => $sale
        // ]);
        // echo "</pre>";
        // exit;

        if ($result) {
            header('Location: ' . BASE_URL . '?route=admin&action=bo-Product');
            exit;
        } else {
            echo "Cập nhật sản phẩm thất bại! Vui lòng thử lại.";
        }
    }




    // ===== CUSTOMER ===== //
    public function editCustomer()
    {
        $title = "Admin - Chỉnh sửa khách hàng";
        $page = "bo-EditCustomer";

        $userModel = new Users();

        if (isset($_GET['id'])) {
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            if (!$id) {
                die('ID không hợp lệ');
            }

            $user = $userModel->getUserById($id);

            if (!$user) {
                die('Không tìm thấy khách hàng với ID này.');
            }
        } else {
            die('Không có ID khách hàng');
        }

        include __DIR__ . '/../Views/backoffice/layouts/dashboard-bo.php';
        include __DIR__ . '/../Views/backoffice/pages/bo-EditCustomer.php';
        include __DIR__ . '/../Views/backoffice/layouts/footer.php';
    }

    public function updateCustomer()
    {
        // echo "đã vào trang update";
        $userModel = new Users();

        $userId = intval($_GET['id']);

        $firstName = trim($_POST['first_name'] ?? '');
        $lastName = trim($_POST['last_name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $status = trim($_POST['status'] ?? '');

        if (empty($firstName) || empty($lastName) || empty($email) || empty($phone)) {
            die('Vui lòng điền đầy đủ thông tin bắt buộc.');
        }

        $result = $userModel->updateCustomer($userId, [
            'first_name' => $firstName,
            'last_name'  => $lastName,
            'email'      => $email,
            'phone'      => $phone,
            'status'     => $status
        ]);

        // Debugging: In ra giá trị để kiểm tra
        // echo "<pre>";
        // print_r([
        //     'first_name' => $firstName,
        //     'last_name'  => $lastName,
        //     'email'      => $email,
        //     'phone'      => $phone,
        //     'status'     => $status
        // ]);
        // echo "</pre>";
        // exit;

        if ($result) {
            header('Location: ' . BASE_URL . '?route=admin&action=bo-Customer');
            exit;
        } else {
            echo "Cập nhật khách hàng thất bại! Vui lòng thử lại.";
        }
    }

}
