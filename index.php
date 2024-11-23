<!-- /index.php -->
<?php

define('BASE_URL', '/MegaFood_DA1_N11/BackEnd/');
define('BASE_URL_PUBLIC', '/MegaFood_DA1_N11/BackEnd/public/');

define('CSS_LAYOUTS_URL', BASE_URL_PUBLIC . 'css/frontend/layouts/');
define('CSS_PAGES_URL', BASE_URL_PUBLIC . 'css/frontend/pages/');
define('IMG_BASE_URL', BASE_URL_PUBLIC . 'img/frontend/layouts/');
define('JS_BASE_URL', BASE_URL_PUBLIC . 'js/frontend/layouts/components/');

require_once 'app/Controllers/HomeController.php';
require_once 'app/Controllers/CartController.php';


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
    default:
        echo "404 - Page Not Found";
        break;
}
