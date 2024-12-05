<div class="k-content">

    <div class="k-content_head">
        <div class="k-content_head-main">
            <h3 class="k-content_head-title">Sản phẩm</h3>

            <div class="k-content__head-breadcrumbs">
                <a href="" class="k-content__head-breadcrumb-home"><i class="fa-solid fa-house"></i></a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Kho sản phẩm</a>
            </div>
        </div>
    </div>



    <div class="k-content_body">

        <div class="k-portlet">
            <div class="k-portlet_head">
                <div class="k-portlet_head-label">
                    <h3 class="k-portlet_head-title">Danh sách sản phẩm</h3>
                </div>
                <div class="k-portlet_head-toolbar">
                    <div class="k-portlet_head-toolbar-wrapper">
                        <a href="#" class="btn-brand"><i class="fa-solid fa-plus"></i>Tạo sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="k-portlet_body">
            <div class="datatable_wrapper">
                <div class="k-portlet_mobile-body">
                    <div class="table_user-list">
                        <table class="data_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Hình ảnh</th>
                                    <th>Trạng thái</th>
                                    <th>Thương hiệu</th>
                                    <th>Danh mục</th>
                                    <th>Người tạo</th>
                                    <th>Người cập nhật</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product): ?>
                                    <tr class="odd">
                                        <td class="id"><?= $product['id']; ?></td>
                                        <td class="name"><?= $product['name']; ?></td>
                                        <td class="img"><img style="width: 100px; height: 100px;" src="<?= IMG_BASE_URL . $product['image_url']; ?>" alt=""></td>
                                        <td class="status">
                                            <span class="status_badge"><?= $product['status']; ?></span>
                                        </td>
                                        <td class="trademark">Mega Food</td>
                                        <td class="category"><?= $product['id_categories']; ?></td>
                                        <td class="creater">[CEO] Pham Dinh Huy</td>
                                        <td class="updater">[CEO] Pham Dinh Huy</td>
                                        <td class="created_at"><?= $product['created_at']; ?></td>
                                        <td class="update_date"><?= $product['updated_at']; ?></td>
                                        <td class="actions">

                                            <a href="<?php echo BASE_URL . '?route=admin&action=bo-EditProduct&id=' . $product['id']; ?>">
                                                 <i class="fa-solid fa-eye"></i>
                                            </a>

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