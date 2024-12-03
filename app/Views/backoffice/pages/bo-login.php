<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Default Title' ?></title>
    <link rel="stylesheet" href="<?php echo CSS_PAGES_BO_URL; ?>login-bo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../../font.css">
</head>
<body>
    <div class="container">

        <div class="cart_body">
            <form action="">
                <div class="form-group_email">
                    <label class="input-label" for="">Your email</label>
                    <input type="email" class="email" placeholder="email@address.com">
                </div>
                <div class="form-group_password">
                    <label class="input-label" for="">Password</label>
                    <input type="password" class="password" placeholder="8+ characters required">
                </div>
                
                <button type="submit" class="submit">Sign in</button>
            </form>
        </div>
    </div>
</body>
</html>