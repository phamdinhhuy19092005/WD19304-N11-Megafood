<div class="k-content">
    <div class="k-content_head">
        <div class="k-content_head-main">
            <h3 class="k-content_head-title">Tạo khách hàng</h3>

            <div class="k-content__head-breadcrumbs">
                <a href="" class="k-content__head-breadcrumb-home"><i class="fa-solid fa-house"></i></a>
                <a href="../html/customer.html" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Danh sách khách hàng</a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Tạo khách hàng</a>
            </div>
        </div>
    </div>



    <form action="<?php echo BASE_URL . '?route=admin&action=bo-CreateCustomer'; ?>" class="k-form" method="POST" autocomplete="off">
        <div class="k-form_body">
            <div class="k-form_head">
                <div class="k-form_head-title">
                    <h3>Danh sách khách hàng</h3>
                </div>
            </div>

            <div class="form-group">
                <label for="lastName">Họ *</label><br>
                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Nhập họ tài khoản" required>
            </div>
            <div class="form-group">
                <label for="firstName">Tên *</label><br>
                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Nhập tên hiển thị" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label><br>
                <input type="email" id="email" name="email" class="form-control" placeholder="Nhập E-mail" required>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label><br>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu*</label><br>
                <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
            </div>
        </div>

        <div class="k-form_foot">
            <div class="k-form_actions">
                <button type="submit" name="signUp" class="btn-save">Lưu</button>
                <button type="button" class="btn-cancel" onclick="window.location.href='<?= BASE_URL . '?route=admin'; ?>'">Hủy</button>
            </div>
        </div>
    </form>




</div>