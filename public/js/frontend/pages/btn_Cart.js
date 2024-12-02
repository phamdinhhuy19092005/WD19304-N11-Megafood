// function btnCart() {
//     document.addEventListener("DOMContentLoaded", () => {
//         const decreaseBtns = document.querySelectorAll('.btn_reduce');
//         const increaseBtns = document.querySelectorAll('.btn_increase');
//         const quantityInputs = document.querySelectorAll('.quantity_cart');

//         // Khôi phục dữ liệu từ sessionStorage
//         quantityInputs.forEach((input, index) => {
//             const savedQuantity = sessionStorage.getItem(`quantity_${index}`);
//             if (savedQuantity) {
//                 input.value = savedQuantity; // Khôi phục số lượng từ sessionStorage
//             }
//         });

//         quantityInputs.forEach((input, index) => {
//             // Hàm lưu số lượng vào sessionStorage
//             const saveToSession = () => {
//                 sessionStorage.setItem(`quantity_${index}`, input.value);
//             };

//             // Sự kiện giảm số lượng
//             decreaseBtns[index].addEventListener('click', () => {
//                 let quantity = parseInt(input.value) || 1;
//                 if (quantity > 1) {
//                     quantity -= 1;
//                     input.value = quantity;
//                     saveToSession(); // Lưu vào sessionStorage
//                 }
//             });

//             // Sự kiện tăng số lượng
//             increaseBtns[index].addEventListener('click', () => {
//                 let quantity = parseInt(input.value) || 1;
//                 quantity += 1;
//                 input.value = quantity;
//                 saveToSession(); // Lưu vào sessionStorage
//             });

//             // Sự kiện thay đổi trực tiếp qua input
//             input.addEventListener('input', () => {
//                 let quantity = parseInt(input.value);
//                 if (isNaN(quantity) || quantity <= 0) {
//                     input.value = 1; // Đặt lại giá trị mặc định nếu nhập không hợp lệ
//                 }
//                 saveToSession(); // Lưu vào sessionStorage
//             });
//         });
//     });
// }

// btnCart();

document.querySelectorAll('.btn_reduce, .btn_increase').forEach(button => {
    button.addEventListener('click', function() {
        let productId = this.getAttribute('data-id');
        let inputField = this.parentElement.querySelector('.quantity_cart');
        let newQuantity = parseInt(inputField.value);

        // Increase or decrease the quantity based on the button clicked
        if (this.classList.contains('btn_increase')) {
            newQuantity++;
        } else if (this.classList.contains('btn_reduce') && newQuantity > 1) {
            newQuantity--;
        }

        // Update the input field and the hidden quantity field in the form
        inputField.value = newQuantity;
        document.getElementById('quantity').value = newQuantity;  // Set the new quantity value in the hidden field

        // Submit the form to update the cart
        updateCartQuantity(productId, newQuantity);
    });
});

function updateCartQuantity(productId, quantity) {
    const form = document.getElementById('updateForm');
    const productIdInput = form.querySelector('#product_id');
    const actionInput = form.querySelector('#action');

    productIdInput.value = productId;
    actionInput.value = 'updateQuantity';  // Set the action type for the controller

    form.submit();  // Submit the form to update the cart
}


