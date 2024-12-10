<div class="k-content">
    <div class="k-content_head">
        <div class="k-content_head-main">
            <h3 class="k-content_head-title">Tạo danh mục</h3>

            <div class="k-content__head-breadcrumbs">
                <a href="" class="k-content__head-breadcrumb-home"><i class="fa-solid fa-house"></i></a>
                <a href="../html/customer.html" class="k-content__head-breadcrumb-link"><i
                        class="fa-solid fa-circle"></i>Danh sách Danh mục</a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Tạo danh mục</a>
            </div>
        </div>
    </div>


    <form action="<?php echo BASE_URL . '?route=admin&action=bo-CreateCategory'; ?>" method="POST" class="k-form-cate" enctype="multipart/form-data">
        <div class="k-form_body">
            <div class="k-form_head">
                <div class="k-form_head-title">
                    <h3>Danh sách danh mục</h3>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Tên*</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên" required>
            </div>
            <div class="form-group">
                <label for="image">Hình ảnh *</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <div class="form-group">
                <div class="item_input_edit">
                    <label for="status">Trạng thái</label>
                    <select name="status" id="status">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Hidden">Hidden</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <textarea name="description" placeholder="Nhập mô tả"></textarea>
            </div>
        </div>
        <div class="k-form_foot">
            <div class="k-form_actions">
                <button type="submit" name="createCategory" class="btn-save">Lưu</button>
                <button type="button" onclick="window.location.href='<?php echo BASE_URL; ?>';" class="btn-cancel">Hủy</button>
            </div>
        </div>
    </form>


</div>