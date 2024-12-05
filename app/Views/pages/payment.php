<?php
$styles = [
  'payment' => ['payment.css', 'product-details.css', 'font-quicksand.css'],
];

if (isset($styles[$page])) {
  foreach ($styles[$page] as $style) {
    echo '<link rel="stylesheet" href="' . CSS_PAGES_URL . $style . '?v=' . time() . '">' . PHP_EOL;
  }
}

?>
<div class="body_wrap">
  <form action="">
    <!-- main -->
    <div class="main">
      <header class="main_header">
        <div class="logo">
          <a href="<?php echo BASE_URL; ?>index.php?route=home">
            <img src="<?php echo IMG_BASE_URL; ?>header/logo.png" alt="" />
          </a>
        </div>
      </header>
      <div class="main_content">
        <article class="row_article">
          <div class="col_1">
            <section class="section_pay_1">
              <div class="section_header">
                <div class="container_ss_deader">
                  <h2>Thông tin nhận hàng</h2>
                  <a href="<?php echo BASE_URL; ?>index.php?route=login">
                    <i class="bi bi-person-circle"></i>
                    <span><?php echo isset($_SESSION['first_name']) && isset($_SESSION['last_name']) ? $_SESSION['first_name'] . " " . $_SESSION['last_name'] : 'Đăng Nhập'; ?></span>
                  </a>
                </div>
              </div>
              <div class="section_content">
                <div class="fieldset">
                  <div class="field">
                    <div class="field_input">
                      <input
                        name="email"
                        id="email"
                        type="email"
                        class="field_input_form"
                        data-bind="email"
                        value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>"
                        placeholder="Email" />
                    </div>
                  </div>
                  <div class="field">
                    <div class="field_input">
                      <input
                        name="name"
                        id="name"
                        type="text"
                        class="field_input_form"
                        data-bind="name"
                        value="<?php echo isset($_SESSION['first_name']) ? $_SESSION['first_name'] : ''; ?>"
                        placeholder="Họ và tên" />
                    </div>
                  </div>
                  <div class="field_phone">
                    <div class="field_input">
                      <input
                        name="phone"
                        id="phone"
                        type="tel"
                        class="field_input_form"
                        data-bind="phone"
                        value=""
                        placeholder="Số điện thoại (tùy chọn)" />
                    </div>
                    <div class="field_select_phone">
                      <select name="phone_region" id="phone_region">
                        <option value="US">USA</option>
                        <option value="VN">VIE</option>
                        <option value="THA">THA</option>
                        <option value="FRA">FRA</option>
                      </select>
                    </div>
                  </div>
                  <div class="field">
                    <div class="field_input">
                      <input
                        name="address"
                        id="address"
                        type="text"
                        class="field_input_form"
                        data-bind="address"
                        value=""
                        placeholder="Địa chỉ (tùy chọn)" />
                    </div>
                  </div>

                  <div class="field_address">
                    <div class="field_input_address">
                      <!-- <label for="province" class="field_label">Tỉnh thành</label> -->
                      <select name="province" id="province" class="province">
                        <option value="">Chọn tỉnh thành</option>
                        <option value="AG">An Giang</option>
                        <option value="BV">Bà Rịa - Vũng Tàu</option>
                        <option value="BK">Bắc Kạn</option>
                        <option value="BG">Bắc Giang</option>
                        <option value="BN">Bắc Ninh</option>
                        <option value="BL">Bạc Liêu</option>
                        <option value="BT">Bến Tre</option>
                        <option value="BD">Bình Dương</option>
                        <option value="BĐ">Bình Định</option>
                        <option value="BP">Bình Phước</option>
                        <option value="BTN">Bình Thuận</option>
                        <option value="CM">Cà Mau</option>
                        <option value="CB">Cao Bằng</option>
                        <option value="CT">Cần Thơ</option>
                        <option value="ĐT">Đà Nẵng</option>
                        <option value="DD">Đắk Lắk</option>
                        <option value="ĐN">Đắk Nông</option>
                        <option value="DB">Điện Biên</option>
                        <option value="ĐB">Đồng Nai</option>
                        <option value="ĐT">Đồng Tháp</option>
                        <option value="GL">Gia Lai</option>
                        <option value="HG">Hà Giang</option>
                        <option value="HN">Hà Nội</option>
                        <option value="HT">Hà Tĩnh</option>
                        <option value="HD">Hải Dương</option>
                        <option value="HP">Hải Phòng</option>
                        <option value="HG">Hậu Giang</option>
                        <option value="HB">Hòa Bình</option>
                        <option value="HY">Hưng Yên</option>
                        <option value="KH">Khánh Hòa</option>
                        <option value="KG">Kiên Giang</option>
                        <option value="KT">Kon Tum</option>
                        <option value="LC">Lai Châu</option>
                        <option value="LS">Lạng Sơn</option>
                        <option value="LC">Lào Cai</option>
                        <option value="LD">Lâm Đồng</option>
                        <option value="LA">Long An</option>
                        <option value="ND">Nam Định</option>
                        <option value="NA">Nghệ An</option>
                        <option value="NB">Ninh Bình</option>
                        <option value="NT">Ninh Thuận</option>
                        <option value="PT">Phú Thọ</option>
                        <option value="PY">Phú Yên</option>
                        <option value="QB">Quảng Bình</option>
                        <option value="QNg">Quảng Ngãi</option>
                        <option value="QN">Quảng Nam</option>
                        <option value="QN">Quảng Ninh</option>
                        <option value="QT">Quảng Trị</option>
                        <option value="SG">TP. Hồ Chí Minh</option> <!-- Đã thêm TP. Hồ Chí Minh -->
                        <option value="ST">Sóc Trăng</option>
                        <option value="SL">Sơn La</option>
                        <option value="TH">Thanh Hóa</option>
                        <option value="TH">Thái Bình</option>
                        <option value="TN">Thái Nguyên</option>
                        <option value="TT">Thừa Thiên - Huế</option>
                        <option value="TG">Tiền Giang</option>
                        <option value="TV">Trà Vinh</option>
                        <option value="TQ">Tuyên Quang</option>
                        <option value="VL">Vĩnh Long</option>
                        <option value="VP">Vĩnh Phúc</option>
                        <option value="YB">Yên Bái</option>
                      </select>

                    </div>
                  </div>

                  <div class="field_address">
                    <div class="field_input_address">
                      <input name="district" id="district" type="text" class="field_input_form"  placeholder="Quận huyện (tùy chọn)" value="">
                    </div>

                  </div>
                  <div class="field_address">
                    <div class="field_input_address">
                      <input name="district" id="district" type="text" class="field_input_form" placeholder="Phường xã (tùy chọn)" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="fieldset">
                <div class="field_note">
                  <textarea
                    name="note"
                    id="note"
                    placeholder="Ghi chú(tùy chọn)"></textarea>
                </div>
              </div>
            </section>

          </div>
          <div class="col_2">
            <section class="section_ship">
              <div class="section_ship_header">
                <div class="section_ship_header_title">
                  <h2>Vận chuyển</h2>
                </div>
              </div>
              <div class="section_ship_content">
                <div class="alert_info">
                  <input type="radio" id="delivery" name="delivery" checked>
                  <label for="delivery">Giao hàng tận nơi</label> <span>40.000 VND</span>
                </div>
              </div>
            </section>
            <section class="section_method">
              <div class="section_method_header">
                <div class="section_method_header_title">
                  <h2>Thanh toán</h2>
                </div>
              </div>
              <div class="content_method_box">
                <div class="content_method_box_row">
                  <div class="radio_wrapper">
                    <div class="radio_input">
                      <input type="radio" id="transfer1" />
                      <label for="transfer1" class="radio_label_primary">Chuyển khoản</label>
                    </div>
                    <!-- icon -->
                    <label for="" class="radio_label">
                      <span class="radio_label_accessory">
                        <i class="bi bi-cash"></i>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="content_method_box">
                <div class="content_method_box_row">
                  <div class="radio_wrapper">
                    <div class="radio_input">
                      <input type="radio" id="transfer2" />
                      <label class="radio_label_primary" for="transfer2">Thu hộ (COD)</label>
                    </div>
                    <!-- icon -->
                    <label for="" class="radio_label">
                      <span class="radio_label_accessory">
                        <i class="bi bi-cash"></i>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </article>
      </div>
    </div>
    <!-- aside -->
    <aside class="sidebar_aside">
      <div class="sidebar_header">Đơn hàng (1 sản phẩm)</div>
      <div class="sidebar_content">
        <div class="order_summary">
          <div class="order_summary_section">

            <div class="order_summary_item_1">
              <table class="product_table">
                <tbody>
                  <?php if (!empty($cart)): ?>
                    <?php foreach ($cart as $id => $item): ?>
                      <?php $subtotal = $item['price'] * $item['quantity']; ?>
                      <tr class="product">
                        <td class="product_image">
                          <div class="product_thumbnail_wrapper">
                            <a href="<?php echo BASE_URL . 'index.php?route=product&id=' . $id; ?>">
                              <img src="<?= IMG_BASE_URL . htmlspecialchars($item['image_url']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" />
                            </a>
                          </div>
                          <span class="product_thumbnail_quantity"><?php echo $item['quantity']; ?></span>
                        </td>
                        <th class="product_decription">
                          <a href="<?php echo BASE_URL . 'index.php?route=product&id=' . $id; ?>">
                            <span class="product_decription_name"><?php echo htmlspecialchars($item['name']); ?></span>
                          </a>
                          <span class="product_decription_amount"><?php echo $item['quantity']; ?> miếng</span>
                          <span class="product_decription_note">Ghi chú:</span>
                        </th>
                        <td class="product_price"><?php echo number_format($subtotal, 0, ',', '.') . 'đ'; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="3">Giỏ hàng của bạn đang trống.</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>

              <div class="order_summary_item_3">
                <table class="total_line_table">
                  <tbody class="total_line_table_tbody">
                    <tr class="total_line_subtotal">
                      <th class="total_line_name">Tạm tính</th>
                      <td class="total_line_price"><?php echo number_format($totalPrice, 0, ',', '.') . 'VND'; ?></td>
                    </tr>
                    <tr class="total_line_subtotal">
                      <th class="total_line_name">Phí vận chuyển</th>
                      <td class="total_line_price">40.000 VND</td>
                    </tr>
                  </tbody>
                  <tfoot class="total_line_table_footer">
                    <tr class="total_line_payment">
                      <th class="total_line_name"><span>Tổng cộng</span></th>
                      <td class="total_line_price"><span><?php echo number_format($totalPrice + 40000, 0, ',', '.') . 'VND'; ?></span></td>
                    </tr>
                  </tfoot>
                </table>
              </div>

            </div>

            <div class="order_summary_item_2">
              <div class="voucher_container">
                <div class="fieldset">
                  <div class="fieldset_input_btn">
                    <div class="fieldset_input">
                      <input type="text" placeholder="Nhập mã giảm giá" />
                    </div>
                    <button class="fieldset_btn">
                      <span>Áp dụng</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="order_summary_item_3">
              <table class="total_line_table">
                <tbody class="total_line_table_tbody">
                  <tr class="total_line_subtotal">
                    <th class="total_line_name">Tạm tính</th>
                    <td class="total_line_price"><?php echo number_format($totalPrice, 0, ',', '.') . 'đ'; ?></td>
                  </tr>
                  <tr class="total_line_subtotal">
                    <th class="total_line_name">Phí vận chuyển</th>
                    <td class="total_line_price">40.000</td>
                  </tr>
                </tbody>
                <tfoot class="total_line_table_footer">
                  <tr class="total_line_payment">
                    <th class="total_line_name"><span>Tổng cộng</span></th>
                    <td class="total_line_price"><span><?php echo number_format($totalPrice + 40000, 0, ',', '.') . 'đ'; ?></span></td>
                  </tr>
                </tfoot>
              </table>
            </div>
            <div class="order_summary_item_4">
              <div class="previous_link">
                <a href="<?php echo BASE_URL; ?>index.php?route=cart" class="previous_link_1"><i class="bi bi-chevron-left"></i>Quay về giỏ hàng</a>
              </div>
              <button type="button" class="btn_checkout" id="orderButton"><span>Đặt hàng</span></button>
            </div>


            <div id="successOverlay" class="overlay" style="display: none;">
              <div class="overlay-content">
                <div class="tick-container">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" class="tick">
                    <circle cx="26" cy="26" r="20" fill="none" class="tick-circle" />
                    <path fill="none" d="M14 27l8 8 16-16" class="tick-check" />
                  </svg>
                </div>
                <b>Đặt hàng thành công</b><br>
                <p>Một email xác nhận đã được gửi tới <span><?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></span> <br> Xin vui lòng kiểm tra mail của bạn</p>
                <button id="closeOverlay">Đóng</button>
              </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
              $(document).ready(function() {
                $('#orderButton').click(function() {
                  // Dữ liệu ví dụ (tuỳ chỉnh theo dự án của bạn)
                  let orderData = {
                    email: '<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>', // Email khách hàng
                    subject: 'order successfully',
                    content: '<p>Cảm ơn bạn đã đặt hàng tại Mega Food!</p>'
                  };

                  // Gửi AJAX request
                  $.ajax({
                    url: './config/process_order.php', // Đường dẫn xử lý server
                    method: 'POST',
                    data: orderData,
                    success: function(response) {
                      if (response.trim() === "success") {
                        $('#successOverlay').fadeIn(); // Hiển thị overlay thành công
                      } else {
                        alert('Lỗi từ server: ' + response); // Hiển thị chi tiết lỗi từ server
                      }
                    },
                    error: function(xhr, status, error) {
                      alert('Lỗi AJAX: ' + error); // Lỗi từ phía client
                    }
                  });

                });
              });
            </script>




          </div>
        </div>
      </div>
    </aside>
  </form>
</div>