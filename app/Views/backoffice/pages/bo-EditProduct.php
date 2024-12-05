<div class="k-content">

    <div class="k-content_head">
        <div class="k-content_head-main">
            <h3 class="k-content_head-title">Chỉnh sửa sản phẩm</h3>

            <div class="k-content__head-breadcrumbs">
                <a href="" class="k-content__head-breadcrumb-home"><i class="fa-solid fa-house"></i></a>
                <a href="<?php echo BASE_URL . '?route=admin&action=bo-Product'; ?>" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Sản phẩm</a>
                <a href="" class="k-content__head-breadcrumb-link"><i class="fa-solid fa-circle"></i>Chỉnh sửa sản phẩm</a>
            </div>
        </div>
    </div>

    <div class="product-preview">
        <div class="row_edit">
            <div class="col_edit_1">
                <img src="<?= IMG_BASE_URL . ($product['image_url']); ?>" alt="">
            </div>
            <div class="col_edit_2">
                <form action="" id="form_edit">
                    <div class="item_input_edit">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="name" placeholder="Tên sản phẩm" value="<?= htmlspecialchars($product['name']); ?>">
                    </div>

                    <div class="item_input_edit">
                        <label for="productImage">URL ảnh sản phẩm</label>
                        <input type="text" name="img" placeholder="Ảnh sản phẩm" value="<?= htmlspecialchars($relativePath); ?>">
                    </div>

                    <div class="item_input_edit">
                        <label for="">Giá</label>
                        <input type="text" name="price" placeholder="Giá tiền" value="<?= number_format($product['price'], 0, ',', '.'); ?>. VND">
                    </div>

                    <div class="item_input_edit">
                        <label for="">Mô tả sản phẩm</label>
                        <textarea name="mota"><?= htmlspecialchars($product['description']); ?></textarea>
                    </div>

                    <div class="box_item">
                        <div class="item_input_edit">
                            <label for="">Trạng thái</label>
                            <input type="text" name="status" placeholder="Trạng thái sản phẩm" value="In Stock">
                        </div>

                        <div class="item_input_edit">
                            <label for="">Danh mục</label>
                            <input type="text" name="category_id" placeholder="Danh mục sản phẩm" value="<?= htmlspecialchars($categoryId); ?>">
                        </div>

                        <div class="item_input_edit">
                            <label for="">Nổi bật</label>
                            <input type="text" name="is_featured" placeholder="Sản phẩm nổi bật" value="<?= htmlspecialchars($isFeatured); ?>">
                        </div>

                        <div class="item_input_edit">
                            <label for="">Sale</label>
                            <input type="text" name="sale" id="sale" placeholder="Giảm giá" value="<?= htmlspecialchars($sale); ?>">
                        </div>
                    </div>

                    <div class="k-content_foot">
                        <div class="k-form_actions">
                            <button class="btn-primary_ac">Lưu</button>
                            <button class="btn-secondary">Hủy</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


</div>