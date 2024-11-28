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