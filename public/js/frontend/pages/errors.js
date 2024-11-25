document.querySelector('.form_login').addEventListener('submit', function(event) {
    let formValid = true;

    // Lấy các input cần kiểm tra
    const lastName = document.getElementById('lastName');
    const firstName = document.getElementById('firstName');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const password = document.getElementById('password');

    // Xóa lỗi cũ
    const errorMessages = document.querySelectorAll('.errors span');
    errorMessages.forEach(span => span.textContent = '');

    // Kiểm tra họ và tên
    if (!lastName.value.trim()) {
        lastName.parentNode.querySelector('.errors span').textContent = 'Họ không được để trống.';
        formValid = false;
    }
    if (!firstName.value.trim()) {
        firstName.parentNode.querySelector('.errors span').textContent = 'Tên không được để trống.';
        formValid = false;
    }

    // Kiểm tra email hợp lệ
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!email.value.match(emailPattern)) {
        email.parentNode.querySelector('.errors span').textContent = 'Email không hợp lệ.';
        formValid = false;
    }

    // Kiểm tra số điện thoại
    const phonePattern = /^[0-9]{10,11}$/;
    if (!phone.value.match(phonePattern)) {
        phone.parentNode.querySelector('.errors span').textContent = 'Số điện thoại phải có 10 hoặc 11 chữ số.';
        formValid = false;
    }

    // Kiểm tra mật khẩu
    if (password.value.length < 8) {
        password.parentNode.querySelector('.errors span').textContent = 'Mật khẩu phải có ít nhất 8 ký tự.';
        formValid = false;
    }

    // Ngừng submit nếu có lỗi
    if (!formValid) {
        event.preventDefault();
    }
});
