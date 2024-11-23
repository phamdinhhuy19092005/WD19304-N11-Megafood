<div class="bodywrap">
    <section class="bread_crumb">
        <div class="container_bread_crumb">
            <ul class="List_bread_crumb">
                <li class="home">
                    <a href="#">
                        <span>Trang chủ</span>
                    </a>
                    <span class="mr_lr">
                        <i class="bi bi-chevron-right"></i>
                    </span>
                </li>
                <li>
                    <span class="name_prd">Thay đổi mật khẩu</span>
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
                                <a href="<?php echo BASE_URL; ?>index.php?route=account&page=changepassword" class="title_info active">
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
                            ĐỔI MẬT KHẨU
                        </h2>
                        <div class="row">
                            <div class="page_login">
                                <form class="form_login" id="change_customer_password">
                                    <p>Để đảm bảo tính bảo mật bạn vui lòng đặt lại mật khẩu với ít nhất 8 kí tự</p>
                                    <div class="form_signup">
                                        <div class="form_group">
                                            <label for="oldPass">
                                                Mật khẩu cũ
                                                <span class="error">*</span>
                                            </label>
                                            <input type="password" name="OldPassword" id="OldPass" required=""
                                                class="form_control">
                                        </div>

                                        <div class="form_group">
                                            <label for="newPass">
                                                Mật khẩu mới
                                                <span class="error">*</span>
                                            </label>
                                            <input type="password" name="NewPassword" id="newPass" required=""
                                                class="form_control">
                                        </div>

                                        <div class="form_group">
                                            <label for="confirmPass">
                                                Xác nhận lại mật khẩu
                                                <span class="error">*</span>
                                            </label>
                                            <input type="password" name="confirmPass" id="confirmPass" required=""
                                                class="form_control">
                                        </div>
                                        <button class="btn_edit_addr" type="submit">Đặt lại mật khẩu</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>