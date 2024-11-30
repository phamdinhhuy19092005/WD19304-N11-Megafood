document.querySelectorAll('.coupon_code').forEach((button) => {
    button.addEventListener('click', function () {
        // Lấy nội dung mã voucher từ thẻ <b>
        const textVoucher = button.closest('.content_voucher').querySelector('b') ? button.closest('.content_voucher').querySelector('b').innerText : '';

        if (textVoucher) {
            // Sao chép vào clipboard
            navigator.clipboard.writeText(textVoucher)
                .then(() => {
                    const notification_voucher = document.createElement("div");
                    notification_voucher.className = "notification_voucher";
                    notification_voucher.innerHTML = `
                        <div class="notification_container">Đã lưu voucher: ${textVoucher}</div>
                    `;
                    document.body.appendChild(notification_voucher);
                    notification_voucher.style.display = "block";

                    setTimeout(() => {
                        notification_voucher.style.display = "none"; // Ẩn thông báo sau 3 giây
                    }, 3000);
                })
                .catch(err => {
                    console.error('Không sao chép được: ', err);
                });
        } else {
            console.error('Không tìm thấy mã voucher');
        }
    });
});
