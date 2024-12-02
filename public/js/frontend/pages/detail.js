const thumbnails = document.querySelectorAll('.list_gallery_bottom li img');
const mainImage = document.querySelector('.gallery_top img');
const radios = document.querySelectorAll('.swatch_element input');

function updateMainImage(newSrc) {
    mainImage.style.transition = "transform 0.2s ease, opacity 0.2s ease";
    mainImage.style.transform = "translateX(100%)";
    mainImage.style.opacity = "0"; 

    setTimeout(() => {
        mainImage.src = newSrc; 
        mainImage.style.transform = "translateX(-100%)"; 
    }, 200);

    setTimeout(() => {
        mainImage.style.transform = "translateX(0)"; 
        mainImage.style.opacity = "1";
    }, 400);
}

thumbnails.forEach(thumb => {
    thumb.addEventListener('click', function() {
        updateMainImage(this.src);

        thumbnails.forEach(item => item.classList.remove('selected'));
        thumbnails.forEach(item => item.parentElement.classList.remove('selected'));
        this.parentElement.classList.add('selected');
    });
});

radios.forEach(radio => {
    radio.addEventListener('change', function () {
        let newSrc = "";
        if (this.value === "3 miếng") {
            newSrc = "https://bizweb.dktcdn.net/thumb/medium/100/510/571/products/0003952-crispy-chicken-with-sg-s.png?v=1708679420060";
        } else if (this.value === "5 miếng") {
            newSrc = "https://bizweb.dktcdn.net/thumb/medium/100/510/571/products/0003953-crispy-chicken-with-sg-s.png?v=1708679420060";
        } else if (this.value === "9 miếng") {
            newSrc = "https://bizweb.dktcdn.net/thumb/medium/100/510/571/products/0003954-crispy-chicken-with-sg-s.png?v=1708679420060";
        }

        updateMainImage(newSrc);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Find the closest elements for quantity display and buttons
    const quantityDisplay = document.getElementById('quantity_display');
    const quantityContainer = document.querySelector('.quantity_prd'); // parent of the buttons
    
    // Ensure that the buttons exist within the quantity container
    const btnPlus = quantityContainer.querySelector('.btn_plus');
    const btnMinus = quantityContainer.querySelector('.btn_minus');

    // Check if the buttons are correctly found
    if (btnPlus && btnMinus) {
        // Increase quantity
        btnPlus.addEventListener('click', function() {
            let currentQuantity = parseInt(quantityDisplay.innerText);
            currentQuantity += 1;
            quantityDisplay.innerText = currentQuantity;
        });

        // Decrease quantity, ensuring it doesn't go below 1
        btnMinus.addEventListener('click', function() {
            let currentQuantity = parseInt(quantityDisplay.innerText);
            if (currentQuantity > 1) {
                currentQuantity -= 1;
                quantityDisplay.innerText = currentQuantity;
            }
        });
    }
});

