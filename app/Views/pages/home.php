<div class="bodywrap">
    <div class="slide-show">
        <div class="list-img">
            <img src="<?php echo IMG_BASE_URL; ?>/slider/slider1.jpg" alt="">
            <img src="<?php echo IMG_BASE_URL; ?>/slider/slider2.jpg" alt="">
            <img src="<?php echo IMG_BASE_URL; ?>/slider/slider3.jpg" alt="">
            <img src="<?php echo IMG_BASE_URL; ?>/slider/slider4.jpg" alt="">



        </div>
        <div class="btn">
            <div class="left">
                <i class="fa-solid fa-circle-chevron-left"></i>
            </div>
            <div class="right">
                <i class="fa-solid fa-circle-chevron-right"></i>
            </div>
        </div>
    </div>




    <div class="category">
        <div class="category_title">

            <b>Nổi bật</b><br>
            <a href="..//sanpham/index.html">Danh mục nổi bật</a>
        </div>
        <div class="category_body">
            <button class="category_prev_btn">❮</button>
            <div class="category_wrapper">
                <ul class="category_list">
                    <?php if (!empty($categories)): ?>
                        <?php foreach ($categories as $categoryItem): ?>
                            <li class="category_item">
                                <a href="<?php echo BASE_URL; ?>index.php?route=detailCategories&category_id=<?php echo $categoryItem['id']; ?>">
                                    <p>
                                        <?php echo $categoryItem['name']; ?>
                                        <br>
                                        (<?php echo $categoryItem['product_count']; ?> món ăn)
                                    </p>
                                    <img src="<?php echo IMG_BASE_URL . '/' . $categoryItem['image_url']; ?>" alt="Category Image">
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No categories available at the moment.</p>
                    <?php endif; ?>

                </ul>

            </div>
            <button class="category_next_btn">❯</button>
        </div>

    </div>


    <div class="about">
        <div class="container">

            <div class="space_left">
                <img src="<?php echo IMG_BASE_URL; ?>about/about1.webp" alt="">
            </div>

            <div class="space_right">
                <span class="title_small">Về Chúng Tôi</span><br>

                <span class="title">Mega Food</span><br>

                <span class="content">Chào mừng bạn đến với Mega Food! Đây là nơi tuyệt vời để thưởng thức những món
                    ăn
                    ngon miệng và đa dạng. Dù bạn đang tìm kiếm bữa ăn nhanh hay một món ăn đặc sắc, chúng tôi có
                    tất cả
                    cho bạn. Hãy khám phá thực đơn của chúng tôi và tận hưởng những trải nghiệm ẩm thực tuyệt
                    vời!</span>

                <ul class="about_img">
                    <li class="about_list">
                        <a href="<?php echo BASE_URL; ?>index.php?route=products"><img
                                src="<?php echo IMG_BASE_URL; ?>about/about2.webp"
                                alt=""></a>

                    </li>
                    <li class="about_list">
                        <a href="<?php echo BASE_URL; ?>index.php?route=products"><img
                                src="<?php echo IMG_BASE_URL; ?>about/about3.webp"
                                alt=""></a>

                    </li>
                    <li class="about_list">
                        <a href="<?php echo BASE_URL; ?>index.php?route=products"><img
                                src="<?php echo IMG_BASE_URL; ?>about/about4.webp"
                                alt=""></a>

                    </li>
                    <li class="about_list">
                        <a href="<?php echo BASE_URL; ?>index.php?route=products"><img
                                src="<?php echo IMG_BASE_URL; ?>about/about5.webp"
                                alt=""></a>

                    </li>
                </ul>
            </div>
        </div>


        <div class="product_about">
            <span class="title2">Món ăn nổi bật 1</span>
            <div class="product">
                <ul class="product_action">

                    <?php if (!empty($products)): ?>
                        <?php foreach ($featuredProducts as $product): ?>
                            <li>
                                <div class="product_category">
                                    <div class="product_category_thumbnail">
                                        <i class="fa-regular fa-heart add_to_favorites"></i>
                                        <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $product['id']; ?>">
                                            <img src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" />
                                        </a>
                                    </div>

                                    <div class="product_category_info">
                                        <h3 class="product_category_name"><?= htmlspecialchars($product['name']); ?></h3>
                                        <span class="product_category_content">
                                            <?= htmlspecialchars($product['description']); ?>
                                        </span>
                                        <a href="products?id=<?= $product['id']; ?>">Xem thêm</a>
                                    </div>

                                    <div class="product_category_form">
                                        <div class="product_category_priceBox">
                                            <span>Giá chỉ từ</span>
                                            <p><?= number_format($product['price'], 0, ',', '.'); ?> VND</p>
                                        </div>
                                        <a href="<?= BASE_URL; ?>index.php?route=cart&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&image_url=<?= urlencode($product['image_url']); ?>&price=<?= $product['price']; ?>&quantity=1">Thêm</a>
                                    </div>
                                </div>
                            </li>
                        <?php
                        endforeach;
                        ?>
                    <?php else: ?>
                        <p>Không có sản phẩm nào trong danh mục này.</p>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>


    <div class="programme">
        <div class="programme_title">

            <b>Chương trình</b><br>
            <a href="#">Các chương trình nổi bật</a>
        </div>
        <ul>
            <li>
                <a href="">
                    <img src="<?php echo IMG_BASE_URL; ?>/programme/programme1.webp"
                        alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?php echo IMG_BASE_URL; ?>/programme/programm2.webp"
                        alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?php echo IMG_BASE_URL; ?>/programme/programme3.webp"
                        alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?php echo IMG_BASE_URL; ?>/programme/programme4.webp"
                        alt="">
                </a>
            </li>
        </ul>
    </div>


    <div class="flashSale">
        <div class="flashSale_box">
            <div class="flashSale_thumbnail">
                <div class="flashSale_right">
                    <span class="flashSale_titleSmall">
                        Món ăn
                    </span><br>

                    <span class="flashSale_title">
                        Đang được giảm giá
                    </span><br><br><br>

                    <span class="flashSale_content">
                        Hãy nhanh tay chọn ngay Pizza Chay, đang giảm 30%. Vị đậm đà từ phô mai mozzarella hòa quyện
                        cùng
                        lớp sốt cà chua tươi ngon, kết hợp với ớt chuông giòn ngọt, nấm thơm lừng và ô liu đậm vị,
                        khiến
                        bạn
                        không thể cưỡng lại. Chỉ áp dụng trong hôm nay thôi, đừng bỏ lỡ!
                    </span>
                </div>

                <div class="flashSale_left">
                    <a href="">
                        <img src="<?php echo IMG_BASE_URL; ?>/flash_sale/flash_sale1.webp"
                            alt="">
                    </a>
                </div>
            </div>

            <div class="product_fs">
                <ul>
                    <li>
                        <div class="product_thumbnail_fs">
                            <i class="fa-regular fa-heart add_to_favorites"></i>
                            <a href="../product_details/detail.html">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                    alt="">
                            </a>
                        </div>


                        <div class="product_info_fs">
                            <a class="productFs_name_link" href="">
                                <h3 class="productFs_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                            </a>

                            <span class="productFs_content">
                                Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                                theo công...
                            </span>
                            <a class="see_more" href="">Xem thêm</a>

                        </div>

                        <div class="product_form_fs">
                            <div class="priceFs_box">
                                <span>Giá chỉ từ</span>
                                <p>99.000đ</p>
                            </div>
                            <a href="">Thêm</a>
                        </div>
                    </li>
                    <li>
                        <div class="product_thumbnail_fs">
                            <i class="fa-regular fa-heart add_to_favorites"></i>
                            <a href="../product_details/detail.html">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                    alt="">
                            </a>
                        </div>


                        <div class="product_info_fs">
                            <a class="productFs_name_link" href="">
                                <h3 class="productFs_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                            </a>

                            <span class="productFs_content">
                                Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                                theo công...
                            </span>
                            <a class="see_more" href="">Xem thêm</a>

                        </div>

                        <div class="product_form_fs">
                            <div class="priceFs_box">
                                <span>Giá chỉ từ</span>
                                <p>99.000đ</p>
                            </div>
                            <a href="">Thêm</a>
                        </div>
                    </li>
                    <li>
                        <div class="product_thumbnail_fs">
                            <i class="fa-regular fa-heart add_to_favorites"></i>
                            <a href="../product_details/detail.html">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                    alt="">
                            </a>
                        </div>


                        <div class="product_info_fs">
                            <a class="productFs_name_link" href="">
                                <h3 class="productFs_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                            </a>

                            <span class="productFs_content">
                                Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                                theo công...
                            </span>
                            <a class="see_more" href="">Xem thêm</a>

                        </div>

                        <div class="product_form_fs">
                            <div class="priceFs_box">
                                <span>Giá chỉ từ</span>
                                <p>99.000đ</p>
                            </div>
                            <a href="">Thêm</a>
                        </div>
                    </li>
                    <li>
                        <div class="product_thumbnail_fs">
                            <i class="fa-regular fa-heart add_to_favorites"></i>
                            <a href="../product_details/detail.html">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                    alt="">
                            </a>
                        </div>


                        <div class="product_info_fs">
                            <a class="productFs_name_link" href="">
                                <h3 class="productFs_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                            </a>

                            <span class="productFs_content">
                                Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                                theo công...
                            </span>
                            <a class="see_more" href="">Xem thêm</a>

                        </div>

                        <div class="product_form_fs">
                            <div class="priceFs_box">
                                <span>Giá chỉ từ</span>
                                <p>99.000đ</p>
                            </div>
                            <a href="">Thêm</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </div>


    <div class="product_topSelling">
        <div class="product_topSelling_title">

            <b>Món ăn</b><br>
            <a href="#">Được bán nhiều nhất</a>
        </div>


        <div class="product_topSelling_wrapper">
            <button class="prev_btn">❮</button>

            <ul class="product_topSelling_list">
                <li class="product_topSelling_li">
                    <div class="product_topSelling_thumbnail">
                        <i class="fa-regular fa-heart add_to_favorites"></i>
                        <a href="">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                alt="">
                        </a>
                    </div>


                    <div class="product_topSelling_info">
                        <h3 class="product_topSelling_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                        <span class="product_topSelling_content">
                            Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                            theo công...
                        </span>
                        <a href="">Xem thêm</a>

                    </div>

                    <div class="product_topSelling_form">
                        <div class="product_topSelling_priceBox">
                            <span>Giá chỉ từ</span>
                            <p>99.000đ</p>
                        </div>
                        <a href="">Thêm</a>
                    </div>
                </li>
                <li class="product_topSelling_li">
                    <div class="product_topSelling_thumbnail">
                        <i class="fa-regular fa-heart add_to_favorites"></i>
                        <a href="">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                alt="">
                        </a>
                    </div>


                    <div class="product_topSelling_info">
                        <h3 class="product_topSelling_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                        <span class="product_topSelling_content">
                            Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                            theo công...
                        </span>
                        <a href="">Xem thêm</a>

                    </div>

                    <div class="product_topSelling_form">
                        <div class="product_topSelling_priceBox">
                            <span>Giá chỉ từ</span>
                            <p>99.000đ</p>
                        </div>
                        <a href="">Thêm</a>
                    </div>
                </li>
                <li class="product_topSelling_li">
                    <div class="product_topSelling_thumbnail">
                        <i class="fa-regular fa-heart add_to_favorites"></i>
                        <a href="">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                alt="">
                        </a>
                    </div>


                    <div class="product_topSelling_info">
                        <h3 class="product_topSelling_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                        <span class="product_topSelling_content">
                            Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                            theo công...
                        </span>
                        <a href="">Xem thêm</a>

                    </div>

                    <div class="product_topSelling_form">
                        <div class="product_topSelling_priceBox">
                            <span>Giá chỉ từ</span>
                            <p>99.000đ</p>
                        </div>
                        <a href="">Thêm</a>
                    </div>
                </li>
                <li class="product_topSelling_li">
                    <div class="product_topSelling_thumbnail">
                        <i class="fa-regular fa-heart add_to_favorites"></i>
                        <a href="">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                alt="">
                        </a>
                    </div>


                    <div class="product_topSelling_info">
                        <h3 class="product_topSelling_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                        <span class="product_topSelling_content">
                            Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                            theo công...
                        </span>
                        <a href="">Xem thêm</a>

                    </div>

                    <div class="product_topSelling_form">
                        <div class="product_topSelling_priceBox">
                            <span>Giá chỉ từ</span>
                            <p>99.000đ</p>
                        </div>
                        <a href="">Thêm</a>
                    </div>
                </li>
                <li class="product_topSelling_li">
                    <div class="product_topSelling_thumbnail">
                        <i class="fa-regular fa-heart add_to_favorites"></i>
                        <a href="">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                alt="">
                        </a>
                    </div>


                    <div class="product_topSelling_info">
                        <h3 class="product_topSelling_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                        <span class="product_topSelling_content">
                            Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                            theo công...
                        </span>
                        <a href="">Xem thêm</a>

                    </div>

                    <div class="product_topSelling_form">
                        <div class="product_topSelling_priceBox">
                            <span>Giá chỉ từ</span>
                            <p>99.000đ</p>
                        </div>
                        <a href="">Thêm</a>
                    </div>
                </li>
                <li class="product_topSelling_li">
                    <div class="product_topSelling_thumbnail">
                        <i class="fa-regular fa-heart add_to_favorites"></i>
                        <a href="">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                alt="">
                        </a>
                    </div>


                    <div class="product_topSelling_info">
                        <h3 class="product_topSelling_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                        <span class="product_topSelling_content">
                            Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                            theo công...
                        </span>
                        <a href="">Xem thêm</a>

                    </div>

                    <div class="product_topSelling_form">
                        <div class="product_topSelling_priceBox">
                            <span>Giá chỉ từ</span>
                            <p>99.000đ</p>
                        </div>
                        <a href="">Thêm</a>
                    </div>
                </li>
                <li class="product_topSelling_li">
                    <div class="product_topSelling_thumbnail">
                        <i class="fa-regular fa-heart add_to_favorites"></i>
                        <a href="">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                alt="">
                        </a>
                    </div>


                    <div class="product_topSelling_info">
                        <h3 class="product_topSelling_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                        <span class="product_topSelling_content">
                            Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                            theo công...
                        </span>
                        <a href="">Xem thêm</a>

                    </div>

                    <div class="product_topSelling_form">
                        <div class="product_topSelling_priceBox">
                            <span>Giá chỉ từ</span>
                            <p>99.000đ</p>
                        </div>
                        <a href="">Thêm</a>
                    </div>
                </li>
                <li class="product_topSelling_li">
                    <div class="product_topSelling_thumbnail">
                        <i class="fa-regular fa-heart add_to_favorites"></i>
                        <a href="">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                alt="">
                        </a>
                    </div>


                    <div class="product_topSelling_info">
                        <h3 class="product_topSelling_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                        <span class="product_topSelling_content">
                            Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                            theo công...
                        </span>
                        <a href="">Xem thêm</a>

                    </div>

                    <div class="product_topSelling_form">
                        <div class="product_topSelling_priceBox">
                            <span>Giá chỉ từ</span>
                            <p>99.000đ</p>
                        </div>
                        <a href="">Thêm</a>
                    </div>
                </li>
                <li class="product_topSelling_li">
                    <div class="product_topSelling_thumbnail">
                        <i class="fa-regular fa-heart add_to_favorites"></i>
                        <a href="">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                alt="">
                        </a>
                    </div>


                    <div class="product_topSelling_info">
                        <h3 class="product_topSelling_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                        <span class="product_topSelling_content">
                            Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                            theo công...
                        </span>
                        <a href="">Xem thêm</a>

                    </div>

                    <div class="product_topSelling_form">
                        <div class="product_topSelling_priceBox">
                            <span>Giá chỉ từ</span>
                            <p>99.000đ</p>
                        </div>
                        <a href="">Thêm</a>
                    </div>
                </li>
                <li class="product_topSelling_li">
                    <div class="product_topSelling_thumbnail">
                        <i class="fa-regular fa-heart add_to_favorites"></i>
                        <a href="">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                alt="">
                        </a>
                    </div>


                    <div class="product_topSelling_info">
                        <h3 class="product_topSelling_name">Gà Giòn Xốt Tương Tỏi Hàn Quốc</h3>
                        <span class="product_topSelling_content">
                            Những miếng gà tươi ngon tẩm bột chiên giòn phủ xốt tương tỏi kiểu Hàn được chế biến
                            theo công...
                        </span>
                        <a href="">Xem thêm</a>

                    </div>

                    <div class="product_topSelling_form">
                        <div class="product_topSelling_priceBox">
                            <span>Giá chỉ từ</span>
                            <p>99.000đ</p>
                        </div>
                        <a href="">Thêm</a>
                    </div>
                </li>


            </ul>

            <button class="next_btn">❯</button>

        </div>




    </div>


    <div class="banner">
        <ul class="banner_thumbnail">
            <li>
                <a href="">
                    <img class="background_img"
                        src="<?php echo IMG_BASE_URL; ?>/banner/banner1.webp"
                        alt="">
                    <img class="overlay_img"
                        src="<?php echo IMG_BASE_URL; ?>/banner/banner_overlay1.webp"
                        alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img class="background_img"
                        src="<?php echo IMG_BASE_URL; ?>/banner/banner2.webp"
                        alt="">
                    <img class="overlay_img"
                        src="<?php echo IMG_BASE_URL; ?>/banner/banner_overlay2.webp"
                        alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img class="background_img"
                        src="<?php echo IMG_BASE_URL; ?>/banner/banner3.webp"
                        alt="">
                    <img class="overlay_img"
                        src="<?php echo IMG_BASE_URL; ?>/banner/banner_overlay3.webp"
                        alt="">
                </a>
            </li>

        </ul>
    </div>


    <div class="product_all">
        <div class="product_all_title">

            <b>Tất cả</b><br>
            <a href="#">Menu dành cho bạn</a>
        </div>

        <ul class="menu_all">
            <li class="menu_item">
                <a href="#pizza">Pizza</a>
            </li>
            <li class="menu_item">

                <a href="#khai-vi">Khai vị</a>
            </li>
            <li class="menu_item">
                <a href="#my-y">Mỳ Ý</a>
            </li>
            <li class="menu_item">
                <a href="#salad">Salad</a>
            </li>
            <li class="menu_item">
                <a href="#thuc-uong">Thức uống</a>
            </li>
        </ul>


        <!-- Pizza -->
        <section id="pizza" class="product_main">

            <div class="title_module">
                <a href="">Pizza</a>
            </div>

            <ul class="product_action">

                <?php if (!empty($products)): ?>
                    <?php
                    $count = 0;
                    foreach ($products as $product):
                        if ($product['id_categories'] == 1):
                            $count++;
                            if ($count > 4) break;
                    ?>
                            <li>
                                <div class="product_category">
                                    <div class="product_category_thumbnail">
                                        <i class="fa-regular fa-heart add_to_favorites"></i>
                                        <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $product['id']; ?>">
                                            <img src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" />
                                        </a>
                                    </div>

                                    <div class="product_category_info">
                                        <h3 class="product_category_name"><?= htmlspecialchars($product['name']); ?></h3>
                                        <span class="product_category_content">
                                            <?= htmlspecialchars($product['description']); ?>
                                        </span>
                                        <a href="products?id=<?= $product['id']; ?>">Xem thêm</a>
                                    </div>

                                    <div class="product_category_form">
                                        <div class="product_category_priceBox">
                                            <span>Giá chỉ từ</span>
                                            <p><?= number_format($product['price'], 0, ',', '.'); ?> VND</p>
                                        </div>
                                        <a href="<?= BASE_URL; ?>index.php?route=cart&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&price=<?= $product['price']; ?>&quantity=1">Thêm</a>
                                    </div>
                                </div>
                            </li>
                    <?php
                        endif;
                    endforeach;
                    ?>
                <?php else: ?>
                    <p>Không có sản phẩm nào trong danh mục này.</p>
                <?php endif; ?>

            </ul>
            <div class="see_more">
                <a href="<?php echo BASE_URL; ?>index.php?route=products">Xem chi tiết <i class="bi bi-chevron-double-right"></i></a>
            </div>

        </section>
        <!-- Khai vị -->
        <section id="khai-vi" class="product_main">

            <div class="title_module">
                <a href="">Khai vị</a>
            </div>


            <ul class="product_action">
                <?php if (!empty($products)): ?>
                    <?php
                    $count = 0;
                    foreach ($products as $product):
                        if ($product['id_categories'] == 2):
                            $count++;
                            if ($count > 4) break;
                    ?>
                            <li>
                                <div class="product_category">
                                    <div class="product_category_thumbnail">
                                        <i class="fa-regular fa-heart add_to_favorites"></i>
                                        <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $product['id']; ?>">
                                            <img src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" />
                                        </a>
                                    </div>

                                    <div class="product_category_info">
                                        <h3 class="product_category_name"><?= htmlspecialchars($product['name']); ?></h3>
                                        <span class="product_category_content">
                                            <?= htmlspecialchars($product['description']); ?>
                                        </span>
                                        <a href="products?id=<?= $product['id']; ?>">Xem thêm</a>
                                    </div>

                                    <div class="product_category_form">
                                        <div class="product_category_priceBox">
                                            <span>Giá chỉ từ</span>
                                            <p><?= number_format($product['price'], 0, ',', '.'); ?> VND</p>
                                        </div>
                                        <a href="<?= BASE_URL; ?>index.php?route=cart&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&price=<?= $product['price']; ?>&quantity=1">Thêm</a>
                                    </div>
                                </div>
                            </li>
                    <?php
                        endif;
                    endforeach;
                    ?>
                <?php else: ?>
                    <p>Không có sản phẩm nào trong danh mục này.</p>
                <?php endif; ?>

            </ul>



            <div class="see_more">
                <a href="">Xem chi tiết <i class="bi bi-chevron-double-right"></i></a>
            </div>

        </section>
        <!-- Mỳ ý -->
        <section id="my-y" class="product_main">

            <div class="title_module">
                <a href="">Mỳ Ý</a>
            </div>

            <ul class="product_action">
                <?php if (!empty($products)): ?>
                    <?php
                    $count = 0;
                    foreach ($products as $product):
                        if ($product['id_categories'] == 3):
                            $count++;
                            if ($count > 4) break;
                    ?>
                            <li>
                                <div class="product_category">
                                    <div class="product_category_thumbnail">
                                        <i class="fa-regular fa-heart add_to_favorites"></i>
                                        <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $product['id']; ?>">
                                            <img src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" />
                                        </a>
                                    </div>

                                    <div class="product_category_info">
                                        <h3 class="product_category_name"><?= htmlspecialchars($product['name']); ?></h3>
                                        <span class="product_category_content">
                                            <?= htmlspecialchars($product['description']); ?>
                                        </span>
                                        <a href="products?id=<?= $product['id']; ?>">Xem thêm</a>
                                    </div>

                                    <div class="product_category_form">
                                        <div class="product_category_priceBox">
                                            <span>Giá chỉ từ</span>
                                            <p><?= number_format($product['price'], 0, ',', '.'); ?> VND</p>
                                        </div>
                                        <a href="<?= BASE_URL; ?>index.php?route=cart&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&price=<?= $product['price']; ?>&quantity=1">Thêm</a>
                                    </div>
                                </div>
                            </li>
                    <?php
                        endif;
                    endforeach;
                    ?>
                <?php else: ?>
                    <p>Không có sản phẩm nào trong danh mục này.</p>
                <?php endif; ?>

            </ul>

            <div class="see_more">
                <a href="">Xem chi tiết <i class="bi bi-chevron-double-right"></i></a>
            </div>

        </section>
        <!-- Salad -->
        <section id="salad" class="product_main">

            <div class="title_module">
                <a href="">Salad</a>
            </div>

            <ul class="product_action">
                <?php if (!empty($products)): ?>
                    <?php
                    $count = 0;
                    foreach ($products as $product):
                        if ($product['id_categories'] == 4):
                            $count++;
                            if ($count > 4) break;
                    ?>
                            <li>
                                <div class="product_category">
                                    <div class="product_category_thumbnail">
                                        <i class="fa-regular fa-heart add_to_favorites"></i>
                                        <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $product['id']; ?>">
                                            <img src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" />
                                        </a>
                                    </div>

                                    <div class="product_category_info">
                                        <h3 class="product_category_name"><?= htmlspecialchars($product['name']); ?></h3>
                                        <span class="product_category_content">
                                            <?= htmlspecialchars($product['description']); ?>
                                        </span>
                                        <a href="products?id=<?= $product['id']; ?>">Xem thêm</a>
                                    </div>

                                    <div class="product_category_form">
                                        <div class="product_category_priceBox">
                                            <span>Giá chỉ từ</span>
                                            <p><?= number_format($product['price'], 0, ',', '.'); ?> VND</p>
                                        </div>
                                        <a href="<?= BASE_URL; ?>index.php?route=cart&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&price=<?= $product['price']; ?>&quantity=1">Thêm</a>
                                    </div>
                                </div>
                            </li>
                    <?php
                        endif;
                    endforeach;
                    ?>
                <?php else: ?>
                    <p>Không có sản phẩm nào trong danh mục này.</p>
                <?php endif; ?>
            </ul>



            <div class="see_more">
                <a href="">Xem chi tiết <i class="bi bi-chevron-double-right"></i></a>
            </div>

        </section>

        <!-- Thức uống -->
        <section id="thucuong" class="product_main">

            <div class="title_module">
                <a href="">Thức uống</a>
            </div>

            <ul class="product_action">
                <?php if (!empty($products)): ?>
                    <?php
                    $count = 0;
                    foreach ($products as $product):
                        if ($product['id_categories'] == 5):
                            $count++;
                            if ($count > 4) break;
                    ?>
                            <li>
                                <div class="product_category">
                                    <div class="product_category_thumbnail">
                                        <i class="fa-regular fa-heart add_to_favorites"></i>
                                        <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $product['id']; ?>">
                                            <img src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" />
                                        </a>
                                    </div>

                                    <div class="product_category_info">
                                        <h3 class="product_category_name"><?= htmlspecialchars($product['name']); ?></h3>
                                        <span class="product_category_content">
                                            <?= htmlspecialchars($product['description']); ?>
                                        </span>
                                        <a href="products?id=<?= $product['id']; ?>">Xem thêm</a>
                                    </div>

                                    <div class="product_category_form">
                                        <div class="product_category_priceBox">
                                            <span>Giá chỉ từ</span>
                                            <p><?= number_format($product['price'], 0, ',', '.'); ?> VND</p>
                                        </div>
                                        <a href="<?= BASE_URL; ?>index.php?route=cart&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&price=<?= $product['price']; ?>&quantity=1">Thêm</a>
                                    </div>
                                </div>
                            </li>
                    <?php
                        endif;
                    endforeach;
                    ?>
                <?php else: ?>
                    <p>Không có sản phẩm nào trong danh mục này.</p>
                <?php endif; ?>
            </ul>



            <div class="see_more">
                <a href="">Xem chi tiết <i class="bi bi-chevron-double-right"></i></a>
            </div>

        </section>
    </div>

    <div class="news">
        <div class="news_title">
            <b>Tin tức</b><br>
            <a href="#">Tin tức mới nhất</a>
        </div>

        <ul class="news_thumbnail">
            <?php if (!empty($news)): ?>
                <?php foreach ($news as $newsItem): ?>
                    <a href="../news/news.php?id=<?php echo $newsItem['id']; ?>"> <!-- Assuming dynamic link based on news id -->
                        <li>
                            <div class="block_thumb">
                                <img src="<?php echo IMG_BASE_URL . '/' . $newsItem['img_url']; ?>" alt="News Image">
                            </div>
                            <div class="block_content">
                                <h3><?php echo htmlspecialchars($newsItem['name']); ?></h3>
                                <p><?php echo htmlspecialchars($newsItem['created_at']); ?></p>
                                <span><?php echo htmlspecialchars($newsItem['description']); ?></span>
                            </div>
                        </li>
                    </a>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No news available at the moment.</p>
            <?php endif; ?>

        </ul>
    </div>

    <div class="statistical">
        <div class="statistical_right">
            <h2 class="statistical_title">Khách hàng nói gì về chúng tôi</h2>
            <span>Chúng tôi cung cấp cho bạn cách chuẩn bị bữa ăn hoàn chỉnh, bao gồm các nguyên liệu cần thiết được
                đóng gói sẵn cho một bữa tối thần thánh cũng như hướng dẫn công thức nấu ăn dễ làm theo một cách đẹp
                mắt.</span>
            <div class="num">
                <ul>
                    <li>
                        <h1>12+</h1>
                        <span>Cửa hàng</span>
                    </li>
                    <li>
                        <h1>200+</h1>
                        <span>Nhân viên</span>
                    </li>
                    <li>
                        <h1>5000+</h1>
                        <span>Khách hàng</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="statistical_left">
            <div class="statistical_thumbnail">
                <div class="user_info">
                    <div class="avatar">
                        <img src="<?php echo IMG_BASE_URL; ?>/avatar/avatar1.webp"
                            alt="">
                    </div>
                    <div class="info">

                        <b class="user_name">Hoàng Dung</b>
                        <p class="job">Nhân viên văn phòng</p>
                    </div>
                </div>
                <div class="feedBack">

                    <span>Các món ăn ở Dola Food đều rất ngon. Con tôi cũng rất thích, mỗi tuần đều dẫn con
                        tôi đến đây ăn. Không những ngon mà không gian còn rất thoải mái.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="why">
        <div class="why_title">

            <b>Lý do</b><br>
            <a href="#">Tại sao chọn Mega Food</a>
        </div>

        <ul class="why_content">
            <li>
                <div class="icon_why">
                    <img src="<?php echo IMG_BASE_URL; ?>/icon/icon1.webp" alt="">
                </div>
                <h3>Chất lượng món ăn hàng đầu</h3>
            </li>
            <li>
                <div class="icon_why">
                    <img src="<?php echo IMG_BASE_URL; ?>/icon/icon2.webp" alt="">
                </div>
                <h3>Dịch vụ chăm sóc khách hàng xuất xắc</h3>
            </li>
            <li>
                <div class="icon_why">
                    <img src="<?php echo IMG_BASE_URL; ?>/icon/icon3.webp" alt="">
                </div>
                <h3>Menu đa dạng phong phú</h3>
            </li>
            <li>
                <div class="icon_why">
                    <img src="<?php echo IMG_BASE_URL; ?>/icon/icon4.webp" alt="">
                </div>
                <h3>Chất lượng nguyên liệu cao cấp</h3>
            </li>
            <li>
                <div class="icon_why">
                    <img src="<?php echo IMG_BASE_URL; ?>/icon/icon5.webp" alt="">
                </div>
                <h3>Ưu đãi và khuyến mãi hấp dẫn</h3>
            </li>
        </ul>
    </div>
</div>

<section class="mailchimp">
    <div class="mailchip_thumb">
        <div class="img_left">
            <img src="<?php echo IMG_BASE_URL; ?>/mailchimp/mailchimp1.webp" alt="">
        </div>
        <div class="content_center">

            <h1>Đăng ký nhận tin</h1>
            <span>Nhập email của bạn và nhận nhiều chương trình ưu đãi hấp dẫn từ cửa hàng!</span>
            <form action="">
                <input type="email" placeholder="Nhập Email nhận tin khuyến mãi">
                <button type="button">ĐĂNG KÝ</button>
            </form>
        </div>
        <div class="img_right">
            <img src="<?php echo IMG_BASE_URL; ?>/mailchimp/mailchimp2.webp" alt="">
        </div>
    </div>
</section>