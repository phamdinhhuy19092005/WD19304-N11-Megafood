<?php

class CartController
{

    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function add()
    {


        // Retrieve product details from the GET request
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
        $image_url = isset($_GET['image_url']) ? htmlspecialchars($_GET['image_url']) : '';
        $price = isset($_GET['price']) ? floatval($_GET['price']) : 0;
        $quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;

        if ($id && $name && $price && $image_url && $quantity > 0) {
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity'] += $quantity;
            } else {
                $_SESSION['cart'][$id] = [
                    'name' => $name,
                    'image_url' => $image_url,
                    'price' => $price,
                    'quantity' => $quantity,
                ];
            }
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            echo "Invalid data.";
        }
    }

    public function remove()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }

        header('Location: index.php?route=cart&action=view');
        exit();
    }

    public function cart()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $title = "MegaFood - Giỏ hàng";
        $page = "cart";

        // Get cart items
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        // Include layout and page files
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/cart.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }

    public function updateQuantity()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $productId = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
        $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

        if ($productId && $quantity > 0) {
            if (isset($_SESSION['cart'][$productId])) {
                $_SESSION['cart'][$productId]['quantity'] = $quantity;
            }
        }

        header('Location: index.php?route=cart&action=view');
        exit();
    }

    public function payment()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $title = "MegaFood - Thanh toán";
        $page = "payment";

        // Lấy danh sách sản phẩm từ giỏ hàng
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        // Tính tổng tiền
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }

        // Hiển thị giao diện thanh toán
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/payment.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
