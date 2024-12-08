<div class="bodywrap">
    <section class="bread_crumb">
        <div class="container_bread_crumb">
            <ul class="List_bread_crumb">
                <li class="home">
                    <a href="<?php echo BASE_URL; ?>index.php?route=home">
                        <span>Trang chủ</span>
                    </a>
                    <span class="mr_lr">
                        <i class="bi bi-chevron-right"></i>
                    </span>
                </li>
                <li class="changeurl">
                    <a href="<?php echo BASE_URL; ?>index.php?route=account">
                        <span>Tài khoản</span>
                    </a>
                    <span class="mr_lr">
                        <i class="bi bi-chevron-right"></i>
                    </span>
                </li>
                <li>
                    <span class="name_prd">Đơn hàng</span>
                </li>

            </ul>
        </div>
    </section>
    <section class="page_customer_account">
        <div class="container_acc">
            <div class="block_background">
                <div class="row">
                    <div class="block_account">
                        <h2 class="title_account">TRANG TÀI KHOẢN</h2>
                        <?php
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }
                        ?>

                        <p>Xin chào, <span><?php echo isset($_SESSION['first_name']) && isset($_SESSION['last_name']) ? $_SESSION['first_name'] . " " . $_SESSION['last_name'] : ''; ?></span>!</p>

                        <!-- Danh sách danh mục -->

                        <ul>
                            <li>
                                <a href="<?php echo BASE_URL; ?>index.php?route=account&action=account" class="title_info">
                                    Thông tin tài khoản
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL; ?>index.php?route=account&action=orders" class="title_info active">
                                    Đơn hàng của bạn
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL; ?>index.php?route=account&action=changepassword" class="title_info">
                                    Đổi mật khẩu
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL; ?>index.php?route=account&action=addaddress" class="title_info">
                                    Sổ địa chỉ (1)
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col_right_ac">
                        <h2 class="title_head">
                            ĐƠN HÀNG CỦA BẠN
                        </h2>
                        <div class="my_account">
                            <div class="dashboard">
                                <div class="recent_orders">
                                    <table class="table_order">
                                        <thead class="thead_default">
                                            <tr>
                                                <th>Đơn hàng</th>
                                                <th>Ngày</th>
                                                <th>Tên người nhận</th>
                                                <th>Địa chỉ</th>
                                                <th>SL đơn hàng</th>
                                                <th>TT thanh toán</th>
                                                <th>TT vận chuyển</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php foreach ($orders as $order): ?>
                                                <tr>
                                                    <td>
                                                        <p>HK-00<?php echo $order['id'] ?></p>
                                                    </td>

                                                    <td>
                                                        <p><?php echo $order['created_at'] ?></p>
                                                    </td>

                                                    <td>
                                                        <p><?php echo $order['customer_name'] ?></p>
                                                    </td>

                                                    <td>
                                                        <p><?php echo $order['shipping_address'] ?></p>
                                                    </td>

                                                    <td>
                                                        <p><?php echo $order['total_product'] ?></p>
                                                    </td>

                                                    <td style="color: #E31837;">
                                                        <strong>
                                                            <p><?php echo number_format($order['total_price'], 0, ',', '.'); ?> VND</p>
                                                        </strong>
                                                    </td>

                                                    <td>
                                                        <p style="text-align: center; padding: 2px; font-size: 12px; background: orange; color: white; border-radius: 10px;"><?php echo $order['status'] ?></p>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>