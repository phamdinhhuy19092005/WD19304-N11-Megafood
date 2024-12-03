<?php
session_start();
// Thư viện phpmailer
require_once './config/phpmailer/Exception.php';
require_once './config/phpmailer/PHPMailer.php';
require_once './config/phpmailer/SMTP.php';

require_once './config/function.php';
require_once './config/database.php';

// Kết nối Database
$connectModel = new Database();
$conn = $connectModel->connect();

// sendMail('tanh7164@gmail.com', 'Mega Food', 'test mail');

// if ($conn) {
//     echo 'Kết nối thành công';
// } else {
//     echo 'Kết nối thất bại';
// }

// Định nghĩa đường dẫn
define('BASE_URL', '/MegaFood_DA1_N11/BackEnd/');
define('BASE_URL_PUBLIC', '/MegaFood_DA1_N11/BackEnd/public/');

// FE

define('CSS_LAYOUTS_URL', BASE_URL_PUBLIC . 'css/frontend/layouts/');
define('CSS_PAGES_URL', BASE_URL_PUBLIC . 'css/frontend/pages/');
define('IMG_BASE_URL', BASE_URL_PUBLIC . 'img/frontend/layouts/');
define('JS_BASE_URL', BASE_URL_PUBLIC . 'js/frontend/layouts/components/');
define('JS_PAGES_URL', BASE_URL_PUBLIC . 'js/frontend/pages/');


// BO
define('CSS_LAYOUTS_BO_URL', BASE_URL_PUBLIC . 'css/backoffice/layouts/');
define('CSS_PAHES_BO_URL', BASE_URL_PUBLIC . 'css/backoffice/pages/');


// Load các controller
// FE
require_once 'app/Controllers/HomeController.php';
require_once 'app/Controllers/CartController.php';
require_once 'app/Controllers/ProductController.php';
require_once 'app/Controllers/AccountController.php';
require_once 'app/Controllers/ContactController.php';
require_once 'app/Controllers/NewsController.php';
require_once 'app/Controllers/AboutController.php';
require_once 'app/Controllers/DetailCategoriesController.php';
require_once 'app/Controllers/FaqController.php';
require_once 'app/Controllers/BookingController.php';
require_once 'app/Controllers/LoginController.php';
require_once 'app/Controllers/RegisterController.php';
require_once 'app/Controllers/StoreSystemController.php';
require_once 'app/Controllers/PaymentController.php';
require_once 'app/Controllers/LogoutController.php';
require_once 'app/Controllers/FavoritesListController.php';

// BO
require_once 'app/Controllers/Bo-LoginController.php';
require_once 'app/Controllers/AdminController.php';

// Xử lý route
$route = $_GET['route'] ?? 'home';
switch ($route) {
    case 'admin':
        $controller = new AdminController();
        $action = $_GET['action'] ?? 'login';

        switch ($action) {
            case 'login':
                $controller->login();
                break;
            case 'dashboard':
                $controller->dashboard();
                break;
            case 'manage-users':
                $controller->manageUsers();
                break;
            case 'manage-orders':
                $controller->manageOrders();
                break;
            case 'settings':
                $controller->settings();
                break;
            default:
                echo "404 - Admin Page Not Found";
                break;
        }
        break;

    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'cart':
        $action = $_GET['action'] ?? 'view';
        $controller = new CartController();

        switch ($action) {
            case 'add':
                $controller->add();
                break;
            case 'remove':
                $controller->remove();
                break;
            case 'updateQuantity':
                $controller->updateQuantity();
                break;
            case 'payment':
                $controller->payment();
                break;
            case 'view':
            default:
                $controller->cart();
                break;
        }
        break;
    case 'products':
        $controller = new ProductController();
        $controller->products();
        break;
    case 'product-detail':
        $controller = new ProductController();
        $controller->productDetail();
        break;
    case 'account':
        $controller = new AccountController();
        $controller->accounts();
        break;
    case 'contact':
        $controller = new ContactController();
        $controller->contact();
        break;
    case 'news':
        $controller = new NewsController();
        $controller->news();
        break;
    case 'about':
        $controller = new AboutController();
        $controller->about();
        break;
    case 'detailCategories':
        $controller = new DetailCategoriesController();
        $controller->detailCategories();
        break;
    case 'faq':
        $controller = new FaqController();
        $controller->faq();
        break;
    case 'booking':
        $controller = new BookingController();
        $controller->booking();
        break;
    case 'login':
        $controller = new LoginController();
        $controller->login();
        break;
    case 'register':
        $controller = new RegisterController();
        $controller->register();
        break;
    case 'storeSystem':
        $controller = new StoreSystemController();
        $controller->storeSystem();
        break;
    case 'payment':
        $controller = new PaymentController();
        $controller->payment();
        break;
    case 'logout':
        $controller = new LogoutController();
        $controller->logout();
        break;
    case 'favorites':
        $controller = new FavoritesListController();
        $controller->favoritesList();
        break;
    case 'bo-Login':
        $controller = new BoLoginController();
        $controller->boLogin();
        break;

    default:
        echo "404 - Page Not Found";
        break;
}
