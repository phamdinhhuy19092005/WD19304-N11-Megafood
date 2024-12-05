document.addEventListener("DOMContentLoaded", function () {
    const table = document.querySelector(".data_table");
    const tbody = table.querySelector(".search_list");
    const headers = table.querySelectorAll("thead th[data-sort]"); // Chỉ các cột có data-sort
    let sortDirection = 1; // 1: tăng dần, -1: giảm dần

    headers.forEach(header => {
        header.addEventListener("click", function () {
            const sortKey = header.getAttribute("data-sort");
            const rows = Array.from(tbody.querySelectorAll("tr"));

            // Đảo ngược thứ tự sắp xếp khi nhấp lại
            sortDirection *= -1;

            // Sắp xếp các hàng dựa trên giá trị trong cột
            rows.sort((a, b) => {
                const aValue = a.querySelector(`.${sortKey}`).textContent.trim();
                const bValue = b.querySelector(`.${sortKey}`).textContent.trim();

                // Kiểm tra nếu là số
                if (!isNaN(aValue) && !isNaN(bValue)) {
                    return sortDirection * (Number(aValue) - Number(bValue));
                }

                // So sánh chuỗi
                return sortDirection * aValue.localeCompare(bValue);
            });

            // Gắn lại các hàng đã sắp xếp vào bảng
            rows.forEach(row => tbody.appendChild(row));
        });
    });
});
