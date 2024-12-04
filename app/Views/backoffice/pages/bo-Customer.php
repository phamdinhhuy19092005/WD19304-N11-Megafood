<div class="k-content">
    <div class="k-content_head">
        <div class="k-content_head-main">
            <h3 class="k-content_head-title">Danh sách khách hàng</h3>

            <div class="k-content__head-breadcrumbs">
                <a href="" class="k-content__head-breadcrumb-home"><i class="fa-solid fa-house"></i></a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Khách hàng</a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Danh sách khách
                    hàng</a>
            </div>
        </div>
    </div>


    <div class="k-content_body">
        <div class="k-portlet_mobile">
            <div class="k-portlet_mobile-head">
                <div class="k-portlet_mobile-head-title">
                    <h3>Danh sách khách hàng</h3>
                </div>
                <div class="k-portlet_mobile-head-toolbar">
                    <div class="k-portlet_mobile-head-toolbar_wrapper">
                        <a href="../html/createCustomer.html"><i class="fa-solid fa-plus"></i>Tạo mới</a>
                    </div>
                </div>
            </div>
            <div class="k-portlet_mobile-body">
                <div class="table_user-list">
                    <table class="data_table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên tài khoản</th>
                                <th>Tên</th>
                                <th>SĐT</th>
                                <th>E-mail</th>
                                <th>Kênh truy cập</th>
                                <th>Trạng thái</th>
                                <th>Đăng nhập lần cuối</th>
                                <th>Ngày tạo</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr class="odd">
                                    <td class="id"><?= $user['id']; ?></td>
                                    <td class="usename"><?= $user['first_name'] . ' ' . $user['last_name']; ?></td>
                                    <td class="name"><?= $user['first_name'] . ' ' . $user['last_name']; ?></td>
                                    <td class="phone_number"><?= $user['phone']; ?></td>
                                    <td class="email"><?= $user['email']; ?></td>
                                    <td class="access_channel">Website</td>
                                    <td class="status">
                                        <span class="status_badge"><?= $user['status']; ?></span>
                                    </td>
                                    <td class="last_logged"><?= $user['created_at']; ?></td>
                                    <td class="created_at"><?= $user['created_at']; ?></td>
                                    <td class="actions"><i class="fa-solid fa-eye"></i></td>

                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>