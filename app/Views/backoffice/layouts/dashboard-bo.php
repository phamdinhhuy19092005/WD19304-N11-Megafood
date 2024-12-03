<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo CSS_LAYOUTS_BO_URL; ?>dashboard.css">
    <link rel="stylesheet" href="<?php echo CSS_LAYOUTS_URL; ?>font-quicksand.css">
    <link rel="stylesheet" href="<?php echo CSS_LAYOUTS_URL; ?>font-Lobster.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>

<body>
    <div id="wrapper">
        <div class="sidenav_header">
            <aside class="sidenav">
                <div class="side_header">

                    <div class="brand">
                        <div class="brand_logo">
                            <a href="#">
                                <img src="../../header/img/logo.png" alt="Logo">
                            </a>
                        </div>
                        <div class="brand_tools">
                            <button class="btn__tool">
                                <span class="btn__tool-bar"></span>
                            </button>
                        </div>
                    </div>

                    <div class="menu_wrapper">
                        <div class="menu_nav">
                            <div class="taskbar">
                                <ul class="list_taskbar">
                                    <div class="group_taskbar">
                                        <!--Tổng quan-->
                                        <li class="taskbar-button active" onclick="toggleDropdown('overviewDropdown')">
                                            <div class="icon_taskbar">
                                                <i class="bi bi-bar-chart-fill"></i>
                                            </div>
                                            <span>Tổng quan</span>
                                        </li>
                                    </div>

                                    <!-- Khách hàng -->
                                    <div class="group_taskbar">
                                        <li class="taskbar-button" onclick="toggleDropdown('customerDropdown')">
                                            <div class="icon_taskbar">
                                                <i class="fa-solid fa-users"></i>
                                            </div>
                                            <span>Khách hàng</span>
                                        </li>
                                        <ul class="dropdown-menu" id="customerDropdown">
                                            <li class="item_dropdow_menu">
                                                <i class="fa-solid fa-circle"></i>
                                                <a href="#">Danh sách khách hàng</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Kho sản phẩm -->
                                    <div class="group_taskbar">
                                        <li class="taskbar-button" onclick="toggleDropdown('productDropdown')">
                                            <div class="icon_taskbar">
                                                <i class="fa-solid fa-warehouse"></i>
                                            </div>
                                            <span>Kho sản phẩm</span>
                                        </li>
                                        <ul class="dropdown-menu" id="productDropdown">
                                            <li class="item_dropdow_menu">
                                                <i class="fa-solid fa-circle"></i>
                                                <a href="#">Danh mục</a>
                                            </li>
                                            <li class="item_dropdow_menu">
                                                <i class="fa-solid fa-circle"></i>
                                                <a href="#">Sản phẩm</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Đơn hàng -->
                                    <div class="group_taskbar">
                                        <li class="taskbar-button" onclick="toggleDropdown('orderDropdown')">
                                            <div class="icon_taskbar">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                            <span>Đơn hàng</span>
                                        </li>
                                        <ul class="dropdown-menu" id="orderDropdown">
                                            <li class="item_dropdow_menu">
                                                <i class="fa-solid fa-circle"></i>
                                                <a href="../html/orders.html">Danh sách đơn hàng</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="group_taskbar">
                                        <li class="taskbar-button" onclick="toggleDropdown('adminstratorDropdown')">
                                            <div class="icon_taskbar">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                            <span>Quản trị</span>
                                        </li>
                                        <ul class="dropdown-menu" id="adminstratorDropdown">
                                            <li class="item_dropdow_menu"> 
                                                <i class="fa-solid fa-circle"></i>
                                                <a href="../html/orders.html">Quản trị viên</a>
                                            </li>
                                            <li class="item_dropdow_menu"> 
                                                <i class="fa-solid fa-circle"></i>
                                                <a href="../html/orders.html">Quyền truy cập</a>
                                            </li>
                                        </ul>
                                    </div>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <header>
                <div class="header_admin">
                    <div class="header_left">
                        <div class="btn_shop">
                            <a href="#">Cửa hàng</a>
                        </div>
                    </div>
                    <div class="header_rigth">
                        <div class="info_users">
                            <span>Xin chào,</span>
                            <span class="name_users">Huypham</span>
                            <div class="logo_ninja">
                                <img src="	https://uudam.vn/backoffice/assets/img/users/ninja.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>

    <script src="../js/taskbar.js"></script>
</body>

</html>