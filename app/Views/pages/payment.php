<?php
    $styles = [
        'payment' => ['payment.css', 'product-details.css'],


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
                        <span>Đăng nhập</span>
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
                            value=""
                            placeholder="Email"
                          />
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
                            value=""
                            placeholder="Họ và tên"
                          />
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
                            placeholder="Số điện thoại (tùy chọn)"
                          />
                        </div>
                        <div class="field_select_phone">
                          <select name="phone_region" id="phone_region">
                            <option value="US">USA</option>
                            <option value="US">VIE</option>
                            <option value="US">THA</option>
                            <option value="US">FRA</option>
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
                            placeholder="Địa chỉ (tùy chọn)"
                          />
                        </div>
                      </div>
                      <div class="field_address">
                        <div class="field_input_address">
                          <label for="province" class="field_label"
                            >Tỉnh thành</label
                          >
                          <select
                            name="province"
                            id="province"
                            class="province"
                          >
                            <option value=""></option>
                            <option value="US">Hà Nội</option>
                            <option value="US">TP.HCM</option>
                            <option value="US">Bình Thuận</option>
                            <option value="US">Vũng Tàu</option>
                          </select>
                        </div>
                      </div>
                      <div class="field_address">
                        <div class="field_input_address">
                          <label for="district" class="field_label"
                            >Quận huyện (tùy chọn)</label
                          >
                          <select name="district" id="district"></select>
                          <span class="seclect_selection">
                            <b role="presentation"></b>
                          </span>
                        </div>
                      </div>
                      <div class="field_address">
                        <div class="field_input_address">
                          <label for="ward" class="field_label"
                            >Quận huyện (tùy chọn)</label
                          >
                          <select name="ward" id="ward"></select>
                          <span class="seclect_selection">
                            <b role="presentation"></b>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fieldset">
                    <div class="field_note">
                      <textarea
                        name=""
                        id=""
                        placeholder="Ghi chú(tùy chọn)"
                      ></textarea>
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
                      Vui lòng nhập thông tin giao hàng
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
                          <label for="transfer1" class="radio_label_primary"
                            >Chuyển khoản</label
                          >
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
                          <label class="radio_label_primary" for="transfer2"
                            >Thu hộ (COD)</label
                          >
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
                      <tr class="product">
                        <td class="product_image">
                          <div class="product_thumbnail_wrapper">
                            <a href=".<?php echo BASE_URL; ?>index.php?route=home">
                              <img
                                src="https://bizweb.dktcdn.net/thumb/thumb/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060"
                                alt=""
                              />
                            </a>
                          </div>
                          <span class="product_thumbnail_quantity">1</span>
                        </td>
                        <th class="product_decription">
                          <a href="../product_details/detail.html">
                            <span class="product_decription_name"
                              >Gà giòn sốt tương tỏi hàn quốc</span
                            >
                          </a>
                          <span class="product_decription_amount">3 miếng</span>
                          <span class="product_decription_note">Ghi chú:</span>
                        </th>
                        <!-- <td class="product_quantity">
                                                <em>Số lượng</em>
                                                1
                                            </td> -->
                        <td class="product_price">99.999đ</td>
                      </tr>
                    </tbody>
                  </table>
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
                        <td class="total_line_price">99.999đ</td>
                      </tr>
                      <tr class="total_line_subtotal">
                        <th class="total_line_name">Phí vận chuyển</th>
                        <td class="total_line_price"></td>
                      </tr>
                    </tbody>
                    <tfoot class="total_line_table_footer">
                      <tr class="total_line_payment">
                        <th class="total_line_name">
                          <span>Tổng cộng</span>
                        </th>
                        <td class="total_line_price">
                          <span>99.999đ</span>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="order_summary_item_4">
                  <div class="previous_link">
                    <a href="<?php echo BASE_URL; ?>index.php?route=cart" class="previous_link_1"
                      ><i class="bi bi-chevron-left"></i>Quay về giỏ hàng</a
                    >
                  </div>
                  <button class="btn_checkout"><span>Đặt hàng</span></button>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </form>
    </div>