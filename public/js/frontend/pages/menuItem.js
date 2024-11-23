const menuItem = document.querySelectorAll('.menu_item');

menuItem.forEach((item) => {
    item.addEventListener('click', function (){
        menuItem.forEach((el) => el.classList.remove('active'));

        this.classList.add('active');
    });
});