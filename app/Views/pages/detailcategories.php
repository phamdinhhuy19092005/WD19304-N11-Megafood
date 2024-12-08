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

  <div class="container_category_detail">
    <?php foreach ($categories as $categoryItem): ?>
      <?php if ($categoryItem['id'] == $_GET['category_id']): ?>
        <h1 class="title_page_category"><span><?php echo $categoryItem['name']; ?></span></h1>
      <?php endif; ?>
    <?php endforeach; ?>

    <div class="row_category_detail">
      <aside class="sidebar">
        <div class="sidebar_content">
          <div class="title_sidebar">Danh mục sản phẩm</div>
          <nav class="nav_category">
            <ul class="navbars_pills">
              <li class="nav_item_category"><a href="<?php echo BASE_URL; ?>index.php?route=home" class="mn">Trang chủ</a></li>
              <li class="nav_item_category"><a href="<?php echo BASE_URL; ?>index.php?route=about" class="mn">Giới thiệu</a></li>
              <li class="nav_item_category">
                <div class="nav_item_category_header ">
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
                  <label><input type="checkbox" id="filter_duoi_100-000d"> Dưới 100.000đ</label>
                </li>
                <li class="filter_item_price">
                  <label><input type="checkbox" id="filter_100-000d-200-000d"> Từ 100.000đ - 200.000đ</label>
                </li>
                <li class="filter_item_price">
                  <label><input type="checkbox" id="filter_200-000d-300-000d"> Từ 200.000đ - 300.000đ</label>
                </li>
                <li class="filter_item_price">
                  <label><input type="checkbox" id="filter_300-000d-500-000d"> Từ 300.000đ - 500.000đ</label>
                </li>
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
                <li class="btn_quick_sort" data-sort="default"><a href="javascript:void(0)">Mặc định</a></li>
                <li class="btn_quick_sort" data-sort="az"><a href="javascript:void(0)">Tên A-Z</a></li>
                <li class="btn_quick_sort" data-sort="za"><a href="javascript:void(0)">Tên Z-A</a></li>
                <li class="btn_quick_sort" data-sort="price-asc"><a href="">Giá thấp đến cao</a></li>
                <li class="btn_quick_sort" data-sort="price-desc"><a href="">Giá cao đến thấp</a></li>
              </ul>
            </div>
          </div>

          <section class="products_view">
            <div class="row_product">
              <ul id="product_List">
                <?php if (!empty($products)): ?>
                  <?php foreach ($products as $product): ?>
                    <?php if ($product['id_categories'] == $_GET['category_id']): ?>
                      <li data-name="<?= htmlspecialchars($product['name']); ?>" data-price="<?= htmlspecialchars($product['price']); ?>">
                        <div class="product_topSelling_thumbnail">
                          <a href="<?= BASE_URL; ?>index.php?route=favorites&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&image_url=<?= urlencode($product['image_url']); ?>&price=<?= $product['price']; ?>&description=<?= urlencode($product['description']); ?>">
                            <i class="fa-regular fa-heart add_to_favorites" title="Thêm vào yêu thích"></i>
                          </a>
                          <!-- Sửa href để link đến trang chi tiết sản phẩm -->
                          <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $product['id']; ?>">
                            <img src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" />
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
                          <a href="<?= BASE_URL; ?>index.php?route=cart&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&image_url=<?= urlencode($product['image_url']); ?>&price=<?= $product['price']; ?>&quantity=1" class="add_to_cart">Thêm</a>
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