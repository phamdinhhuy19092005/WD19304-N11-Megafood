function menuItem(){

const menuItem = document.querySelectorAll('.menu_item');

menuItem.forEach((item) => {
    item.addEventListener('click', function (){
        menuItem.forEach((el) => el.classList.remove('active'));

        this.classList.add('active');
    });
});
}


function sortItem(){

    const sortItem = document.querySelectorAll('.btn_quick_sort');
    
    sortItem.forEach((item) => {
        item.addEventListener('click', function (){
            sortItem.forEach((el) => el.classList.remove('active'));
    
            this.classList.add('active');
        });
    });
    }


sortItem();
menuItem();