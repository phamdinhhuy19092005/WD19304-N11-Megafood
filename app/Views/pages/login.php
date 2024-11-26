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
                    <span class="name_prd">Đăng nhập</span>
                </li>

            </ul>
        </div>
    </section>
    <section class="section">
        <div class="login">
            <ul>
                <li class="active"><a href="#">ĐĂNG NHẬP</a></li>
                <li>
                    <a href="<?php echo BASE_URL; ?>index.php?route=register">ĐĂNG KÝ</a>
                </li>
            </ul>
            <h1>
                <span>ĐĂNG NHẬP</span>
            </h1>
            <form class="form_login" method="POST" action="<?php echo BASE_URL; ?>index.php?route=login">
                <div class="form_group">
                    <input type="email" name="email" placeholder="Email" id="email" >
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
                <div class="repassword">
                    <span class="toggleForm">Quên mật khẩu</span>
                </div>
            </form>

            <div class="h_recover" id="recover-password">
                <div class="form_group">
                    <input type="email" name="email" placeholder="Email" id="email" >
                    <div class="errors">
                        <span></span>
                    </div>
                </div>
                <div class="form_group">
                    <button type="submit" name="signUp" value="Lấy lại mật khẩu">Đăng ký</button>
                </div>
            </div>
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