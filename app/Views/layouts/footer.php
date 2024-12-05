<footer>

    <div class="footer_wrap">
        <div class="bg_footer"></div>
        <ul class="footer_thumb">
            <li class="item_thumb">
                <div class="content_top">
                    <h3>Về chúng tôi</h3>
                    <div class="after"></div>
                    <span>Chào mừng bạn đến với Mega Food - điểm đến lý tưởng cho những người yêu thưởng thức pizza
                        tại thành phố! Mega Food tự hào là địa chỉ pizza hàng đầu, nổi tiếng với chất lượng món ăn
                        tuyệt vời, dịch vụ tận tâm và mức độ hài lòng cao từ phía khách hàng.</span>
                </div>
                <div class="content_bottom">
                    <h3>Hình thức thanh toán</h3>
                    <div class="after"></div>
                    <img src="<?php echo IMG_BASE_URL; ?>/payment/payment1.webp" alt="">
                    <img src="<?php echo IMG_BASE_URL; ?>/payment/payment2.webp" alt="">
                    <img src="<?php echo IMG_BASE_URL; ?>/payment/payment3.webp" alt="">


                </div>
            </li>
            <li class="item_thumb">
                <div class="content_top">

                    <h3>Thông tin</h3>
                    <div class="after"></div>
                    <span>Công ty TNHH Mega Food chuyên phục vụ trong lĩnh vực nhà hàng. Mã số thuế: 123456xxxx -
                        Ngày cấp: 13/05/2024 - Nơi cấp: Sở kế hoạch và đầu tư TPHCM - Website: Mega-food.vn</span>
                    <ul class="group_address">
                        <li>
                            <div class="icon_address"><i class="fa-solid fa-location-dot"></i></div>
                            <span>70 Lữ Gia, Phường 15, Quận 11, TP.HCM</span>
                        </li>
                        <li>
                            <div class="icon_address"><i class="fa-solid fa-clock"></i></div>
                            <span>8h - 22h <br>
                                Từ thứ 2 đến chủ nhật</span>
                        </li>
                        <li>
                            <div class="icon_address"><i class="fa-solid fa-phone"></i></div>
                            <span>0332493487</span>
                        </li>
                        <li>
                            <div class="icon_address"><i class="fa-solid fa-envelope"></i></div>
                            <span>tanh7164@gmail</span>
                        </li>
                    </ul>
                </div>
                <div class="content_bottom">
                    <h3>Theo dõi chúng tôi</h3>
                    <div class="after"></div>
                    <ul class="footer_contact">
                        <li class="social"><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li class="social"><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        <li class="social"><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>

                </div>
            </li>
            <li class="item_thumb">
                <div class="content_top">
                    <h3>Chính sách và hướng dẫn</h3>
                    <div class="after"></div>
                    <ul class="policy">
                        <li><a href=""><i class="fa-solid fa-arrow-right"></i> <span>Chính sách thành
                                    viên</span></a></li>
                        <li><a href=""><i class="fa-solid fa-arrow-right"></i> <span>Chính sách thanh
                                    toán</span></a></li>
                        <li><a href=""><i class="fa-solid fa-arrow-right"></i> <span>Bảo mật thông tin cá
                                    nhân</span></a></li>
                        <li><a href=""><i class="fa-solid fa-arrow-right"></i> <span>Hướng dẫn mua hàng</span></a>
                        </li>
                        <li><a href=""><i class="fa-solid fa-arrow-right"></i> <span>Hướng dẫn thanh toán</span></a>
                        </li>
                    </ul>

                </div>
            </li>
            <li class="item_thumb">
                <div class="content_top">
                    <h3>Tin tức</h3>
                    <div class="after"></div>
                    <div class="content_top_small">
                        <a href="<?php echo BASE_URL; ?>index.php?route=news">
                            <img src="<?php echo IMG_BASE_URL; ?>/news/news1.webp" alt="">
                            <span>Đế bánh Pizza mua ở đâu đảm bảo chất lượng</span>
                        </a>
                        <a href="<?php echo BASE_URL; ?>index.php?route=news">
                            <img src="<?php echo IMG_BASE_URL; ?>/news/news2.webp" alt="">
                            <span>Cách làm pizza xốt Mayonnaise thơm béo ngon ngất ngây</span>
                        </a>
                        <a href="<?php echo BASE_URL; ?>index.php?route=news">
                            <img src="<?php echo IMG_BASE_URL; ?>/news/news3.webp" alt="">
                            <span>Pasta là món ăn của nước nào? Pasta và Spaghetti có gì khác nhau?</span>
                        </a>
                        <a href="<?php echo BASE_URL; ?>index.php?route=news">
                            <img src="<?php echo IMG_BASE_URL; ?>/news/news4.webp" alt="">
                            <span>Tiết lộ tính cách qua cách ăn pizza cực thú vị</span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>

        <div class="copyright">
            <span>
                Bản quyền thuộc về
                <b>Mega Food.</b>

            </span>
        </div>
    </div>
</footer>

<script src="<?php echo JS_BASE_URL; ?>search.js"></script>
<script src="<?php echo JS_BASE_URL; ?>header.js"></script>
<!-- <script src="<?php echo JS_PAGES_URL; ?>notification.js"></script> -->
<script src="<?php echo JS_PAGES_URL; ?>btn_product.js"></script>
<script src="<?php echo JS_PAGES_URL; ?>display_sudMenu.js"></script>



<?php if ($page === 'home'): ?>
    <script src="<?php echo JS_PAGES_URL; ?>scrollToTop.js"></script>
    <script src="<?php echo JS_PAGES_URL; ?>menuItem.js"></script>
    <script src="<?php echo JS_PAGES_URL; ?>slider.js"></script>
    <!-- <script src="<?php echo JS_PAGES_URL; ?>notification.js"></script> -->



<?php elseif ($page === 'cart'): ?>
<script src="<?php echo JS_PAGES_URL; ?>btn_Cart.js"></script>

<?php elseif ($page === 'faq'): ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo JS_PAGES_URL; ?>faq.js"></script>
<?php elseif ($page === 'login'): ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo JS_PAGES_URL; ?>login.js"></script>
<?php elseif ($page === 'register'): ?>
    <script src="<?php echo JS_PAGES_URL; ?>errors.js"></script>
<?php elseif ($page === 'products'): ?>
    <script src="<?php echo JS_PAGES_URL; ?>detail.js"></script>
    <!-- <script src="<?php echo JS_PAGES_URL; ?>notification.js"></script> -->
<?php elseif ($page === 'detailCategories'): ?>
    <script src="<?php echo JS_PAGES_URL; ?>display_sudMenu.js"></script>
    <script src="<?php echo JS_PAGES_URL; ?>sort_detailcategories.js"></script>
    <script src="<?php echo JS_PAGES_URL; ?>menuItem.js"></script>
<?php elseif ($page === 'product-details'): ?>
    <script src="<?php echo JS_PAGES_URL; ?>detail.js"></script>
    <script src="<?php echo JS_PAGES_URL; ?>saveVoucher.js"></script>
<?php elseif ($page === 'payment'): ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo JS_PAGES_URL; ?>sendMail.js"></script>
    <script src="<?php echo JS_PAGES_URL; ?>orderSuccessfully.js"></script>



<?php endif; ?>




</body>

</html>