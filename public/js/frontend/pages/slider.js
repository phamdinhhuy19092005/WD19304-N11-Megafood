const listimg = document.querySelector('.list-img');
const imgs = document.querySelectorAll('.list-img img'); // Đổi sang `querySelectorAll` để đảm bảo chọn đúng
const left = document.querySelector(".left");
const right = document.querySelector(".right");

const length = imgs.length;
let i = 0; // Chỉ số hiện tại

// Hàm tính toán kích thước và chuyển đổi slide
const updateSlidePosition = () => {
    const width = imgs[0].offsetWidth; // Lấy chiều rộng của ảnh
    listimg.style.transform = `translateX(${-width * i}px)`; // Chuyển slide
};

// Hàm chuyển slide sang phải
const rightChangeSlide = () => {
    if (i >= length - 1) { // Nếu đến ảnh cuối cùng
        i = 0; // Quay về ảnh đầu
    } else {
        i++; // Chuyển sang ảnh tiếp theo
    }
    updateSlidePosition();
};

// Hàm chuyển slide sang trái
const leftChangeSlide = () => {
    if (i <= 0) { // Nếu đang ở ảnh đầu tiên
        i = length - 1; // Quay về ảnh cuối cùng
    } else {
        i--; // Chuyển sang ảnh trước đó
    }
    updateSlidePosition();
};

// Thiết lập tự động chạy slide
let eventChangeSlide = setInterval(rightChangeSlide, 3000);

// Xử lý sự kiện nút bên phải
right.addEventListener('click', () => {
    clearInterval(eventChangeSlide); // Dừng tự động
    rightChangeSlide(); // Chuyển slide
    eventChangeSlide = setInterval(rightChangeSlide, 3000); // Khởi động lại tự động
});

// Xử lý sự kiện nút bên trái
left.addEventListener('click', () => {
    clearInterval(eventChangeSlide); // Dừng tự động
    leftChangeSlide(); // Chuyển slide
    eventChangeSlide = setInterval(rightChangeSlide, 3000); // Khởi động lại tự động
});
