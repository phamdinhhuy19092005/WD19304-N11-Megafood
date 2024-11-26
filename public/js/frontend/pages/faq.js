
$(document).ready(function () {
    $('.faq h4').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);

        $this.parents('.faq').find('.content').slideToggle(); 
        $this.parents('.faq').toggleClass('active'); 
    });
});

