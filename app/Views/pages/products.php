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
          <span class="name_prd">Sản phẩm</span>
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
  <!-- Sản phẩm -->
  <!-- Pizza -->
  <div class="product_topSelling">
    <div class="product_topSelling_title">
      <a href="#">Pizza</a>
    </div>

    <ul>
      <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
          <?php if ($product['id_categories'] == 1): ?>
            <li>
              <div class="product_topSelling_thumbnail">
                <i class="fa-regular fa-heart add_to_favorites"
                  data-id="<?= htmlspecialchars($product['id']); ?>"
                  >
                </i>
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
                <a href="<?= BASE_URL; ?>index.php?route=cart&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&image_url=<?= urlencode($product['image_url']); ?>&price=<?= $product['price']; ?>&quantity=1" 
                  class="add_to_cart"
                  data-id="<?= htmlspecialchars($product['id']); ?>"
                  data-name="<?= htmlspecialchars($product['name']); ?>"
                  data-image="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>"
                  data-price="<?= htmlspecialchars($product['price']); ?>">
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
  <div class="see_detail">
    <a href="<?php echo BASE_URL; ?>index.php?route=detailCategories&category_id=1" title="Xem chi tiết">
      Xem chi tiết
      <span><i class="bi bi-chevron-double-right"></i></span>
    </a>
  </div>





  <!-- Khai vị -->
  <div class="product_topSelling">
    <div class="product_topSelling_title">
      <a href="#">Khai vị</a>
    </div>

    <ul>
      <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
          <?php if ($product['id_categories'] == 2): ?>
            <li>
              <div class="product_topSelling_thumbnail">
                <!-- Add to favorites link -->
                <a href="<?= BASE_URL; ?>index.php?route=favorites&action=add&id=<?= $product['id']; ?>&name=<?= urlencode($product['name']); ?>&image_url=<?= urlencode($product['image_url']); ?>&price=<?= $product['price']; ?>&description=<?= urlencode($product['description']); ?>">
                  <i class="fa-regular fa-heart add_to_favorites"></i>
                </a>




                <!-- Product image -->
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
  <div class="see_detail">
    <a href="<?php echo BASE_URL; ?>index.php?route=detailCategories&category_id=2" title="Xem chi tiết">
      Xem chi tiết
      <span><i class="bi bi-chevron-double-right"></i></span>
    </a>
  </div>

  <!-- Mỳ ý -->
  <div class="product_topSelling">
    <div class="product_topSelling_title">
      <a href="#">Mỳ ý</a>
    </div>

    <ul>
      <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
          <?php if ($product['id_categories'] == 3): ?>
            <li>
              <div class="product_topSelling_thumbnail">
                <i class="fa-regular fa-heart add_to_favorites"
                  data-id="<?= htmlspecialchars($product['id']); ?>"
                  data-name="<?= htmlspecialchars($product['name']); ?>"
                  data-image="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>">
                </i>
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
  <div class="see_detail">
    <a href="<?php echo BASE_URL; ?>index.php?route=detailCategories&category_id=3" title="Xem chi tiết">Xem chi tiết
      <span><i class="bi bi-chevron-double-right"></i></span>
    </a>
  </div>

  <!-- Salad -->
  <div class="product_topSelling">
    <div class="product_topSelling_title">
      <a href="#">Salad</a>
    </div>

    <ul>
      <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
          <?php if ($product['id_categories'] == 4): ?>
            <li>
              <div class="product_topSelling_thumbnail">
                <i class="fa-regular fa-heart add_to_favorites"
                  data-id="<?= htmlspecialchars($product['id']); ?>"
                  data-name="<?= htmlspecialchars($product['name']); ?>"
                  data-image="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>">
                </i>
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
  <div class="see_detail">
    <a href="<?php echo BASE_URL; ?>index.php?route=detailCategories&category_id=4" title="Xem chi tiết">Xem chi tiết
      <span><i class="bi bi-chevron-double-right"></i></span>
    </a>
  </div>

  <!-- Thức uống -->
  <div class="product_topSelling">
    <div class="product_topSelling_title">
      <a href="#">Thức uống</a>
    </div>

    <ul>
      <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
          <?php if ($product['id_categories'] == 5): ?>
            <li>
              <div class="product_topSelling_thumbnail">
                <i class="fa-regular fa-heart add_to_favorites"
                  data-id="<?= htmlspecialchars($product['id']); ?>"
                  data-name="<?= htmlspecialchars($product['name']); ?>"
                  data-image="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>">
                </i>
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
  <div class="see_detail">
    <a href="<?php echo BASE_URL; ?>index.php?route=detailCategories&category_id=5" title="Xem chi tiết">Xem chi tiết
      <span><i class="bi bi-chevron-double-right"></i></span>
    </a>
  </div>

</div>