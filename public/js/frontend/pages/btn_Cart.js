// function btnCart() {
//     document.addEventListener("DOMContentLoaded", () => {
//         const decreaseBtns = document.querySelectorAll('.btn_reduce'); 
//         const increaseBtns = document.querySelectorAll('.btn_increase'); 
//         const quantityInputs = document.querySelectorAll('.quantity_cart'); 

//         quantityInputs.forEach((input, index) => {
//             decreaseBtns[index].addEventListener('click', () => {
//                 let quantity = parseInt(input.value) || 1;
//                 if (quantity > 1) {
//                     quantity -= 1;
//                     input.value = quantity; 
//                 }
//             });

//             increaseBtns[index].addEventListener('click', () => {
//                 let quantity = parseInt(input.value) || 1;
//                 quantity += 1; 
//                 input.value = quantity; 
//             });

//             input.addEventListener('input', () => {
//                 let quantity = parseInt(input.value);
//                 if (isNaN(quantity) || quantity <= 0) {
//                     input.value = 1; 
//                 }
//             });
//         });
//     });
// }

// btnCart();


document.addEventListener("DOMContentLoaded", () => {
    const decreaseBtns = document.querySelectorAll('.btn_reduce'); // Nút giảm
    const increaseBtns = document.querySelectorAll('.btn_increase'); // Nút tăng
    const quantityInputs = document.querySelectorAll('.quantity_cart'); // Ô input số lượng
    const prices = document.querySelectorAll('.price'); // Giá gốc
    const totalPrices = document.querySelectorAll('.total_price'); // Tổng tiền của từng sản phẩm
    const subtotalPriceElement = document.querySelector('.subtotal_price'); // Tổng tiền giỏ hàng (subtotal)
    
    console.log(prices);
    
    // Định dạng số tiền
    function formatCurrency(number) {
        return new Intl.NumberFormat('vi-VN').format(number);
    }

    // Cập nhật tổng tiền của tất cả các sản phẩm trong giỏ hàng
    function updateCartTotal() {
        let totalCartPrice = 0;

        // Lặp qua từng sản phẩm
        quantityInputs.forEach((input, index) => {
            const price = parseInt(prices[index].textContent); // Lấy giá gốc sản phẩm
            const quantity = parseInt(input.value) || 1; // Lấy số lượng
            const total = price * quantity; // Tổng tiền cho sản phẩm này
            totalPrices[index].textContent = formatCurrency(total); // Cập nhật tổng tiền cho sản phẩm
            totalCartPrice += total; // Cộng dồn vào tổng giỏ hàng
        });

        // Cập nhật tổng tiền của giỏ hàng
        subtotalPriceElement.textContent = formatCurrency(totalCartPrice);
    }

    // Lặp qua từng sản phẩm và thêm sự kiện cho nút giảm và tăng
    quantityInputs.forEach((input, index) => {
        // Sự kiện giảm số lượng
        decreaseBtns[index].addEventListener('click', () => {
            let quantity = parseInt(input.value) || 1;
            if (quantity > 1) {
                quantity -= 1;
                input.value = quantity; // Cập nhật giá trị trong ô input
                updateCartTotal();
            }
        });

        // Sự kiện tăng số lượng
        increaseBtns[index].addEventListener('click', () => {
            let quantity = parseInt(input.value) || 1;
            quantity += 1; // Tăng số lượng
            input.value = quantity; // Cập nhật giá trị trong ô input
            updateCartTotal();
        });

        // Sự kiện thay đổi số lượng thủ công
        input.addEventListener('input', () => {
            let quantity = parseInt(input.value);
            if (isNaN(quantity) || quantity <= 0) {
                input.value = 1; // Nếu nhập không hợp lệ, đặt lại giá trị mặc định
            }
            updateCartTotal();
        });
    });

    // Cập nhật tổng tiền ngay khi trang được tải
    updateCartTotal();
});

