// $(document).ready(function() {
//     $('#orderButton').click(function() {
//         let orderData = {
//             email: 'tanh7164@gmail.com',
//             subject: 'order successfully',
//             content: '<p>Cảm ơn bạn đã đặt hàng tại Mega Food!</p>'
//         };

//         $.ajax({
//             url: './config/process_order.php',
//             method: 'POST',
//             data: orderData,
//             success: function(response) {
//                 if (response.trim() === "success") {
//                     // $('#successOverlay').fadeIn(); // Hiển thị overlay thành công
//                 } else {
//                     // Hiển thị lỗi trong giao diện thay vì alert
//                     $('#errorMessage').text('Đã xảy ra lỗi. Vui lòng thử lại sau.').fadeIn();
//                 }
//             },
//             error: function() {
//                 // Hiển thị lỗi trong giao diện thay vì alert
//                 $('#errorMessage').text('Lỗi khi gửi yêu cầu. Vui lòng kiểm tra kết nối mạng và thử lại.').fadeIn();
//             }
//         });
//     });
// });
