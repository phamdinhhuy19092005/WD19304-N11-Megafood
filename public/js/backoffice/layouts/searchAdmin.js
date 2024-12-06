document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const tableBody  = document.querySelector(".search_list");
    const rows  = Array.from(tableBody.querySelectorAll("tr")); // Chỉ lấy các <li> có class .search_list


    searchInput.addEventListener("input", function () {
        const filter = searchInput.value.trim().toLowerCase(); // Loại bỏ khoảng trắng và chuyển chữ thường

        let hasResults = false; // Kiểm tra có mục nào hiển thị không

        // Lọc các phần tử trong danh sách
        rows.forEach(row => {
            const rowtext = row.textContent.toLowerCase();
            if (rowtext.includes(filter)) {
                row.style.display = ""; // Hiển thị phần tử khớp
                hasResults = true;
            } else {
                row.style.display = "none"; // Ẩn phần tử không khớp
            }
        });

        
    });

    
});