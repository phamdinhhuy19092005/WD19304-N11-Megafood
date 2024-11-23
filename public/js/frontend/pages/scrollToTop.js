document.addEventListener("DOMContentLoaded", () => {
    const scrollToTop = document.getElementById("scrollToTop");

    // Hiển thị nút khi cuộn xuống 200px
    window.addEventListener("scroll", () => {
        if (window.scrollY > 200) {
            scrollToTop.classList.add("show");
        } else {
            scrollToTop.classList.remove("show");
        }
    });

    // Cuộn lên đầu trang khi nhấn vào nút
    scrollToTop.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth" // Cuộn mượt
        });
    });
});