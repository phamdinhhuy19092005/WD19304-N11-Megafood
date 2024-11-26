<?php

// require_once './config/database.php';

// $connectModel = new Database();
// $conn = $connectModel->connect();

// if ($conn) {
//     echo 'Kết nối thành công';
// } else {
//     echo 'Kết nối thất bại';
// }

define('BASE_URL', '/MegaFood_DA1_N11/BackEnd/');
define('BASE_URL_PUBLIC', '/MegaFood_DA1_N11/BackEnd/public/');

define('CSS_LAYOUTS_URL', BASE_URL_PUBLIC . 'css/frontend/layouts/');
define('CSS_PAGES_URL', BASE_URL_PUBLIC . 'css/frontend/pages/');
define('IMG_BASE_URL', BASE_URL_PUBLIC . 'img/frontend/layouts/');
define('JS_BASE_URL', BASE_URL_PUBLIC . 'js/frontend/layouts/components/');
define('JS_PAGES_URL', BASE_URL_PUBLIC . 'js/frontend/pages/');

require_once 'app/Controllers/HomeController.php';
require_once 'app/Controllers/CartController.php';
require_once 'app/Controllers/ProductController.php';
require_once 'app/Controllers/AccountController.php';
require_once 'app/Controllers/ContactController.php';
require_once 'app/Controllers/NewsController.php';
require_once 'app/Controllers/AboutController.php';
require_once 'app/Controllers/FaqController.php';
require_once 'app/Controllers/BookingController.php';
require_once 'app/Controllers/LoginController.php';
require_once 'app/Controllers/RegisterController.php';
require_once 'app/Controllers/StoreSystemController.php';
require_once 'app/Controllers/PaymentController.php';



$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'cart':
        $controller = new CartController();
        $controller->cart();
        break;
    case 'products':
        $controller = new ProductController();
        $controller->products();
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
    default:
        echo "404 - Page Not Found";
        break;
}
