<?php

class CartController
{
    public function add()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
        $image_url = isset($_GET['image_url']) ? htmlspecialchars($_GET['image_url']) : '';
        $price = isset($_GET['price']) ? floatval($_GET['price']) : 0;
        $quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;

        if ($id && $name && $price && $image_url) {
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

            header('Location: index.php?route=cart');
            exit();
        } else {
            echo "Dữ liệu không hợp lệ.";
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

        header('Location: index.php?route=cart');
        exit();
    }

    public function cart()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $title = "MegaFood - Giỏ hàng";
        $page = "cart";

        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/cart.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
