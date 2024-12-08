<div class="k-content">
    <div class="k-content_head">
        <div class="k-content_head-main">
            <h3 class="k-content_head-title">Tạo sản phẩm</h3>

            <div class="k-content__head-breadcrumbs">
                <a href="" class="k-content__head-breadcrumb-home"><i class="fa-solid fa-house"></i></a>
                <a href="../html/customer.html" class="k-content__head-breadcrumb-link"><i
                        class="fa-solid fa-circle"></i>Sản phẩm</a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Tạo sản
                    phẩm</a>
            </div>
        </div>
    </div>
    <div class="row">
        <form action="<?php echo BASE_URL . '?route=admin&action=bo-CreateProduct'; ?>" method="POST" autocomplete="off">
            <div class="form_left">
                <div class="k-portlet">
                    <div class="k-portlet_head">
                        <div class="k-portlet_head-title">
                            <h3>Thông tin chung</h3>
                        </div>
                    </div>
                    <div class="k-portlet_body">
                        <div class="form-group">
                            <label for="">Tên sản phẩm*</label>
                            <input type="text" class="form-control" placeholder="Nhập tên">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả *</label>
                            <textarea name="description" id="description" placeholder="Nhập mô tả sản phẩm"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Giá tiền *</label>
                            <input type="text" class="form-control" placeholder="Nhập tiền">
                        </div>
                        <div class="form-group">
                            <label for="fileUpload">Hình ảnh *</label>
                            <input type="file" id="fileUpload" class="form-control" placeholder="Nhập URL ảnh">
                        </div>

                    </div>
                </div>
            </div>

            <div class="box-form">
                <div class="form_right">
                    <div class="k-portlet">
                        <div class="k-portlet_head">
                            <div class="k-portlet_head-title">
                                <h3>Thông tin phân loại </h3>
                            </div>
                        </div>
                        <div class="k-portlet_body">
                            <div class="form-group">
                                <label>Danh mục *</label>
                                <select title="-- Chọn danh mục --" class="form-control">
                                    <optgroup label="-- Chọn danh mục --">
                                        <option value="1">Pizza</option>
                                        <option value="2">Khai vị</option>
                                        <option value="3">Mỳ ý</option>
                                        <option value="4">Salad</option>
                                        <option value="5">Đồ uống</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="k-form_foot">
                    <div class="k-form_actions">
                        <button type="submit" class="btn-primary_ac">Lưu</button>
                        <button type="redirect" class="btn-secondary">Hủy</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>