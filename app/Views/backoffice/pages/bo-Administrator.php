<div class="k-content">

    <div class="k-content_head">
        <div class="k-content_head-main">
            <h3 class="k-content_head-title">Quản trị viên</h3>

            <div class="k-content__head-breadcrumbs">
                <a href="" class="k-content__head-breadcrumb-home"><i class="fa-solid fa-house"></i></a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Quản trị viên</a>
            </div>
        </div>
    </div>

    <div class="k-content_body">

        <div class="k-portlet">
            <div class="k-portlet_head">
                <div class="k-portlet_head-label">
                    <h3 class="k-portlet_head-title">Danh sách quản trị viên</h3>
                </div>
                <div class="k-portlet_head-toolbar">
                    <div class="k-portlet_head-toolbar-wrapper">
                        <a class="btn-brand"><i class="fa-solid fa-plus"></i>Tạo quản trị viên</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="k-portlet_body">
            <div class="datatable_wrapper">
                <div class="row_search">
                    <div class="col_left">
                        <div class="datatable_filter">
                            <label for="">Search:
                                <input type="search" class="form-control">
                            </label>
                        </div>
                    </div>
                    <div class="col_right">
                        <div class="dt_buttons"></div>
                    </div>
                </div>

                <div class="k-portlet_mobile-body">
                    <div class="table_user-list">
                        <table class="data_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Tên</th>
                                    <th>Quyền</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Lần cuối login</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($admins as $admin): ?>
                                    <tr class="odd">
                                        <td class="id"><?= $admin['id']; ?></td>
                                        <td class="usename"><?= $admin['email']; ?></td>
                                        <td class="name"><?= $admin['name']; ?></td>
                                        <td class="rights"><?= $admin['role']; ?></td>
                                        <td class="status">
                                            <span class="status_badge"><?= $admin['status']; ?></span>
                                        </td>
                                        <td class="created_at"><?= $admin['created_at']; ?></td>
                                        <td class="last_logged"><?= $admin['updated_at']; ?></td>
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


</div>