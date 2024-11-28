<div class="body_wrap">
      <!-- Bread crumb -->
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
              <span class="name_prd">Salad</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- Danh mục -->
      <div class="category">
        <div class="category_title">

            <b>Nổi bật</b><br>
            <a href="..//sanpham/index.html">Danh mục nổi bật</a>
        </div>

        <ul class="category_list">
            <li class="category_item">
                <a href="<?php echo BASE_URL; ?>index.php?route=detailCategories">
                    <p>Pizza <br>(17 món ăn) </p>
                    <img style="width: 104px; height: 105px;"
                        src="<?php echo IMG_BASE_URL; ?>category/category1.webp"
                        alt="">
                </a>

            </li>
            <li class="category_item">
                <a href="<?php echo BASE_URL; ?>index.php?route=detailCategories">
                    <p>Khai vị <br>(13 món ăn) </p>
                    <img src="<?php echo IMG_BASE_URL; ?>category/category2.webp"
                        alt="">
                </a>

            </li>
            <li class="category_item">
                <a href="<?php echo BASE_URL; ?>index.php?route=detailCategories">
                    <p>Mỳ Ý <br>(7 món ăn) </p>
                    <img src="<?php echo IMG_BASE_URL; ?>category/category3.webp"
                        alt="">
                </a>
            </li>
            <li class="category_item">
                <a href="<?php echo BASE_URL; ?>index.php?route=detailCategories">
                    <p>Salad <br>(7 món ăn) </p>
                    <img src="<?php echo IMG_BASE_URL; ?>category/category4.webp"
                        alt="">
                </a>

            </li>
        </ul>
    </div>

      <div class="container_category_detail">
        <h1 class="title_page_category"><span>Salad</span></h1>
        <div class="row_category_detail">
            <aside class="sidebar">
                <div class="sidebar_content">
                    <div class="title_sidebar">Danh mục sản phẩm</div>
                    <nav class="nav_category">
                        <ul class="navbars_pills">
                            <li class="nav_item_category"><a href="<?php echo BASE_URL; ?>index.php?route=home" class="mn">Trang chủ</a></li>
                            <li class="nav_item_category"><a href="<?php echo BASE_URL; ?>index.php?route=about" class="mn">Giới thiệu</a></li>
                            <li class="nav_item_category"><div class="nav_item_category_header ">
                                <a href="<?php echo BASE_URL; ?>index.php?route=products" class="mn">Sản phẩm</a>
                                <i class="bi bi-plus-lg toggle-menu"></i>
                            </div>
                                <ul class="menu_down">
                                    <li class="nav_item_product"><a href="<?php echo BASE_URL; ?>index.php?route=detailCategories">Pizza</a></li>
                                    <li class="nav_item_product"><a href="<?php echo BASE_URL; ?>index.php?route=detailCategories">Khai vị</a></li>
                                    <li class="nav_item_product"><a href="<?php echo BASE_URL; ?>index.php?route=detailCategories">Mỳ ý</a></li>
                                    <li class="nav_item_product"><a href="<?php echo BASE_URL; ?>index.php?route=detailCategories">Salad</a></li>
                                    <li class="nav_item_product"><a href="<?php echo BASE_URL; ?>index.php?route=detailCategories">Thức uống</a></li>
                                </ul>
                            </li>
                            <li class="nav_item_category"><a href="<?php echo BASE_URL; ?>index.php?route=news" class="mn">Tin tức</a></li>
                            <li class="nav_item_category"><a href="<?php echo BASE_URL; ?>index.php?route=contact" class="mn">Liên hệ</a></li>
                            <li class="nav_item_category"><a href="<?php echo BASE_URL; ?>index.php?route=faq" class="mn">Câu hỏi thường gặp</a></li>
                            <li class="nav_item_category"><a href="" class="mn">Hệ thống cửa hàng</a></li>
                            <li class="nav_item_category"><a href="" class="mn">Đặt bàn</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- filter content-->
                <div class="filter_content">
                    <div class="title_sidebar">Bộ lọc sản phẩm</div>
                        <!-- filter price -->
                        <aside class="filter_price">
                            <div class="title_filter">Chọn mức giá</div>
                                <div class="content_price">
                                    <ul>
                                        <li class="filter_item_price">
                                            <span>
                                                <label for="filter_duoi_100-000d">
                                                    <input type="checkbox" id="filter_duoi_100-000d">
                                                    Dưới 100.000đ
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter_item_price"><span>
                                            <label for="filter_100-000d-200-000d">
                                                <input type="checkbox" id="filter_100-000d-200-000d">
                                                Từ 100.000đ - 200.000đ
                                            </label>
                                        </span></li>
                                        <li class="filter_item_price"><span>
                                            <label for="filter_200-000d-300-000d">
                                                <input type="checkbox" id="filter_200-000d-300-000d">
                                                Từ 200.000đ - 300.000đ
                                            </label>
                                        </span></li>
                                        <li class="filter_item_price"><span>
                                            <label for="filter_300-000d-500-000d">
                                                <input type="checkbox" id="filter_300-000d-500-000d">
                                                Từ 300.000đ - 500.000đ
                                            </label>
                                        </span></li>
                                        <li class="filter_item_price"><span>
                                            <label for="filter_500-000d-1-000-000d">
                                                <input type="checkbox" id="filter_500-000d-1-000-000d">
                                                Từ 500.000đ - 1 triệu
                                            </label>
                                        </span></li>
                                        <li class="filter_item_price"><span>
                                            <label for="filter_tren-1-000-000d">
                                                <input type="checkbox" id="filter_tren-1-000-000d">
                                                Trên 1 triệu
                                            </label>
                                        </span></li>
                                    </ul>
                            </div>
                        </aside>

                        
                         

                </div>
                
            </aside>
            <!-- category -->
            <div class="block_collection">
                <div class="category-products">
                    <div class="sort_cate">
                        <div class="sort_cate_left">
                            <h3><i class="fa-solid fa-arrow-down-a-z"></i> Xếp theo: </h3>
                            <ul>    
                                <li class="btn_quick_sort"><a href="">Mặc định</a></li>
                                <li class="btn_quick_sort"><a href="">Tên A-Z</a></li>
                                <li class="btn_quick_sort"><a href="">Tên Z-A</a></li>
                                <li class="btn_quick_sort"><a href="">Giá thấp đến cao</a></li>
                                <li class="btn_quick_sort"><a href="">Giá cao đến thấp</a></li>
                            </ul>
                        </div>
                    </div>

                    <section class="products_view">
                        <div class="row_product">
                            <ul>
                            <?php if (!empty($products)): ?>
                              <?php foreach ($products as $product): ?>
                                <?php if ($product['id_categories'] == 1): ?>
                                <li>
                                    <div class="product_topSelling_thumbnail">
                                      <i class="fa-regular fa-heart add_to_favorites" 
                                      data-id="<?= htmlspecialchars($product['id']); ?>" 
                                      data-name="<?= htmlspecialchars($product['name']); ?>" 
                                      data-image="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>">
                                      </i>
                                      <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $product['id']; ?>">
                                        <img
                                          src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>"
                                        />
                                      </a>
                                    </div>
                        
                                    <div class="product_topSelling_info">
                                      <h3 class="product_topSelling_name">
                                      <?= htmlspecialchars($product['name']); ?>
                                      </h3>
                                      <span class="product_topSelling_content">
                                      <?= htmlspecialchars($product['description']); ?>
                                      </span>
                                      <a href="products?id=<?= $product['id']; ?>">Xem thêm</a>
                                    </div>
                        
                                    <div class="product_topSelling_form">
                                      <div class="product_topSelling_priceBox">
                                        <span>Giá chỉ từ</span>
                                        <p><?= number_format($product['price'], 0, ',', '.'); ?> VND</p>
                                      </div>
                                      <a href="javascript:void(0)" class="add_to_cart" 
                                      data-id="<?= htmlspecialchars($product['id']); ?>" 
                                      data-name="<?= htmlspecialchars($product['name']); ?>" 
                                      data-image="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>"
                                      data-price="<?= number_format($product['price'], 0, ',', '.'); ?>">
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
            </div>
        </div>
      </div>
    </div>