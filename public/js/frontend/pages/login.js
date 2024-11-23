$(document).ready(function () {
    $('.toggleForm').on('click', function () {
        $('#login, #recover-password').toggleClass('hidden');
    });
});