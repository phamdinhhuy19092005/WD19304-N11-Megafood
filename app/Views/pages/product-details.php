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
                    <span class="name_prd"><?= htmlspecialchars($product['name']); ?></span>
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
                        </div>

                        <div class="product-tab">
                            <div class="title_description_prd">
                                <h3 class="title_dct">
                                    Mô tả món ăn
                                </h3>
                            </div>
                            <hr style="margin-top: 20px ; border: 1px solid #eee">
                            <div class="description_product">
                                <div class="row_content">
                                    <span><?= htmlspecialchars($product['description']); ?></span>
                                </div>
                                <hr style="margin-top: 20px ; border: 1px solid #eee">
                                <div class="description_store" style="margin-top: 20px ;">
                                    <h4>🌟 Mega Food - Vị Ngon Từng Khoảnh Khắc! 🌟</h4>
                                    <p>Mega Food là thương hiệu đồ ăn nhanh nổi bật với:</p>
                                    <ul>
                                        <li>🍔 Hương vị đậm đà: Các món ăn được chế biến từ nguyên liệu tươi sạch và công thức đặc biệt.</li>
                                        <li>🚀 Phục vụ nhanh chóng: Đáp ứng mọi nhu cầu ăn uống dù bạn đang ở đâu.</li>
                                        <li>💬 Đa dạng lựa chọn: Thực đơn phong phú, phù hợp mọi sở thích và khẩu vị.</li>
                                        <li>🛒 Dễ dàng đặt hàng: Đặt món chỉ với vài cú chạm trên ứng dụng hoặc website.</li>
                                    </ul>
                                    <p>👉 Mega Food - Đưa niềm vui đến mọi bữa ăn của bạn!</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Right -->
                    <div class="product_detailas_right">
                        <div class="full_width">
                            <div class="details">
                                <h1 class="title_product">
                                    <?= htmlspecialchars($product['name']); ?>
                                </h1>
                                <form action="" method="post">
                                    <div class="price_box">
                                        <span class="special_price">
                                            <span class="product_price">
                                                <?= number_format($product['price'], 0, ',', '.'); ?> VNĐ
                                            </span>
                                        </span>
                                    </div>

                                    <!-- Ghi chú -->
                                    <div class="note">
                                        <label>Ghi chú</label>
                                        <textarea class="note_content" placeholder="Nhập ghi chú của bạn tại đây..."></textarea>
                                    </div>

                                    <!-- Số lượng -->
                                    <div class="quantity_prd">
                                        <div class="custom_btn_number">
                                            <label class="sl">Số lượng:</label>
                                            <div class="input_number_product">
                                                <button type="button" class="btn_num btn_minus" onclick="changeQuantity(-1)">
                                                    <i class="bi bi-dash-lg"></i>
                                                </button>
                                                <span class="show_num" id="quantity_display">1</span>
                                                <button type="button" class="btn_num btn_plus" onclick="changeQuantity(1)">
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

                                        <a class="btn_favorites" href="<?= BASE_URL; ?>index.php?route=favorites&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&image_url=<?= urlencode($product['image_url']); ?>&price=<?= $product['price']; ?>&description=<?= urlencode($product['description']); ?>">
                                            <i class="fa-regular fa-heart add_to_favorites" title="Thêm vào yêu thích"></i>
                                        </a>
                                    </div>

                                    <div class="group-button">
                                        <button type="button" title="Thêm vào giỏ hàng" class="btn_add_to_cart" onclick="addToCart(<?= $product['id']; ?>, '<?= $product['name']; ?>', <?= $product['price']; ?>, '<?= $product['image_url']; ?>')">
                                            Thêm vào giỏ hàng
                                        </button>

                                        <button title="Đặt bàn ngay" class="btn_phone">
                                            <a href="<?php echo BASE_URL; ?>index.php?route=booking">ĐẶT BÀN NGAY</a>
                                        </button>
                                    </div>
                                </form>

                                <script>
                                    function changeQuantity(amount) {
                                        let quantityDisplay = document.getElementById('quantity_display');
                                        let currentQuantity = parseInt(quantityDisplay.textContent);
                                        currentQuantity += amount;
                                        if (currentQuantity < 1) currentQuantity = 1;
                                        quantityDisplay.textContent = currentQuantity;
                                    }

                                    function addToCart() {
                                        let quantity = document.getElementById('quantity_display').textContent;
                                        let url = "<?= BASE_URL; ?>index.php?route=cart&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&image_url=<?= urlencode($product['image_url']); ?>&price=<?= $product['price']; ?>&quantity=" + quantity;
                                        window.location.href = url;
                                    }
                                </script>

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
                                            Nhập mã <b>MEGAFOOD20</b> để giảm ngay 20.000đ.
                                            Áp dụng cho đơn hàng từ 200k trở lên.
                                            Không đi kèm với chương trình khác
                                        </span>
                                        <div class="coupon_code" title="Sao chép">Sao chép</div>
                                    </div>

                                    <div class="content_voucher">
                                        <span>
                                            Nhập mã <b>MEGAFOOD50</b> để giảm ngay 50.000đ.
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

                                                        <a href="<?= BASE_URL; ?>index.php?route=favorites&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&image_url=<?= urlencode($product['image_url']); ?>&price=<?= $product['price']; ?>&description=<?= urlencode($product['description']); ?>">
                                                            <i class="fa-regular fa-heart add_to_favorites" title="Thêm vào yêu thích"></i>
                                                        </a>

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
                                                        <a href="<?= BASE_URL; ?>index.php?route=cart&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&image_url=<?= urlencode($product['image_url']); ?>&price=<?= $product['price']; ?>&quantity=1">Thêm</a>
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

            </div>
    </section>
</div>