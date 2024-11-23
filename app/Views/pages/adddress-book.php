<div class="bodywrap">
    <section class="bread_crumb">
        <div class="container_bread_crumb">
            <ul class="List_bread_crumb">
                <li class="home">
                    <a href="../../Home/index.html">
                        <span>Trang chủ</span>
                    </a>
                    <span class="mr_lr">
                        <i class="bi bi-chevron-right"></i>
                    </span>
                </li>
                <li class="changeurl">
                    <a href="../account.html">
                        <span>Tài khoản</span>
                    </a>
                    <span class="mr_lr">
                        <i class="bi bi-chevron-right"></i>
                    </span>
                </li>
                <li>
                    <span class="name_prd">Địa chỉ khách hàng</span>
                </li>

            </ul>
        </div>
    </section>
    <section class="page_customer_account">
        <div class="container_acc">
            <div class="block_background">
                <div class="row row_acc">
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
                                <a href="<?php echo BASE_URL; ?>index.php?route=account&page=orders" class="title_info">
                                    Đơn hàng của bạn
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL; ?>index.php?route=account&page=changepassword" class="title_info">
                                    Đổi mật khẩu
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL; ?>index.php?route=account&page=addressbook" class="title_info active">
                                    Sổ địa chỉ (1)
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col_right_ac">
                        <h2 class="title_head">
                            ĐỊA CHỈ CỦA BẠN
                        </h2>
                        <div class="btn_row">
                            <button class="btn_more">
                                <a href="../addAddress/addAdress.html">Thêm địa chỉ</a>
                            </button>
                            <hr>
                        </div>

                        <div class="row">
                            <div class="total_address">
                                <div class="address_group">
                                    <div class="address">
                                        <p>
                                            <strong>Họ tên: </strong>Phạm Đình Huy

                                            <span class="address_default">
                                                Địa chỉ mặc định
                                            </span>
                                        </p>

                                        <p>
                                            <strong>Địa chỉ: </strong>

                                            Công Viên Phần Mềm Quang Trung quận 12,


                                            Phường Đông Hưng Thuận,


                                            Quận 12,


                                            TP Hồ Chí Minh,


                                            Vietnam

                                        </p>

                                        <p><strong>Số điện thoại:</strong> 0338047406</p>
                                    </div>
                                </div>
                            </div>

                            <div class="btn_address">
                                <p class="btn_row">
                                    <button class="btn_edit">Chỉnh sửa địa chỉ</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>