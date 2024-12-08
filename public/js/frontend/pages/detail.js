// document.querySelectorAll('.btn_minus, .btn_plus').forEach(button => {
//     button.addEventListener('click', function (event) {
//         event.preventDefault(); // Ngừng hành động mặc định

//         let displayElement = this.closest('.input_number_product').querySelector('#quantity_display');
//         let currentQuantity = parseInt(displayElement.textContent) || 1; // Lấy số lượng hiện tại

//         // Thay đổi số lượng khi nhấn nút cộng/trừ
//         if (this.classList.contains('btn_plus')) {
//             currentQuantity++;
//         } else if (this.classList.contains('btn_minus') && currentQuantity > 1) {
//             currentQuantity--;
//         }

//         displayElement.textContent = currentQuantity; // Cập nhật số lượng hiển thị

//         // Cập nhật giá trị trong input hidden
//         let inputField = document.getElementById('quantity');
//         if (inputField) {
//             inputField.value = currentQuantity;
//         }
//     });
// });

// // Hàm thêm vào giỏ hàng
// function addToCart(productId, productName, productPrice, productImageUrl) {
//     let quantity = document.getElementById('quantity_display').textContent; // Lấy số lượng từ hiển thị
//     let url = `<?= BASE_URL; ?>index.php?route=cart&action=add&id=${productId}&name=${encodeURIComponent(productName)}&image_url=${encodeURIComponent(productImageUrl)}&price=${productPrice}&quantity=${quantity}`;
//     window.location.href = url; // Chuyển hướng đến giỏ hàng với số lượng và các thông tin sản phẩm
// }
