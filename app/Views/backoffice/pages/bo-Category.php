<div class="k-content">

    <div class="k-content_head">
        <div class="k-content_head-main">
            <h3 class="k-content_head-title">Quản lí danh mục</h3>

            <div class="k-content__head-breadcrumbs">
                <a href="" class="k-content__head-breadcrumb-home"><i class="fa-solid fa-house"></i></a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Kho sản phẩm</a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Danh mục</a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Quản lí danh mục</a>
            </div>
        </div>
    </div>

    <div class="k-content_body">

        <div class="k-portlet">
            <div class="k-portlet_head">
                <div class="k-portlet_head-label">
                    <h3 class="k-portlet_head-title">Danh sách danh mục</h3>
                </div>
                <div class="k-portlet_head-toolbar">
                    <div class="k-portlet_head-toolbar-wrapper">
                        <a class="btn-brand"><i class="fa-solid fa-plus"></i>Tạo mới </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="search_container">
                    <label for="">Search:</label>
                    <input type="text"  name="" id="searchInput">
                        
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
                                    <th>Thứ tự</th>
                                    <th>Số sản phẩm</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody class="search_list">

                                <?php foreach ($categories as $category): ?>
                                    <?php
                                    $category['product_count'] = $categoriesModel->getProductCountByCategory($category['id']);
                                    ?>
                                    <tr class="odd">
                                        <td class="id"><?= $category['id']; ?></td>
                                        <td class="name"><?= $category['name']; ?></td>
                                        <td class="img">
                                            <img style="width: 100px; height: 90px;" src="<?= IMG_BASE_URL . $category['image_url']; ?>" alt="Category Image">
                                        </td>
                                        <td class="oder"><?= $category['id']; ?></td>
                                        <td class="amount"><?= $category['product_count']; ?></td>
                                        <td class="status">
                                            <span class="status_badge"><?= $category['status']; ?></span>
                                        </td>
                                        <td class="created_at"><?= $category['created_at']; ?></td>
                                        <td class="update_date"><?= $category['updated_at']; ?></td>
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