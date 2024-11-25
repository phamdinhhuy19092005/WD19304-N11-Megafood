<div class="bodywrap">
    <section class="bread_crumb">
        <div class="container_bread_crumb">
            <ul class="List_bread_crumb">
                <li class="home">
                    <a href="<?php echo BASE_URL; ?>index.php?route=home">
                        <span>Trang chủ</span>
                    </a>
                    <span class="mr_lr">
                        <i class="bi bi-chevron-right"></i>
                    </span>
                </li>
                <li>
                    <span class="name_prd">Đăng ký</span>
                </li>

            </ul>
        </div>
    </section>
    <section class="section">
        <div class="login">
            <ul>
                <li><a href="<?php echo BASE_URL; ?>index.php?route=login">ĐĂNG NHẬP</a></li>
                <li class="active"><a href>ĐĂNG KÝ</a></li>
            </ul>
            <h1>
                <span>ĐĂNG KÝ</span>
            </h1>
            <form class="form_login" action="<?php echo BASE_URL; ?>index.php?route=register" method="POST" autocomplete="off">

                <div class="form_group">
                    <input type="text" name="lastName" placeholder="Họ" id="lastName" >
                    <div class="errors">
                        <span></span>
                    </div>
                </div>

                <div class="form_group">
                    <input type="text" name="firstName" placeholder="Tên" id="firstName" >
                    <div class="errors">
                        <span></span>
                    </div>
                </div>
                <div class="form_group">
                    <input type="email" name="email" placeholder="Email" id="email" >
                    <div class="errors">
                        <span></span>
                    </div>
                </div>
                <div class="form_group">
                    <input type="text" name="phone" placeholder="Số điện thoại" id="phone" pattern="[0-9]{10,11}" >
                    <div class="errors">
                        <span></span>
                    </div>
                </div>
                <div class="form_group">
                    <input type="text" name="password" placeholder="Mật khẩu" id="password" minlength="8" >
                    <div class="errors">
                        <span></span>
                    </div>
                </div>
                <div class="form_group">
                    <button type="submit" name="signUp" value="Đăng ký">Đăng ký</button>
                </div>
            </form>


            <div class="social_login">
                <p>Hoặc đăng nhập bằng</p>
                <a href="#">
                    <img width="129px" height="37px" alt="facebook-login-button"
                        src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg">
                </a>
                <a href="#">
                    <img width="129px" height="37px" alt="google-login-button"
                        src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg">
                </a>

            </div>
        </div>
    </section>
</div>