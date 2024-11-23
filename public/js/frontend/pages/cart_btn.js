document.addEventListener('DOMContentLoaded', function () {
    // Lấy các phần tử cần thiết
    const priceElement = document.querySelector('.price'); // Giá sản phẩm
    const quantityInput = document.querySelector('.quantity'); // Số lượng
    const totalElement = document.querySelector('.total-price'); // Tổng tiền

    const reduceButton = document.querySelector('.btn_reduce'); // Nút giảm
    const increaseButton = document.querySelector('.btn_increase'); // Nút tăng

    // Chuyển giá từ chuỗi sang số
    const price = parseInt(priceElement.textContent.replace('.', ''));

    // Hàm cập nhật tổng tiền
    function updateTotal() {
        const quantity = parseInt(quantityInput.value);
        const total = price * quantity;
        totalElement.textContent = total.toLocaleString(); // Định dạng số
    }

    // Xử lý khi nhấn nút giảm
    reduceButton.addEventListener('click', function () {
        let quantity = parseInt(quantityInput.value);
        if (quantity > 1) {
            quantity--;
            quantityInput.value = quantity;
            updateTotal();
        }
    });

    // Xử lý khi nhấn nút tăng
    increaseButton.addEventListener('click', function () {
        let quantity = parseInt(quantityInput.value);
        quantity++;
        quantityInput.value = quantity;
        updateTotal();
    });

    // Xử lý khi nhập trực tiếp vào ô số lượng
    quantityInput.addEventListener('input', function () {
        let quantity = parseInt(quantityInput.value);
        if (isNaN(quantity) || quantity < 1) {
            quantity = 1;
        }
        quantityInput.value = quantity;
        updateTotal();
    });
});
