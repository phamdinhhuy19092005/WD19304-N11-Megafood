<div class="bodywrap">
    <div class="cartwrap">
        <div class="cartwrap_left">
            <div class="productCart_header">
                <ul>
                    <li>Thông tin sản phẩm</li>
                    <li>Đơn giá</li>
                    <li>Số lượng</li>
                    <li>Thành tiền</li>
                </ul>
            </div>

            <?php if (!empty($cart)): ?>
                <div class="productCart_body">
                    <?php foreach ($cart as $product_id => $product): ?>
                        <div class="productCart_thumbnail">
                            <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $product_id; ?>">
                                <img src="<?= IMG_BASE_URL . htmlspecialchars($product['image_url']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" />
                            </a>
                            <div class="productCart_info">
                                <span>
                                    <a href="<?= BASE_URL; ?>index.php?route=product-detail&id=<?= $product_id; ?>" class="productCart_name"><?= htmlspecialchars($product['name']); ?></a>
                                </span>

                                <span>
                                    <a href="<?= BASE_URL; ?>index.php?route=cart&action=remove&id=<?= $product_id; ?>" class="delete">Xóa</a>
                                </span>
                            </div>
                            <div class="cart_price">
                                <span class="price"><?= number_format($product['price'], 0, ',', '.'); ?> VND</span>
                            </div>
                            <div class="cart_btn">
                                <div class="cart_select">
                                    <div class="cart_select">
                                        <button type="button" class="btn_reduce" data-id="<?= $product_id; ?>">-</button>
                                        <input type="text" class="quantity_cart" value="<?= $product['quantity']; ?>" min="1" data-id="<?= $product_id; ?>">
                                        <button type="button" class="btn_increase" data-id="<?= $product_id; ?>">+</button>
                                    </div>
                                    <form id="updateForm" method="POST" action="index.php?route=cart&action=updateQuantity" style="display: none;">
                                        <input type="hidden" name="product_id" id="product_id">
                                        <input type="hidden" name="action" id="action">
                                        <input type="hidden" name="quantity" id="quantity">
                                    </form>


                                </div>
                            </div>
                            <div class="cart_total">
                                <span class="total_price"> <?= number_format($product['price'] * $product['quantity'], 0, ',', '.'); ?></span> VND
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="cart_subtotal">
                    <?php
                    $total = 0;
                    foreach ($cart as $product) {
                        $total += $product['price'] * $product['quantity'];
                    }
                    ?>
                    <div class="subtotal">
                        <p class="subtotal_label">Tổng tiền:</p>
                        <div class="total_price">
                            <span class="subtotal_price">
                                <?php echo number_format($total, 0, ',', '.'); ?>
                            </span>
                            <span>VND</span>
                        </div>
                    </div>


                    <div class="pay">
                        <a href="<?php echo BASE_URL . 'index.php?route=cart&action=payment'; ?>">
                            <button type="button">Thanh toán</button>
                        </a>
                    </div>

                </div>

            <?php else: ?>
                <p>
                    <img src="<?php echo IMG_BASE_URL; ?>cart/empty-cart-2130356-1800917.webp" alt="">
                </p>
            <?php endif; ?>

        </div>




        <div class="cartwrap_right">
            <form action="">
                <h4>Thời gian giao hàng</h4>

                <div class="timedeli_modal">
                    <fieldset class="input_group_date_pick">
                        <input type="date" placeholder="Chọn ngày" class="date_picker">
                    </fieldset>
                    <fieldset class="input_group_date_time">
                        <select name="time" id="">
                            <option>Chọn thời gian</option>
                            <option value="08h00 - 12h00">08h00 - 12h00</option>
                            <option value="14h00 - 18h00">14h00 - 18h00</option>
                            <option value="19h00 - 21h00">19h00 - 21h00</option>

                        </select>
                    </fieldset>
                </div>


                <div class="bill">
                    <input type="checkbox">
                    <label for="">Xuất hóa đơn công ty</label>
                </div>
            </form>
        </div>

    </div>
</div>