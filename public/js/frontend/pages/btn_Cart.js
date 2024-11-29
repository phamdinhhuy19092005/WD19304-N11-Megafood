function btnCart() {
    document.addEventListener("DOMContentLoaded", () => {
        const decreaseBtns = document.querySelectorAll('.btn_reduce'); 
        const increaseBtns = document.querySelectorAll('.btn_increase'); 
        const quantityInputs = document.querySelectorAll('.quantity_cart'); 

        quantityInputs.forEach((input, index) => {
            decreaseBtns[index].addEventListener('click', () => {
                let quantity = parseInt(input.value) || 1;
                if (quantity > 1) {
                    quantity -= 1;
                    input.value = quantity; 
                }
            });

            increaseBtns[index].addEventListener('click', () => {
                let quantity = parseInt(input.value) || 1;
                quantity += 1; 
                input.value = quantity; 
            });

            input.addEventListener('input', () => {
                let quantity = parseInt(input.value);
                if (isNaN(quantity) || quantity <= 0) {
                    input.value = 1; 
                }
            });
        });
    });
}

btnCart();
