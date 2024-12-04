<?php

class FavoritesListController
{

    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function addToFavorites()
    {
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $name = isset($_GET['name']) ? htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8') : '';
        $description = isset($_GET['description']) ? htmlspecialchars($_GET['description'], ENT_QUOTES, 'UTF-8') : '';
        $image_url = isset($_GET['image_url']) ? htmlspecialchars($_GET['image_url'], ENT_QUOTES, 'UTF-8') : '';
        $price = isset($_GET['price']) ? floatval($_GET['price']) : 0;

        if ($id && $name && $image_url && $price && $description) {
            $_SESSION['favorites'] = $_SESSION['favorites'] ?? [];

            $exists = false;
            foreach ($_SESSION['favorites'] as $favorite) {
                if ($favorite['id'] == $id) {

                    $exists = true;
                    break;
                }
            }

            if (!$exists) {
                $_SESSION['favorites'][] = [
                    'id' => $id,
                    'name' => $name,
                    'image_url' => $image_url,
                    'price' => $price,
                    'description' => $description,
                ];

                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            } else {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        } else {
            echo 'Lỗi: Tham số không hợp lệ.';
        }
    }


    public function removeFromFavorites()
    {
        if (isset($_GET['id'])) {
            $idToRemove = intval($_GET['id']);

            foreach ($_SESSION['favorites'] as $key => $favorite) {
                if ($favorite['id'] == $idToRemove) {
                    unset($_SESSION['favorites'][$key]);
                    break;
                }
            }

            $_SESSION['favorites'] = array_values($_SESSION['favorites']);

            header('Location: ' . BASE_URL . 'index.php?route=favorites');
            exit();
        } else {
            echo 'Lỗi: Không tìm thấy sản phẩm để xóa.';
            exit();
        }
    }

    public function favoritesList()
    {
        $title = "Mega Food - Danh sách yêu thích";
        $page = "favorites";

        $favorites = $_SESSION['favorites'] ?? [];

        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/favoritesList.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}
