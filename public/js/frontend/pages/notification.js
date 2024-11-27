let favoriteList = JSON.parse(sessionStorage.getItem("favorites")) || []; 
let cart = JSON.parse(sessionStorage.getItem("cart")) || []; 

document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".add_to_cart");
    const notificationContainer = document.createElement("div");
    notificationContainer.className = "notification-container";
    document.body.appendChild(notificationContainer);
  
    buttons.forEach((button) => {
      button.addEventListener("click", () => {
        const productId = button.getAttribute("data-id");
        const productName = button.getAttribute("data-name");
        const productImage = button.getAttribute("data-image");
        const productPrice = button.getAttribute("data-price");

        const existingProductIndex = cart.findIndex(item => item.id === productId);

        if (existingProductIndex === -1) {
                // Nếu sản phẩm chưa có trong giỏ hàng, thêm vào giỏ
                cart.push({id: productId, name: productName, image: productImage, price: productPrice, quantity: 1});
                showNotification(productName, productImage, "Đã thêm vào giỏ hàng");
            } else {
                // Nếu sản phẩm đã có, tăng số lượng sản phẩm lên
                cart[existingProductIndex].quantity += 1;
                showNotification(productName, productImage, "Sản phẩm đã được cập nhật trong giỏ hàng");
            }
        sessionStorage.setItem("cart", JSON.stringify(cart));
      });
    });
  
    function showNotification(name, image, message) {
      const notification = document.createElement("div");
      notification.className = "notification";
      notification.innerHTML = `
        <div class="notification_container" style="max-width: 300px;height: 100px;">
          <img src="${image}" alt="${name}" />
          <div class="notification_content">
            <p class="notification_title" style="font-weight: bold;">${message}:</p>
            <div class="notification_name"><strong>${name}</strong></div>
        </div>
        <br>
        <br>
      `;
  
      document.body.appendChild(notification);
      notification.style.display = "block";
  
      setTimeout(() => {
        notification.remove();
      }, 3000);
    }
  });


  // yêu thích
  document.addEventListener("DOMContentLoaded", () => {
    const favorites = document.querySelectorAll(".add_to_favorites");
  
    favorites.forEach((icon) => {
        const productId = icon.getAttribute("data-id");

      if (favoriteList.some((item) => item.id === productId)) {
        icon.classList.add("active");
        icon.classList.replace("fa-regular", "fa-solid");
      }

      icon.addEventListener("click", () => {
        const productId = icon.getAttribute("data-id");
        const productName = icon.getAttribute("data-name");
        const productImage = icon.getAttribute("data-image");

        if (icon.classList.contains("active")) {
          // Xóa sản phẩm khỏi danh sách yêu thích
          favoriteList = favoriteList.filter((item) => item.id !== productId);
          icon.classList.remove("active");
          icon.classList.replace("fa-solid", "fa-regular");
          showDeleteNotification(productName,productImage);
        } else {
          // Thêm sản phẩm vào danh sách yêu thích
          favoriteList.push({id: productId, name: productName, image: productImage });
          icon.classList.add("active");
          icon.classList.replace("fa-regular", "fa-solid");
          showAddNotification(productName,productImage);
        }
        sessionStorage.setItem("favorites", JSON.stringify(favoriteList));
      });
    });
  
    function showAddNotification(message, image) {
      const notification = document.createElement("div");
      notification.className = "notification";
      notification.innerHTML = `
        <div class="notification_add_hearts">
          <img src="${image}" alt="${message}" />
          <div class="notification_content">
          <div class="notification_title" style="font-weight: bold;">Đã thêm vào yêu thích:</div>
          <div class="notification_name_add">
            <strong>${message}</strong>
          </div>
        </div>
      `;
  
      document.body.appendChild(notification);
      notification.style.display = "block";
  
      setTimeout(() => {
        notification.remove();
      }, 3000);
  
    //   const closeButton = notification.querySelector(".notification-close");
    //   closeButton.addEventListener("click", () => {
    //     notification.remove();
    //   });
    }
    function showDeleteNotification(message, image) {
        const notification = document.createElement("div");
        notification.className = "notification";
        notification.innerHTML = `
        <div class="notification_delete_hearts">
          <img src="${image}" alt="${message}" />
          <div class="notification_content">
          <div class="notification_title" style="font-weight: bold;">Đã bỏ yêu thích:</div>
          <div class="notification_name_delete">
            <strong>${message}</strong>
          </div>
        </div>
      `;
    
        document.body.appendChild(notification);
        notification.style.display = "block";
    
        setTimeout(() => {
          notification.remove();
        }, 3000);
    
        // // const closeButton = notification.querySelector(".notification-close");
        // closeButton.addEventListener("click", () => {
        //   notification.remove();
        // });
      }
  });
  


