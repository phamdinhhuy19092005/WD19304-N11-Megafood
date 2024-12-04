<div class="container">
    <div class="cart_body">
        <form action="<?php echo BASE_URL; ?>admin" method="post">
            <div class="form-group_email">
                <label class="input-label" for="email">Your email</label>
                <input type="email" name="email" class="email" placeholder="email@address.com" required>
            </div>
            <div class="form-group_password">
                <label class="input-label" for="password">Password</label>
                <input type="text" name="password" class="password" placeholder="8+ characters required" required>
            </div>
            <button type="submit" name="submitAdmin" class="submit">Sign in</button>
        </form>
    </div>
</div>
