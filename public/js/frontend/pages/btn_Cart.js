function btnCart(){

document.addEventListener("DOMContentLoaded", () => {
    const decreaseBtns = document.querySelectorAll('.btn_reduce'); 
    const increaseBtns = document.querySelectorAll('.btn_increase'); 
    const quantityInputs = document.querySelectorAll('.quantity_cart'); 
    const prices = document.querySelectorAll('.price'); 
    const totalPrices = document.querySelectorAll('.total_price'); 
    const subtotalPriceElement = document.querySelector('.subtotal_price'); 
    
    // Định dạng số tiền theo chuẩn Việt Nam
    function formatCurrency(number) {
        return new Intl.NumberFormat('vi-VN').format(number);
    }

    // Chuyển đổi giá trị có dấu phân cách thành số
    function parseCurrency(string) {
        return parseInt(string.replace(/\./g, '')); // Loại bỏ dấu '.' rồi chuyển sang số
    }

    // Cập nhật tổng tiền của tất cả các sản phẩm trong giỏ hàng
    function updateCartTotal() {
        let totalCartPrice = 0;

        // Lặp qua từng sản phẩm
        quantityInputs.forEach((input, index) => {
            const price = parseCurrency(prices[index].textContent); // Lấy giá gốc sản phẩm
            const quantity = parseInt(input.value) || 1; // Lấy số lượng
            const total = price * quantity; // Tổng tiền cho sản phẩm này
            totalPrices[index].textContent = formatCurrency(total); // Cập nhật tổng tiền cho sản phẩm
            totalCartPrice += total; // Cộng dồn vào tổng giỏ hàng
        });

        // Cập nhật tổng tiền của giỏ hàng
        if (subtotalPriceElement) {
            subtotalPriceElement.textContent = formatCurrency(totalCartPrice);
        }
    }

    // Lặp qua từng sản phẩm và thêm sự kiện cho nút giảm và tăng
    quantityInputs.forEach((input, index) => {
        // Sự kiện giảm số lượng
        decreaseBtns[index].addEventListener('click', () => {
            let quantity = parseInt(input.value) || 1;
            if (quantity > 1) {
                quantity -= 1;
                input.value = quantity; 
                updateCartTotal();
            }
        });

        // Sự kiện tăng số lượng
        increaseBtns[index].addEventListener('click', () => {
            let quantity = parseInt(input.value) || 1;
            quantity += 1; 
            input.value = quantity; 
            updateCartTotal();
        });

        // Sự kiện thay đổi số lượng thủ công
        input.addEventListener('input', () => {
            let quantity = parseInt(input.value);
            if (isNaN(quantity) || quantity <= 0) {
                input.value = 1; 
            }
            updateCartTotal();
        });
    });

    // Cập nhật tổng tiền ngay khi trang được tải
    updateCartTotal();
});
}


function cartQuantity() {
    // Hàm để cập nhật số lượng sản phẩm trong giỏ hàng
    function updateCartQuantity() {
        let totalQuantity = 0;

        // Lấy tất cả các ô nhập số lượng sản phẩm
        const quantities = document.querySelectorAll('.quantity_cart');

        // Tính tổng số lượng
        quantities.forEach(input => {
            totalQuantity += parseInt(input.value, 10) || 0; // Chuyển giá trị thành số nguyên
        });

        // Lưu tổng số lượng vào Session Storage
        sessionStorage.setItem('cartQuantity', totalQuantity);

        // Hiển thị tổng số lượng lên .quantity
        document.querySelector('.cart .quantity').textContent = totalQuantity;
    }

    // Gọi hàm để khởi tạo giá trị khi trang load
    updateCartQuantity();

    // Lấy dữ liệu từ Session Storage (nếu có) và cập nhật giao diện
    const savedQuantity = sessionStorage.getItem('cartQuantity');
    if (savedQuantity) {
        document.querySelector('.cart .quantity').textContent = savedQuantity;
    }

    // Lắng nghe sự kiện thay đổi số lượng trong giỏ hàng
    const quantityInputs = document.querySelectorAll('.quantity_cart');
    quantityInputs.forEach(input => {
        input.addEventListener('input', updateCartQuantity); // Cập nhật khi người dùng thay đổi
    });
}

// // Gọi hàm khi trang được tải
// document.addEventListener('DOMContentLoaded', cartQuantity);


cartQuantity();
btnCart();

