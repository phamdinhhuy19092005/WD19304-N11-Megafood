document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const searchResults = document.getElementById("searchResults");
    const items = Array.from(searchResults.querySelectorAll(".search_list")); // Chỉ lấy các <li> có class .search_list

    // Ẩn danh sách khi trang vừa tải
    searchResults.style.display = "none";

    searchInput.addEventListener("input", function () {
        const filter = searchInput.value.trim().toLowerCase(); // Loại bỏ khoảng trắng và chuyển chữ thường

        // Nếu không có từ khóa, ẩn danh sách
        if (filter === "") {
            searchResults.style.display = "none";
            items.forEach(item => item.style.display = "none"); // Ẩn tất cả <li>
            return;
        }

        let hasResults = false; // Kiểm tra có mục nào hiển thị không

        // Lọc các phần tử trong danh sách
        items.forEach(item => {
            const text = item.textContent || item.innerText;
            if (text.toLowerCase().includes(filter)) {
                item.style.display = "flex"; // Hiển thị phần tử khớp
                hasResults = true;
            } else {
                item.style.display = "none"; // Ẩn phần tử không khớp
            }
        });

        // Nếu không có mục nào khớp, ẩn toàn bộ danh sách
        searchResults.style.display = hasResults ? "block" : "none";
    });

    // Đóng danh sách khi click ra ngoài
    document.addEventListener("click", function (event) {
        // Kiểm tra nếu click không phải vào ô input hoặc kết quả tìm kiếm
        if (!searchInput.contains(event.target) && !searchResults.contains(event.target)) {
            searchResults.style.display = "none"; // Ẩn danh sách kết quả
        }
    });
});