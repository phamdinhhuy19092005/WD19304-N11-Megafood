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
        'products' => ['products.css'],
        'product-details' => ['product-details.css'],
        'cart' => ['cart.css'],
        'account' => ['account.css', 'product-details.css'],
        'orders' => ['account.css', 'product-details.css'],
        'changepassword' => ['account.css', 'product-details.css'],
        'addressbook' => ['account.css', 'product-details.css'],
        'addaddress' => ['account.css', 'product-details.css'],
        'contact' => ['contact.css', 'product-details.css'],
        'news' => ['news.css', 'product-details.css'],
        'faq' => ['faq.css', 'product-details.css'],
        'booking' => ['booking.css', 'product-details.css'],
        'login' => ['login.css', 'product-details.css'],
        'register' => ['login.css', 'product-details.css']
    ];

    if (isset($styles[$page])) {
        foreach ($styles[$page] as $style) {
            echo '<link rel="stylesheet" href="' . CSS_PAGES_URL . $style . '">' . PHP_EOL;
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
                                <a href="<?php echo BASE_URL; ?>index.php?route=home">
                                    <img src="<?php echo IMG_BASE_URL; ?>/header/logo.png" alt="">
                                </a>
                            </li>
                            <li class="main_item">
                                <span>MENU CHÍNH</span>
                            </li>
                            <li class="item_tab">
                                <a href="">Trang chủ</a>
                            </li>
                            <li class="item_tab">
                                <a href="">Giới thiệu</a>
                            </li>
                            <li class="item_tab tab_sp">
                                <a href="<?php echo BASE_URL; ?>index.php?route=home">Sản phẩm</a>
                                <i class="fa-solid fa-plus"></i>
                            </li>
                            <li class="item_tab">
                                <a href="">Tin tức</a>
                            </li>
                            <li class="item_tab">
                                <a href="">Liên hệ</a>
                            </li>
                            <li class="item_tab">
                                <a href="">Câu hỏi thường gặp</a>
                            </li>
                            <li class="item_tab">
                                <a href="">Hệ thống cửa hàng</a>
                            </li>
                            <li class="item_tab">
                                <a href="">Đặt bàn</a>
                            </li>
                        </ul>
                    </div>
                    <div class="overlay"></div>
                    <div class="logo">
                        <a href="<?php echo BASE_URL; ?>index.php?route=home">
                            <img src="<?php echo IMG_BASE_URL; ?>/header/logo.png" alt="">
                        </a>
                    </div>
                    <div class="search_container">
                        <input type="text" placeholder="Bạn muốn tìm kiếm gì?" name="" id="searchInput">
                        <ul id="searchResults">
                            <div class="search_title">
                                <span>Sản phẩm</span>
                            </div>
                            <li class="search_list">
                                <a href="/product_details/detail.html"><img
                                        src="//bizweb.dktcdn.net/thumb/compact/100/510/571/products/0003870-bbq-chicken-platter-2pcs.png?v=1708679416963"
                                        alt=""></a>
                                <div class="search_info">

                                    <a href="/product_details/detail.html/product_details/detail.html"><span>Pizza Chất
                                            Thanh Cua và Xúc Xích Cocktail</span></a><br>
                                    <p>99.000đ</p>
                                </div>
                            </li>
                            <li class="search_list">
                                <a href="/product_details/detail.html"><img
                                        src="//bizweb.dktcdn.net/thumb/compact/100/510/571/products/0003260-hambacon-500.png?v=1708679412507"
                                        alt=""></a>
                                <div class="search_info">
                                    <a href="/product_details/detail.html"><span>Pizza Chất Giăm Bông & Thịt Xông
                                            Khói</span></a><br>
                                    <p>89.000đ</p>
                                </div>
                            </li>
                            <li class="search_list">
                                <a href="/product_details/detail.html"><img
                                        src="//bizweb.dktcdn.net/thumb/compact/100/510/571/products/0003258-chicken-delight-500.png?v=1708679415137"
                                        alt=""></a>
                                <div class="search_info">

                                    <a href="/product_details/detail.html"><span>Pizza Chất Gà Nướng Dứa</span></a><br>
                                    <p>89.000đ</p>
                                </div>
                            </li>
                            <li class="search_list">
                                <a href="/product_details/detail.html"><img
                                        src="//bizweb.dktcdn.net/thumb/compact/100/510/571/products/0002257-spaghetti-shrimp-rose-50.png?v=1708679386557" alt=""></a>
                                <div class="search_info">

                                    <a href="/product_details/detail.html"><span>Mỳ Ý Tôm Sốt Kem Cà Chua</span></a><br>
                                    <p>139.000đ</p>
                                </div>
                            </li>
                            <li class="search_list">
                                <a href="/product_details/detail.html"><img
                                        src="//bizweb.dktcdn.net/thumb/compact/100/510/571/products/0002254-spicy-sausage-spaghetti.png?v=1708679389827"
                                        alt=""></a>
                                <div class="search_info">

                                    <a href="/product_details/detail.html"><span>Mỳ Ý Cay Xúc Xích</span></a><br>
                                    <p>119.000đ</p>
                                </div>
                            </li>
                            <li class="search_list">
                                <a href="/product_details/detail.html"><img
                                        src="//bizweb.dktcdn.net/thumb/compact/100/510/571/products/0002255-spaghetti-ham-mushroom-5.png?v=1708679391590"
                                        alt=""></a>
                                <div class="search_info">

                                    <a href="/product_details/detail.html"><span>Mỳ Ý Giăm Bông Và Nấm Sốt
                                            Kem</span></a><br>
                                    <p>119.000đ</p>
                                </div>
                            </li>
                            <li class="search_list">
                                <a href="/product_details/detail.html"><img
                                        src="//bizweb.dktcdn.net/thumb/compact/100/510/571/products/0003870-bbq-chicken-platter-2pcs.png?v=1708679416963"
                                        alt=""></a>
                                <div class="search_info">

                                    <a href="/product_details/detail.html"><span>Gà Nướng BBQ (2 miếng)</span></a><br>
                                    <p>99.000đ</p>
                                </div>
                            </li>
                            <li class="search_list">
                                <a href="/product_details/detail.html"><img
                                        src="//bizweb.dktcdn.net/thumb/compact/100/510/571/products/0003950-crispy-chicken-with-k-sa.png?v=1708679418013"
                                        alt=""></a>
                                <div class="search_info">

                                    <a href="/product_details/detail.html"><span>Gà Giòn Xốt Hàn - Truyền Thống (5
                                            miếng)</span></a><br>
                                    <p>249.000đ</p>
                                </div>
                            </li>
                            <div class="search_seeMore">

                                <a href="<?php echo BASE_URL; ?>index.php?route=products">Xem thêm sản phẩm</a>
                            </div>
                        </ul>
                        <button>
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                    <div class="contact">
                        <img src="<?php echo IMG_BASE_URL; ?>/header/ship.png" alt="">
                        <div class="contact_content">
                            <span class="title">Giao hàng tận nơi</span>
                            <span class="phone">1900 6750</span>
                        </div>
                    </div>
                    <div class="user">
                        <a href="<?php echo BASE_URL; ?>index.php?route=account">
                            <i class="bi bi-person-circle"></i>
                        </a>
                        <div class="subnav_user">
                            <span class="icon_up">
                                <i class="bi bi-caret-up-fill"></i>
                            </span>
                            <ul class="list_user">
                                <li>
                                    <a href="<?php echo BASE_URL; ?>index.php?route=login">
                                        <i class="bi bi-box-arrow-in-right"></i>
                                        <span>Đăng nhập</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL; ?>index.php?route=register">
                                        <i class="bi bi-person-plus"></i>
                                        <span>Đăng kí</span>
                                    </a>
                                </li>
                                <li><a href="#"><i class="bi bi-heart"></i><span>Danh sách yêu thích</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="cart">
                        <span class="quantity">
                            0
                        </span>
                        <a href="<?php echo BASE_URL; ?>index.php?route=cart"><i class="bi bi-basket2"></i></a>
                    </div>
                    <button class="btn_1">Đặt món online</button>
                    <button class="btn_2">Đặt bàn</button>
                </div>
            </div>
        </div>
        <nav>
            <div class="container_nav">
                <div class="menu_nav">
                    <ul class="list_nav">
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=home">Trang chủ</a></li>
                        <li class="nav_item"><a href="../about/index.html">Giới thiệu</a></li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=products">Sản phẩm <i class="bi bi-caret-down-fill"></i></a>
                            <ul class="list_subnav">
                                <li><a href="../detailCategories/category.html">Pizza</a></li>
                                <li><a href="../detailCategories/category.html">Khai vị</a></li>
                                <li><a href="../detailCategories/category.html">Mỳ ý</a></li>
                                <li><a href="../detailCategories/category.html">Salad</a></li>
                                <li><a href="../detailCategories/category.html">Thức uống</a></li>
                            </ul>
                        </li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=news">Tin tức</a></li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=contact">Liên hệ</a></li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=faq">Câu hỏi thường gặp</a></li>
                        <li class="nav_item"><a href="../storeSystem/main.html">Hệ thống cửa hàng</a></li>
                        <li class="nav_item"><a href="<?php echo BASE_URL; ?>index.php?route=booking">Đặt bàn</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="scrollToTop" class="scroll-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </div>