// Lấy danh sách yêu thích từ LocalStorage
function getFavorites() {
    return JSON.parse(localStorage.getItem("favorites")) || [];
}

// Lưu danh sách yêu thích vào LocalStorage
function saveFavorites(favorites) {
    localStorage.setItem("favorites", JSON.stringify(favorites));
}

// Xử lý sự kiện click vào biểu tượng trái tim
function toggleFavorite(event) {
    const icon = event.target;
    const productId = icon.getAttribute("data-id");
    const productName = icon.getAttribute("data-name");
    const productImage = icon.getAttribute("data-image");

    let favorites = getFavorites();

    const existingFavorite = favorites.find(fav => fav.id === productId);

    if (existingFavorite) {
        // Xóa khỏi danh sách yêu thích
        favorites = favorites.filter(fav => fav.id !== productId);
        icon.classList.remove("fa-solid");
        icon.classList.add("fa-regular");
    } else {
        // Thêm vào danh sách yêu thích
        favorites.push({ id: productId, name: productName, image: productImage });
        icon.classList.remove("fa-regular");
        icon.classList.add("fa-solid");
    }

    saveFavorites(favorites);
}

// Đánh dấu các mục đã được yêu thích khi tải lại trang
function markFavorites() {
    const favorites = getFavorites();
    const icons = document.querySelectorAll(".add_to_favorites");

    icons.forEach(icon => {
        const productId = icon.getAttribute("data-id");

        if (favorites.some(fav => fav.id === productId)) {
            icon.classList.remove("fa-regular");
            icon.classList.add("fa-solid");
        } else {
            icon.classList.remove("fa-solid");
            icon.classList.add("fa-regular");
        }
    });
}

// Gán sự kiện click cho tất cả biểu tượng trái tim
function setupFavoriteListeners() {
    const icons = document.querySelectorAll(".add_to_favorites");

    icons.forEach(icon => {
        icon.addEventListener("click", toggleFavorite);
    });
}

// Khởi chạy
document.addEventListener("DOMContentLoaded", () => {
    markFavorites();
    setupFavoriteListeners();
});
