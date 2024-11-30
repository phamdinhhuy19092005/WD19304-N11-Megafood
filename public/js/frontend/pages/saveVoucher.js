//save vourcher

document.querySelectorAll('.coupon_code').forEach((button, index) => {
    button.addEventListener('click', function () {
        // Lấy nội dung mã voucher từ thẻ <b>
        const textVoucher = button.parentElement.querySelector('b').innerText;

        // Sao chép vào clipboard
        navigator.clipboard.writeText(textVoucher)
            .then(() => {
                alert("Đã lưu mã voucher: " + textVoucher);
            })
            .catch(err => {
                console.error('Không sao chép được: ', err);
            });
    });
});

