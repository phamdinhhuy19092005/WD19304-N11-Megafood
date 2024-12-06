<div class="k-content">
    <div class="k-content_head">
        <div class="k-content_head-main">
            <h3 class="k-content_head-title">Chỉnh sửa thông tin</h3>

            <div class="k-content__head-breadcrumbs">
                <a href="" class="k-content__head-breadcrumb-home"><i class="fa-solid fa-house"></i></a>
                <a href="../html/customer.html" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Danh sách khách hàng</a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Chỉnh sửa thông tin khách hàng</a>
            </div>
        </div>
    </div>



    <form action="<?= BASE_URL . '?route=admin&action=bo-Customer&id=' . htmlspecialchars($product['id']); ?>" class="k-form" method="POST">
        <div class="k-form_body">
            <div class="k-form_head">
                <div class="k-form_head-title">
                    <h3>Chỉnh sửa thông tin khách hàng</h3>
                </div>
            </div>
            <div class="form-group">
                <label for="">Họ</label><br>
                <input type="text" id="firstName" name="first_name" class="form-control" placeholder="Nhập họ" value="<?= htmlspecialchars($user['first_name'] ?? '') ?>">
            </div>
            <div class="form-group">
                <label for="">Tên</label><br>
                <input type="text" id="lastName" name="last_name" class="form-control" placeholder="Nhập tên" value="<?= htmlspecialchars($user['last_name'] ?? '') ?>">
            </div>
            <div class="form-group">
                <label for="">E-mail</label><br>
                <input type="email" id="email" name="email" class="form-control" placeholder="Nhập E-mail" value="<?= htmlspecialchars($user['email'] ?? '') ?>">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label><br>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" value="<?= htmlspecialchars($user['phone'] ?? '') ?>">
            </div>
            <div class="form-group">
                <label for="">Trạng thái</label><br>
                <input type="text" id="status" name="status" class="form-control" placeholder="Nhập trạng thái" value="<?= htmlspecialchars($user['status'] ?? '') ?>">
            </div>
            <div class="form-group-select">
                <div class="allow-login">
                    <label for="">Cho phép đăng nhập*</label><br>
                    <select class="form-control" name="allowLogin">
                        <option value="1" <?= (isset($user['allow_login']) && $user['allow_login'] == 1) ? 'selected' : '' ?>>Có</option>
                        <option value="2" <?= (isset($user['allow_login']) && $user['allow_login'] == 2) ? 'selected' : '' ?>>Không</option>
                    </select>
                </div>
                <div class="channel">
                    <label for="">Kênh truy cập*</label><br>
                    <select class="form-control" name="channel">
                        <option value="1" <?= (isset($user['channel']) && $user['channel'] == 1) ? 'selected' : '' ?>>Website</option>
                        <option value="2" <?= (isset($user['channel']) && $user['channel'] == 2) ? 'selected' : '' ?>>Shopee</option>
                        <option value="3" <?= (isset($user['channel']) && $user['channel'] == 3) ? 'selected' : '' ?>>Lazada</option>
                        <option value="4" <?= (isset($user['channel']) && $user['channel'] == 4) ? 'selected' : '' ?>>Tiki</option>
                        <option value="5" <?= (isset($user['channel']) && $user['channel'] == 5) ? 'selected' : '' ?>>Facebook</option>
                        <option value="6" <?= (isset($user['channel']) && $user['channel'] == 6) ? 'selected' : '' ?>>Tiktok</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="k-form_foot">
            <div class="k-form_actions">
                <button type="submit" name="updateCustomer" class="btn-save">Lưu</button>
                <button type="button" class="btn-cancel" onclick="window.history.back();">Hủy</button>
                <button type="button" class="btn-delete">Xóa tài khoản</button>
            </div>
        </div>
    </form>


</div>