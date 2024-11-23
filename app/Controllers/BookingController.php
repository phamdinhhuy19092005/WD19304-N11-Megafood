<!-- /app/Controllers/HomeController.php -->
<?php
class BookingController
{
    public function booking()
    {
        $title = "MegaFood - Giỏ hàng";
        $page = "booking";
        include __DIR__ . '/../Views/layouts/header.php';
        include __DIR__ . '/../Views/pages/booking.php';
        include __DIR__ . '/../Views/layouts/footer.php';
    }
}

