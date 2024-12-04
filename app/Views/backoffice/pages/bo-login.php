<div class="container">

    <div class="cart_body">
        <form action="<?php echo BASE_URL; ?>admin" method="post">
            <div class="form-group_email">
                <label class="input-label" for="">Your email</label>
                <input type="email" class="email" placeholder="email@address.com">
            </div>
            <div class="form-group_password">
                <label class="input-label" for="">Password</label>
                <input type="password" class="password" placeholder="8+ characters required">
            </div>
            <button type="submit" name="submitAdmin" class="submit">Sign in</button>
        </form>
    </div>

</div>