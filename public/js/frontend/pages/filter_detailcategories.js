document.addEventListener("DOMContentLoaded", () => {
    const checkboxes = document.querySelectorAll(".filter_price input[type='checkbox']");
    const products = document.querySelectorAll("#product_List li");

    const filterProducts = () => {
        const selectedRanges = [];

        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                const id = checkbox.id;
                switch (id) {
                    case "filter_duoi_100-000d":
                        selectedRanges.push({ min: 0, max: 100000 });
                        break;
                    case "filter_100-000d-200-000d":
                        selectedRanges.push({ min: 100000, max: 200000 });
                        break;
                    case "filter_200-000d-300-000d":
                        selectedRanges.push({ min: 200000, max: 300000 });
                        break;
                    case "filter_300-000d-500-000d":
                        selectedRanges.push({ min: 300000, max: 500000 });
                        break;
                }
            }
        });

        // Nếu không có checkbox nào được chọn, hiển thị tất cả sản phẩm
        if (selectedRanges.length === 0) {
            products.forEach(product => {
                product.style.display = "block";
            });
            return;
        }


        products.forEach(product => {
            const price = parseInt(product.getAttribute("data-price"), 10);
            let isVisible = false;

            selectedRanges.forEach(range => {
                if (price >= range.min && price <= range.max) {
                    isVisible = true;
                }
            });

            product.style.display = isVisible ? "block" : "none";
        });
    };

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener("change", filterProducts);
    });

    filterProducts();
});
