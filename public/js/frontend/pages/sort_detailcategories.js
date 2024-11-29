function sort_detailcategories(){

document.addEventListener("DOMContentLoaded", () => {
    const productList = document.getElementById("product_List");
    const products = Array.from(productList.children); // Lấy tất cả sản phẩm ban đầu

    document.querySelectorAll(".btn_quick_sort").forEach(button => {
        button.addEventListener("click", (e) => {
            e.preventDefault();
            const sortType = button.getAttribute("data-sort");
            let sortedProducts;

            if (sortType === "az") {
                // Sắp xếp theo tên A-Z
                sortedProducts = [...products].sort((a, b) => 
                    a.getAttribute("data-name").localeCompare(b.getAttribute("data-name"))
                );
            } else if (sortType === "za") {
                // Sắp xếp theo tên Z-A
                sortedProducts = [...products].sort((a, b) => 
                    b.getAttribute("data-name").localeCompare(a.getAttribute("data-name"))
                );
            } else if (sortType === "price-asc") {
                // Sắp xếp theo giá tăng dần
                sortedProducts = [...products].sort((a, b) => 
                    parseInt(a.getAttribute("data-price")) - parseInt(b.getAttribute("data-price"))
                );
            } else if (sortType === "price-desc") {
                // Sắp xếp theo giá giảm dần
                sortedProducts = [...products].sort((a, b) => 
                    parseInt(b.getAttribute("data-price")) - parseInt(a.getAttribute("data-price"))
                );
            }else {
                // Mặc định (theo thứ tự ban đầu)
                sortedProducts = products;
            }

            // Cập nhật lại danh sách sản phẩm
            productList.innerHTML = "";
            sortedProducts.forEach(product => productList.appendChild(product));
        });
    });
});
}

function filter_detailcategories(){

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
    
    }


filter_detailcategories();
sort_detailcategories();