<?php

class CartController
{
    // Method to add items to the cart
    public function add()
    {
        // Start session if not started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Retrieve product details from the GET request
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
        $image_url = isset($_GET['image_url']) ? htmlspecialchars($_GET['image_url']) : '';
        $price = isset($_GET['price']) ? floatval($_GET['price']) : 0;
        $quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;

        // Ensure data is valid
        if ($id && $name && $price && $image_url && $quantity > 0) {
            // Initialize the cart session if not already set
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

        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
        $quantity_change = isset($_POST['quantity_change']) ? intval($_POST['quantity_change']) : 0;

        if (isset($_SESSION['cart'][$id])) {
            $current_quantity = $_SESSION['cart'][$id]['quantity'];
            $new_quantity = $current_quantity + $quantity_change;

            // Đảm bảo số lượng không nhỏ hơn 1
            if ($new_quantity < 1) {
                $new_quantity = 1;
            }

            $_SESSION['cart'][$id]['quantity'] = $new_quantity;

            // Gửi phản hồi thành công
            echo json_encode(['success' => true]);
        } else {
            // Sản phẩm không tồn tại trong giỏ hàng
            echo json_encode(['success' => false]);
        }
        exit();
    }
}
