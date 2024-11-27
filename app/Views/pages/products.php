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
      <b>Nổi bật</b><br />
      <a href="..//sanpham/index.html">Danh mục nổi bật</a>
    </div>

    <ul>
      <li>
        <p>Pizza <br />(17 món ăn)</p>
        <a href=""><img
            style="width: 104px; height: 105px"
            src="https://bizweb.dktcdn.net/100/510/571/collections/0002624-seafood-pesto-300.png?v=1709192852903"
            alt="" /></a>
      </li>
      <li>
        <p>Khai vị <br />(13 món ăn)</p>
        <a href=""><img
            src="https://bizweb.dktcdn.net/100/510/571/collections/0003862-bbq-ribs-platter-300.png?v=1709192861850"
            alt="" /></a>
      </li>
      <li>
        <p>Mỳ Ý <br />(7 món ăn)</p>
        <a href=""><img
            src="https://bizweb.dktcdn.net/100/510/571/collections/0002257-spaghetti-shrimp-rose-30.png?v=1709192871587"
            alt="" /></a>
      </li>
      <li>
        <p>Salad <br />(7 món ăn)</p>
        <a href=""><img
            src="https://bizweb.dktcdn.net/100/510/571/collections/0002250-signature-salad-300.png?v=1709192880573"
            alt="" /></a>
      </li>
    </ul>
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
  <div class="see_detail">
    <a href="../detailCategories/category.html" title="Xem chi tiết">Xem chi tiết
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
              <i class="fa-regular fa-heart add_to_favorites" 
                data-id="<?= htmlspecialchars($product['id']); ?>" 
                data-name="<?= htmlspecialchars($product['name']); ?>" 
                data-image="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>">
                </i>
                <a href="products?id=<?= $product['id']; ?>">
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
                <a href="">Thêm</a>
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
    <a href="../detailCategories/category.html" title="Xem chi tiết">Xem chi tiết
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
                <a href="products?id=<?= $product['id']; ?>">
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
                <a href="">Thêm</a>
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
    <a href="../detailCategories/category.html" title="Xem chi tiết">Xem chi tiết
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
                <a href="products?id=<?= $product['id']; ?>">
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
                <a href="">Thêm</a>
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
    <a href="../detailCategories/category.html" title="Xem chi tiết">Xem chi tiết
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
                <a href="products?id=<?= $product['id']; ?>">
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
                <a href="">Thêm</a>
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
    <a href="../detailCategories/category.html../detailCategories/category.html" title="Xem chi tiết">Xem chi tiết
      <span><i class="bi bi-chevron-double-right"></i></span>
    </a>
  </div>

</div>