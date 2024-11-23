<?php

define('BASE_URL', '/MegaFood_DA1_N11/BackEnd/');
define('BASE_URL_PUBLIC', '/MegaFood_DA1_N11/BackEnd/public/');

define('CSS_LAYOUTS_URL', BASE_URL_PUBLIC . 'css/frontend/layouts/');
define('CSS_PAGES_URL', BASE_URL_PUBLIC . 'css/frontend/pages/');
define('IMG_BASE_URL', BASE_URL_PUBLIC . 'img/frontend/layouts/');
define('JS_BASE_URL', BASE_URL_PUBLIC . 'js/frontend/layouts/components/');
define('JS_PAGES_URL', BASE_URL_PUBLIC . 'js/frontend/pages');

require_once 'app/Controllers/HomeController.php';
require_once 'app/Controllers/CartController.php';
require_once 'app/Controllers/DetailController.php';
require_once 'app/Controllers/AccountController.php';
require_once 'app/Controllers/ContactController.php';
require_once 'app/Controllers/NewsController.php';
require_once 'app/Controllers/FaqController.php';
<<<<<<< HEAD
require_once 'app/Controllers/BookingController.php';

=======
require_once 'app/Controllers/LoginController.php';
require_once 'app/Controllers/RegisterController.php';
>>>>>>> d2f85b7d15355a57979094ae5a1ca7c690caee29

$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'cart':
        $controller = new CartController();
        $controller->index();
        break;
    case 'products':
        $controller = new DetailController();
        $controller->details();
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
    case 'faq':
        $controller = new FaqController();
        $controller->faq();
        break;
<<<<<<< HEAD
    case 'booking':
        $controller = new BookingController();
        $controller->booking();
=======
    case 'login':
        $controller = new LoginController();
        $controller->login();
        break;
    case 'register':
        $controller = new RegisterController();
        $controller->register();
>>>>>>> d2f85b7d15355a57979094ae5a1ca7c690caee29
        break;
    default:
        echo "404 - Page Not Found";
        break;
}
