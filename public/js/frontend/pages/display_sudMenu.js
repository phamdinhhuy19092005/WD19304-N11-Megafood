document.querySelectorAll('.toggle-menu').forEach(icon => {
    icon.addEventListener('click', function () {
        const parentCategory = this.closest('.nav_item_category');
        parentCategory.classList.toggle('active');
    });
});