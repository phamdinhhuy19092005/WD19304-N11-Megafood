<!-- /index.php -->
<?php
define('CSS_LAYOUTS_URL', '/MegaFood_DA1_N11/BackEnd/public/css/frontend/layouts');
define('CSS_PAGES_URL', '/MegaFood_DA1_N11/BackEnd/public/css/frontend/pages');
define('IMG_BASE_URL', '/MegaFood_DA1_N11/BackEnd/public/img/frontend/layouts');
define('JS_BASE_URL', '/MegaFood_DA1_N11/BackEnd/public/js/frontend/layouts/components');
require_once 'app/Controllers/HomeController.php';


$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    default:
        echo "404 - Page Not Found";
        break;
}
