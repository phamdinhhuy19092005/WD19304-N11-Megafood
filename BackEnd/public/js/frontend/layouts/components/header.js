const menuButton = document.querySelector('.tab_menu button');
const menuList = document.querySelector('.list_item_menu_tab');
const overlay = document.querySelector('.overlay');

menuButton.addEventListener('click', (event) => {
    menuList.classList.toggle('active');
    overlay.classList.toggle('active');
    event.stopPropagation();
});

document.addEventListener('click', () => {
    menuList.classList.remove('active');
    overlay.classList.remove('active');
});

menuList.addEventListener('click', (event) => {
    event.stopPropagation();
});

overlay.addEventListener('click', () => {
    menuList.classList.remove('active');
    overlay.classList.remove('active');
});