function btnCart() {
    document.addEventListener("DOMContentLoaded", () => {
        const decreaseBtns = document.querySelectorAll('.btn_reduce');
        const increaseBtns = document.querySelectorAll('.btn_increase');
        const quantityInputs = document.querySelectorAll('.quantity_cart');

        // Khôi phục dữ liệu từ sessionStorage
        quantityInputs.forEach((input, index) => {
            const savedQuantity = sessionStorage.getItem(`quantity_${index}`);
            if (savedQuantity) {
                input.value = savedQuantity; // Khôi phục số lượng từ sessionStorage
            }
        });

        quantityInputs.forEach((input, index) => {
            // Hàm lưu số lượng vào sessionStorage
            const saveToSession = () => {
                sessionStorage.setItem(`quantity_${index}`, input.value);
            };

            // Sự kiện giảm số lượng
            decreaseBtns[index].addEventListener('click', () => {
                let quantity = parseInt(input.value) || 1;
                if (quantity > 1) {
                    quantity -= 1;
                    input.value = quantity;
                    saveToSession(); // Lưu vào sessionStorage
                }
            });

            // Sự kiện tăng số lượng
            increaseBtns[index].addEventListener('click', () => {
                let quantity = parseInt(input.value) || 1;
                quantity += 1;
                input.value = quantity;
                saveToSession(); // Lưu vào sessionStorage
            });

            // Sự kiện thay đổi trực tiếp qua input
            input.addEventListener('input', () => {
                let quantity = parseInt(input.value);
                if (isNaN(quantity) || quantity <= 0) {
                    input.value = 1; // Đặt lại giá trị mặc định nếu nhập không hợp lệ
                }
                saveToSession(); // Lưu vào sessionStorage
            });
        });
    });
}

btnCart();
