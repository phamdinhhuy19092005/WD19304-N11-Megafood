const menuButton = document.querySelector('.tab_menu button');
const menuList = document.querySelector('.list_item_menu_tab');
const overlay = document.querySelector('.overlay');

// Mở/đóng menu khi nhấn nút
menuButton.addEventListener('click', (event) => {
    menuList.classList.toggle('active');  // Mở/đóng menu
    overlay.classList.toggle('active');   // Mở/đóng overlay
    event.stopPropagation(); // Ngừng sự kiện để không bị đóng khi click vào menu
});

// Đóng menu nếu click vào bất kỳ đâu ngoài menu hoặc overlay
document.addEventListener('click', () => {
    menuList.classList.remove('active');
    overlay.classList.remove('active');
});

// Ngừng sự kiện click khi nhấn vào menu để không bị đóng ngay lập tức
menuList.addEventListener('click', (event) => {
    event.stopPropagation(); // Ngừng sự kiện để menu không bị đóng
});

// Ngừng sự kiện click khi nhấn vào overlay để không đóng menu
overlay.addEventListener('click', () => {
    menuList.classList.remove('active');  // Đóng menu
    overlay.classList.remove('active');   // Đóng overlay
});
