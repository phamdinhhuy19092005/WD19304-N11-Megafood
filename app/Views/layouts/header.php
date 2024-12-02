<? include __DIR__ . '/../Models/Product.php'; ?>
<?php
$productModel = new Product();
$products = $productModel->getAllProducts();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Default Title' ?></title>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo CSS_LAYOUTS_URL; ?>header.css">
    <link rel="stylesheet" href="<?php echo CSS_LAYOUTS_URL; ?>footer.css">
    <link rel="stylesheet" href="<?php echo CSS_LAYOUTS_URL; ?>font-quicksand.css">
    <link rel="stylesheet" href="<?php echo CSS_LAYOUTS_URL; ?>font-Lobster.css">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">

    <!-- Page-specific CSS -->
    <?php
    $styles = [
        'home' => ['home.css'],
        'products' => ['products.css', 'product-details.css',],
        'product-details' => ['product-details.css'],
        'cart' => ['cart.css'],
        'account' => ['account.css', 'product-details.css'],
        'orders' => ['account.css', 'product-details.css'],
        'changepassword' => ['account.css', 'product-details.css'],
        'addressbook' => ['account.css', 'product-details.css'],
        'addaddress' => ['account.css', 'product-details.css'],
        'contact' => ['contact.css', 'product-details.css'],
        'news' => ['news.css', 'product-details.css'],
        'about' => ['about.css', 'product-details.css'],
        'detailCategories' => ['detailCategories.css', 'product-details.css', 'home.css'],
        'faq' => ['faq.css', 'product-details.css'],
        'booking' => ['booking.css', 'product-details.css'],
        'login' => ['auth.css', 'product-details.css'],
        'register' => ['auth.css', 'product-details.css'],
        'storeSystem' => ['storeSystem.css', 'product-details.css'],
        'payment' => ['payment.css', 'product-details.css'],
        'favorites' => ['favorites.css', 'product-details.css'],

    ];

    if (isset($styles[$page])) {
        foreach ($styles[$page] as $style) {
            echo '<link rel="stylesheet" href="' . CSS_PAGES_URL . htmlspecialchars($style, ENT_QUOTES, 'UTF-8') . '?v=' . time() . '">' . PHP_EOL;
        }
    }

    ?>

</head>

<body>

    <header>
        <div class="top_header">
            <p>Chào mừng đến với MegaFood</p>
        </div>
        <div class="bottom_header">
            <div class="container_bt_header">
                <div class="container_content">
                    <div class="tab_menu">
                        <button>
                            <div class="item_tab">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </button>

                        <ul class="list_item_menu_tab">
                            <li class="logo_tab_menu">
                                <a href="">
                                    <img src="<?php echo IMG_BASE_URL; ?>header/logo-mobile.png" alt="">
                                </a>
                            </li>
                            <li class="main_item">
                                <span>MENU CHÍNH</span>
                            </li>
                            <li class="item_tab"><a href="<?php echo BASE_URL; ?>index.php?route=home">Trang chủ</a></li>
                            <li class="item_tab"><a href="<?php echo BASE_URL; ?>index.php?route=about">Giới thiệu</a></li>
                            <li class="item_tab tab_sp"><a href="<?php echo BASE_URL; ?>index.php?route=products">Sản phẩm</a><i class="fa-solid fa-plus"></i></li>
                            <li class="item_tab"><a href="<?php echo BASE_URL; ?>index.php?route=news">Tin tức</a></li>
                            <li class="item_tab"><a href="<?php echo BASE_URL; ?>index.php?route=contact">Liên hệ</a></li>
                            <li class="item_tab"><a href="<?php echo BASE_URL; ?>index.php?route=faq">Câu hỏi thường gặp</a></li>
                            <li class="item_tab"><a href="<?php echo BASE_URL; ?>index.php?route=storeSystem">Hệ thống cửa hàng</a></li>
                            <li class="item_tab"><a href="<?php echo BASE_URL; ?>index.php?route=booking">Đặt bàn</a></li>
                        </ul>
                    </div>
                    <div class="logo">
                        <a href="<?php echo BASE_URL; ?>index.php?route=home">
                            <img src="<?php echo IMG_BASE_URL; ?>header/logo.png" alt="">
                        </a>
                    </div>
                    <div class="search_container">
                        <input type="text" placeholder="Bạn muốn tìm kiếm gì?" name="" id="searchInput">
                        <ul id="searchResults">
                            <div class="search_title">
                                <span>Sản phẩm</span>
                            </div>
                            <?php
                            if (is_array($products) && !empty($products)) {
                                foreach ($products as $product): ?>

                                    <li class="search_list">
                                        <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $product['id']; ?>">
                                            <img src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" />
                                        </a>
                                        <div class="search_info">
                                            <a href="/product_details/detail.html">
                                                <span><?= htmlspecialchars($product['name']); ?></span>
                                            </a>
                                            <br>
                                            <p><?= number_format($product['price'], 0, ',', '.'); ?></p>
                                        </div>
                                    </li>

                                <?php endforeach; ?>
                            <?php } else {
                                echo 'Không có sản phẩm nào.';
                            }
                            ?>
                            <div class="search_seeMore">
                                <a href="<?php echo BASE_URL; ?>index.php?route=products">Xem thêm sản phẩm</a>
                            </div>
                        </ul>
                        <button>
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                    <div class="contact">
                        <img src="<?php echo IMG_BASE_URL; ?>header/ship.png" alt="">
                        <div class="contact_content">
                            <span class="title">Giao hàng tận nơi</span>
                            <span class="phone">1900 6750</span>
                        </div>
                    </div>
                    <div class="user">
                        <a href="<?php echo BASE_URL; ?>index.php?route=account"><i class="bi bi-person-circle"></i></a>
                        <div class="subnav_user">
                            <span class="icon_up">
                                <i class="bi bi-caret-up-fill"></i>
                            </span>


                            <?php
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }
                            ?>
                            <ul class="list_user">
                                <?php
                                if (isset($_SESSION['email'])) {
                                    echo "<li><a href='" . BASE_URL . "index.php?route=account'><i class='bi bi-person'></i><span>Welcome, " . $_SESSION['first_name'] . " " . $_SESSION['last_name'] . "</span></a></li>";
                                    echo "<li><a href='" . BASE_URL . "index.php?route=logout'><i class='bi bi-box-arrow-right'></i><span>Đăng xuất</span></a></li>";
                                } else {
                                    echo "<li><a href='" . BASE_URL . "index.php?route=login'><i class='bi bi-box-arrow-in-right'></i><span>Đăng nhập</span></a></li>";
                                    echo "<li><a href='" . BASE_URL . "index.php?route=register'><i class='bi bi-person-plus'></i><span>Đăng kí</span></a></li>";
                                }
                                ?>
                                <li>
                                    <a href="<?php echo BASE_URL; ?>index.php?route=favorites">
                                        <i class="bi bi-heart"></i>
                                        <span>Danh sách yêu thích</span>
                                    </a>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="cart">
                        <span class="quantity">
                            <?php
                            $totalQuantity = 0;
                            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $product) {
                                    $totalQuantity += $product['quantity']; // Cộng dồn số lượng
                                }
                            }
                            echo $totalQuantity;
                            ?>
                        </span>
                        <a href="<?php echo BASE_URL; ?>index.php?route=cart"><i class="bi bi-basket2"></i></a>
                    </div>
                    <a href="<?php echo BASE_URL; ?>index.php?route=booking"><button class="btn_1">Đặt món online</button></a>
                    <a href="<?php echo BASE_URL; ?>index.php?route=booking"><button  class="btn_2">Đặt bàn</button></a>
                </div>
            </div>
        </div>
        <nav>
            <div class="container_nav">
                <div class="menu_nav">
                    <ul class="list_nav">
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=home">Trang chủ</a></li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=about">Giới thiệu</a></li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=products">Sản phẩm <i
                                    class="bi bi-caret-down-fill"></i></a>
                            <ul class="list_subnav">
                                <li><a href="<?php echo BASE_URL; ?>index.php?route=detailCategories&category_id=1">Pizza</a></li>
                                <li><a href="<?php echo BASE_URL; ?>index.php?route=detailCategories&category_id=2">Khai vị</a></li>
                                <li><a href="<?php echo BASE_URL; ?>index.php?route=detailCategories&category_id=3">Mỳ ý</a></li>
                                <li><a href="<?php echo BASE_URL; ?>index.php?route=detailCategories&category_id=4">Salad</a></li>
                                <li><a href="<?php echo BASE_URL; ?>index.php?route=detailCategories&category_id=5">Thức uống</a></li>
                            </ul>
                        </li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=news">Tin tức</a></li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=contact">Liên hệ</a></li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=faq">Câu hỏi thường gặp</a></li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=storeSystem">Hệ thống cửa hàng</a></li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=booking">Đặt bàn</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="scrollToTop" class="scroll-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </div>