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
                        <p>Xin chào, <span>Phạm Huy</span> !</p>

                        <!-- Danh sách danh mục -->

                        <ul>
                            <li>
                                <a href="<?php echo BASE_URL; ?>index.php?route=account" class="title_info">
                                    Thông tin tài khoản
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL; ?>index.php?route=account&page=orders" class="title_info active">
                                    Đơn hàng của bạn
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL; ?>index.php?route=account&page=changepassword" class="title_info">
                                    Đổi mật khẩu
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL; ?>index.php?route=account&page=addressbook" class="title_info">
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
                                                <th>Giá trị đơn hàng</th>
                                                <th>TT thanh toán</th>
                                                <th>TT vận chuyển</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td>
                                                    <p>Gà Xốt Cay Hàn Quốc</p>
                                                </td>

                                                <td>
                                                    <p>31/12/2024</p>
                                                </td>

                                                <td>
                                                    <p>Phạm Đình Huy</p>

                                                </td>

                                                <td>
                                                    <p>123 Đường ABC, Phan Rang, Ninh Thuận</p>
                                                </td>

                                                <td>
                                                    <p>49.000 VND</p>
                                                </td>

                                                <td style="color: #E31837;">
                                                    <strong>
                                                        <p>49.000 VND</p>
                                                    </strong>
                                                </td>

                                                <td>
                                                    <p>Hẻm 382 Tân Kỳ Tân Quý, Phường Sơn Kỳ, Quận Tân Phú, Thành
                                                        phố Hồ Chí Minh, 72011, Việt Nam</p>
                                                </td>
                                            </tr>

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