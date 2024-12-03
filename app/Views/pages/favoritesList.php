<div class="body_wrap">
    <section class="bread_crumb">
        <div class="container_bread_crumb">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="#">
                        <span>Trang chủ</span>
                    </a>
                    <span class="mr_lr">
                        <i class="bi bi-chevron-right"></i>
                    </span>
                </li>
                <li>
                    <span class="name_prd">Danh sách yêu thích</span>
                </li>
            </ul>
        </div>
    </section>
    <p id="no-favorites-message">
        <span class="no_favorite">Không có sản phẩm yêu thích.</span>
    </p>
    <div class="product_topSelling">
        <ul>


            <div class="favorites-list-container">
                <h1>Danh sách yêu thích của bạn</h1>

                <?php if (!empty($favorites)): ?>
                    <ul>
                        <?php foreach ($favorites as $favorite): ?>
                            <li>
                                <div class="product_topSelling_thumbnail">

                                    <a href="<?= BASE_URL; ?>index.php?route=favorites&action=remove&id=<?= $favorite['id']; ?>">
                                        <i class="fa-solid fa-heart"
                                            data-id="<?= htmlspecialchars($favorite['id']); ?>"
                                            data-name="<?= htmlspecialchars($favorite['name']); ?>"
                                            data-image="<?= IMG_BASE_URL . htmlspecialchars($favorite['image_url']); ?>">
                                        </i>
                                    </a>

                                    <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $favorite['id']; ?>">
                                        <img src="<?= IMG_BASE_URL . htmlspecialchars($favorite['image_url']); ?>" alt="<?= htmlspecialchars($favorite['name']); ?>" />
                                    </a>
                                </div>

                                <div class="product_topSelling_info">
                                    <h3 class="product_topSelling_name">
                                        <?= htmlspecialchars($favorite['name']); ?>
                                    </h3>
                                    <span class="product_topSelling_content">
                                        <?= htmlspecialchars($favorite['description']); ?>
                                    </span>
                                    <a href="products?id=<?= $favorite['id']; ?>">Xem thêm</a>
                                </div>

                                <div class="product_topSelling_form">
                                    <div class="product_topSelling_priceBox">
                                        <span>Giá chỉ từ</span>
                                        <p><?= number_format($favorite['price'], 0, ',', '.'); ?> VND</p>
                                    </div>
                                    <a href="<?= BASE_URL; ?>index.php?route=cart&action=add&id=<?= $favorite['id']; ?>&name=<?= urlencode($favorite['name']); ?>&image_url=<?= urlencode($favorite['image_url']); ?>&price=<?= $favorite['price']; ?>&quantity=1">Thêm</a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Danh sách yêu thích của bạn hiện tại chưa có sản phẩm nào.</p>
                    <?php endif; ?>
            </div>





        </ul>
    </div>
</div>