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
                <li class="changeurl">
                    <a href="#">
                        <span>Khai vị</span>
                    </a>
                    <span class="mr_lr">
                        <i class="bi bi-chevron-right"></i>
                    </span>
                </li>
                <li>
                    <span class="name_prd">Gà Giòn Xốt Tương Tỏi Hàn Quốc</span>
                </li>

            </ul>
        </div>
    </section>
    <section class="product playout_product">
        <div class="container_details">
            <div class="details_product">
                <div class="row_prd">
                    <!-- left -->
                    <div class="product_detailas_left">
                        <div class="product_img_block">
                            <div class="gallery_top">
                                <img src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>">
                            </div>
                            <div class="gallery_bottom">
                                <ul class="list_gallery_bottom dis_flex">
                                    <!-- Khi có border -->
                                    <li class="item_gallery_border selected">
                                        <img src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>">
                                    </li>
                                    <!-- Các ảnh khác -->
                                    <?php if (!empty($product['additional_images'])): ?>
                                        <?php foreach ($product['additional_images'] as $image): ?>
                                            <li class="item_gallery">
                                                <img src="<?= IMG_BASE_URL . htmlspecialchars($image); ?>" alt="<?= htmlspecialchars($product['name']); ?>">
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>

                        <div class="product-tab">
                            <div class="title_description_prd">
                                <h3 class="title_dct">
                                    Mô tả món ăn
                                </h3>
                            </div>
                            <hr>

                            <div class="description_product">
                                <div class="row_contnet">
                                    <span>Gà Giòn Xốt Tương Tỏi Hàn Quốc là món gà chiên giòn rụm, với lớp da vàng
                                        ươm, giòn tan. Gà được phủ đều một lớp xốt tương tỏi đậm đà, kết hợp giữa vị
                                        cay nhẹ, mặn ngọt hài hòa đặc trưng của ẩm thực Hàn Quốc. Hương thơm nồng
                                        của tỏi hòa quyện cùng vị tương đậm, tạo nên sự hấp dẫn khó cưỡng, làm bùng
                                        nổ vị giác ngay từ miếng đầu tiên.</span>
                                </div>

                                <div class="row_img_prd">
                                    <ul class="list_img_prd">
                                        <li class="item_img_prd">
                                            <img src="	https://placehold.co/150x100?text=MegaFood" alt="">
                                        </li>

                                        <li class="item_img_prd">
                                            <img src="	https://placehold.co/150x100?text=MegaFood" alt="">
                                        </li>

                                        <li class="item_img_prd">
                                            <img src="	https://placehold.co/150x100?text=MegaFood" alt="">
                                        </li>
                                    </ul>
                                </div>

                                <div class="view_all_dct">
                                    <span>Xem thêm</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Right -->
                    <div class="product_detailas_right">
                        <div class="full_width">
                            <div class="details">
                                <h1 class="title_product">
                                    Gà Giòn Xốt Tương Tỏi Hàn Quốc
                                </h1>
                                <form action="" method="post">
                                    <div class="price_box">
                                        <span class="special_price">
                                            <span class="product_price">
                                                99.000₫
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form-product">
                                        <div class="select_swatch">
                                            <div class="seclect_prd">
                                                Loại: <span class="value_roperties">3 miếng</span>
                                            </div>
                                        </div>
                                        <div class="thump_swatch">
                                            <div class="swatch_element">
                                                <input id="swatch-0-3-mieng" type="radio" name="option-0"
                                                    value="3 miếng" checked>
                                                <label for="swatch-0-3-mieng">3 miếng</label> </label>
                                            </div>

                                            <div class="swatch_element">
                                                <input id="swatch-0-5-mieng" type="radio" name="option-0"
                                                    value="5 miếng">
                                                <label for="swatch-0-5-mieng">5 miếng</label> </label>
                                            </div>

                                            <div class="swatch_element">
                                                <input id="swatch-0-9-mieng" type="radio" name="option-0"
                                                    value="9 miếng">
                                                <label for="swatch-0-9-mieng">9 miếng</label> </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ghi chú -->
                                    <div class="note">
                                        <label>Ghi chú</label>
                                        <textarea class="note_content"
                                            placeholder="Nhập ghi chú của bạn tại đây..."></textarea>

                                    </div>

                                    <!-- Số lượng -->
                                    <div class="quantity_prd">
                                        <div class="custom_btn_number">
                                            <label class="sl">Số lượng:</label>
                                            <div class="input_number_product">
                                                <button class="btn_num">
                                                    <i class="bi bi-dash-lg"></i>
                                                </button>
                                                <span class="show_num">1</span>
                                                <button class="btn_num">
                                                    <i class="bi bi-plus-lg"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mua -->
                                    <div class="button_actions">
                                        <button type="submit" title="Mua ngay" class="btn_by_now">
                                            <a href="#"> MUA NGAY </a>
                                        </button>
                                        <button title="Thêm vào yêu thích" class="btn_wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="group-button">
                                        <button title="Thêm vào giỏ hàng" class="btn_add_to_cart">
                                            <a href="#">THÊM VÀO GIỎ</a>
                                        </button>
                                        <button title="Đặt bàn ngay" class="btn_phone">
                                            <a href="#">ĐẶT BÀN NGAY</a>
                                        </button>
                                    </div>

                                </form>
                            </div>
                            <div class="voucher_product">
                                <div class="title_voucher">
                                    <img src="https://bizweb.dktcdn.net/100/510/571/themes/941527/assets/code_dis.gif?1727255430829"
                                        alt="">
                                    <span>Nhận voucher ngay !!!</span>
                                </div>

                                <div class="row_voucher">
                                    <div class="content_voucher">
                                        <span>
                                            Nhập mã <b>DOLA20</b> để giảm ngay 20.000đ.
                                            Áp dụng cho đơn hàng từ 200k trở lên.
                                            Không đi kèm với chương trình khác
                                        </span>
                                        <div class="coupon_code" title="Sao chép">Sao chép</div>
                                    </div>

                                    <div class="content_voucher">
                                        <span>
                                            Nhập mã <b>DOLA50</b> để giảm ngay 50.000đ.
                                            Áp dụng cho đơn hàng từ 500k trở lên.
                                            Không đi kèm với chương trình khác
                                        </span>
                                        <div class="coupon_code" title="Sao chép">Sao chép</div>
                                    </div>

                                    <div class="content_voucher">
                                        <span>
                                            Nhập mã <b>FREESHIP</b> để giảm ngay miễn phí giao hàng.
                                            Áp dụng cho đơn hàng từ 300k trở lên
                                        </span>
                                        <div class="coupon_code" title="Sao chép">Sao chép</div>
                                    </div>

                                </div>
                                <div class="note_voucher">
                                    <span>Lưu mã và nhập ở trang <b>THANH TOÁN</b> bạn nhé!!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row_detail">
                    <!-- Món ăn liên quan -->
                    <div class="product_relate">
                        <h3 class="title">
                            <a class="title-name" href="#" title="Món ăn liên quan">Món ăn liên quan
                            </a>
                        </h3>
                        <!-- product -->
                        <section class="products_view">
                            <div class="row_product">
                                <ul>
                                    <?php if (!empty($products)): ?>
                                        <?php foreach ($products as $relatedProduct): ?>
                                            <?php if ($relatedProduct['id'] != $product['id']): ?>
                                                <li>
                                                    <div class="product_topSelling_thumbnail">
                                                        <i class="fa-regular fa-heart add_to_favorites" data-name="<?= htmlspecialchars($relatedProduct['name']); ?>" data-image="<?= htmlspecialchars($relatedProduct['image_url']); ?>"></i>
                                                        <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $relatedProduct['id']; ?>">
                                                            <img src="<?= IMG_BASE_URL . htmlspecialchars($relatedProduct['image_url']); ?>" alt="<?= htmlspecialchars($relatedProduct['name']); ?>" />
                                                        </a>
                                                    </div>

                                                    <div class="product_topSelling_info">
                                                        <h3 class="product_topSelling_name"><?= htmlspecialchars($relatedProduct['name']); ?></h3>
                                                        <span class="product_topSelling_content"><?= htmlspecialchars($relatedProduct['description']); ?></span>
                                                        <a href="#">Xem thêm</a>
                                                    </div>

                                                    <div class="product_topSelling_form">
                                                        <div class="product_topSelling_priceBox">
                                                            <span>Giá chỉ từ</span>
                                                            <p><?= number_format($relatedProduct['price'], 0, ',', '.'); ?>đ</p>
                                                        </div>
                                                        <a href="javascript:void(0)" class="add_to_cart" data-name="<?= htmlspecialchars($relatedProduct['name']); ?>" data-image="<?= htmlspecialchars($relatedProduct['image_url']); ?>">
                                                            Thêm
                                                        </a>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p>Không có sản phẩm nào trong danh mục này.</p>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!-- Tin tức -->
                    <div class="block-blog">
                        <h3 class="title">
                            <a href="#">Tin tức mới nhất</a>
                        </h3>

                        <ul class="list_blog_small">
                            <li class="item_blog_small">
                                <div class="blog_thumb">
                                    <a href="#" class="thumb">
                                        <img src="	https://bizweb.dktcdn.net/100/510/571/articles/de-banh-pizza-mua-o-dau-0.jpg?v=1709024507643"
                                            alt="">
                                    </a>
                                </div>
                                <div class="block_content">
                                    <span>
                                        <a class="line-clamp" href="#"
                                            title="Đế bánh pizza mua ở đâu đảm bảo chất lượng?">Đế bánh pizza mua ở
                                            đâu đảm bảo chất lượng?</a>
                                    </span>
                                </div>
                            </li>

                            <li class="item_blog_small">
                                <div class="blog_thumb">
                                    <a href="#" class="thumb">
                                        <img src="https://bizweb.dktcdn.net/100/510/571/articles/cach-lam-pizza-xot-mayonnaise-4.jpg?v=1709024419360"
                                            alt="">
                                    </a>
                                </div>
                                <div class="block_content">
                                    <span>
                                        <a class="line-clamp" href="#"
                                            title="Cách làm pizza xốt Mayonnaise thơm béo ngon ngất ngây">Cách làm
                                            pizza xốt Mayonnaise thơm béo ngon ngất ngây</a>
                                    </span>
                                </div>
                            </li>

                            <li class="item_blog_small">
                                <div class="blog_thumb">
                                    <a href="#" class="thumb">
                                        <img src="https://bizweb.dktcdn.net/100/510/571/articles/tim-hieu-cac-loai-pasta-0.jpg?v=1709024193760"
                                            alt="">
                                    </a>
                                </div>
                                <div class="block_content">
                                    <span>
                                        <a class="line-clamp" href="#"
                                            title="Pasta là món ăn của nước nào? Pasta và Spaghetti có gì khác nhau?">Pasta
                                            là món ăn của nước nào? Pasta và Spaghetti có gì khác nhau?</a>
                                    </span>
                                </div>
                            </li>

                            <li class="item_blog_small">
                                <div class="blog_thumb">
                                    <a href="#" class="thumb">
                                        <img src="https://bizweb.dktcdn.net/100/510/571/articles/tiet-lo-tinh-cach-qua-cach-an-pizza-0.jpg?v=1709024054670"
                                            alt="">
                                    </a>
                                </div>
                                <div class="block_content">
                                    <span>
                                        <a class="line-clamp" href="#"
                                            title="Tiết lộ tính cách qua cách ăn pizza cực thú vị">Tiết lộ tính cách
                                            qua cách ăn pizza cực thú vị</a>
                                    </span>
                                </div>
                            </li>
                        </ul>

                        <div class="view_all">
                            <a href="#">
                                <span>Xem tất cả</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row_reviews">
                    <div class="title_reviews">
                        <h1>Đánh giá sản phẩm</h1>
                    </div>

                    <section class="product_reviews">
                        <div class="user_rating">
                            <div class="info_user">
                                <div class="user_avatar">
                                    <img src="https://static.vecteezy.com/system/resources/previews/020/911/740/original/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png"
                                        alt="">
                                </div>
                                <div class="user_name star">
                                    <span>HuyPham</span>
                                    <ul class="list_star">
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="reviews">
                                <span>Đồ ăn giao nhanh, mà còn rẻ nữa</span>
                            </div>
                        </div>

                        <div class="user_rating">
                            <div class="info_user">
                                <div class="user_avatar">
                                    <img src="https://static.vecteezy.com/system/resources/previews/020/911/740/original/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png"
                                        alt="">
                                </div>
                                <div class="user_name star">
                                    <span>Tuấn anh</span>
                                    <ul class="list_star">
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="reviews">
                                <span>Đồ ăn giao nhanh, mà còn rẻ nữa</span>
                            </div>
                        </div>

                        <div class="user_ratings">
                            <form action="">
                                <div class="form_group_rating">
                                    <textarea id="rating" name="rating"
                                        placeholder="Viết đánh giá của bạn tại đây..."></textarea>
                                    <button type="submit">Gửi đánh giá</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
    </section>
</div>