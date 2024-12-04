$(document).ready(function() {
    $('#orderButton').click(function() {
        // Dữ liệu ví dụ (tuỳ chỉnh theo dự án của bạn)
        let orderData = {
            email: 'tanh7164@gmail.com', // Email khách hàng
            subject: 'order successfully',
            content: '<p>Cảm ơn bạn đã đặt hàng tại Mega Food!</p>'
        };

        // Gửi AJAX request
        $.ajax({
url: './config/process_order.php', // Đường dẫn xử lý server
method: 'POST',
data: orderData,
success: function(response) {
    if (response.trim() === "success") {
        $('#successOverlay').fadeIn(); // Hiển thị overlay thành công
    } else {
        alert('Lỗi từ server: ' + response); // Hiển thị chi tiết lỗi từ server
    }
},
error: function(xhr, status, error) {
    alert('Lỗi AJAX: ' + error); // Lỗi từ phía client
}
});

    });
});