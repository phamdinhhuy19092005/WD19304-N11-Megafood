<?php
class LogoutController
{
    public function logout()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        session_unset();

        session_destroy();

        header('Location: ' . BASE_URL . 'index.php?route=login');
        exit();
    }
}
