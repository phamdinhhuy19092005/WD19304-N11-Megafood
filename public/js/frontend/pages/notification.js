let favoriteList = []; 
document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".add_to_cart");
  
    buttons.forEach((button) => {
      button.addEventListener("click", () => {
        const productName = button.getAttribute("data-name");
        const productImage = button.getAttribute("data-image");
  
        showNotification(productName, productImage);
      });
    });
  
    function showNotification(name, image) {
      const notification = document.createElement("div");
      notification.className = "notification";
      notification.innerHTML = `
        <div class="notification_container">
          <img src="${image}" alt="${name}" />
          <div class="notification_content">
            <p class="notification_title">Đã thêm vào giỏ:</p>
            <div class="notification_name"><strong>${name}</strong></div>
            <div class="notification_cart"><strong>Bấm vào <a href="../cart/cart.html">đây</a> để tới giỏ hàng</strong></div>
          </div>
        </div>
        <span class="notification-close"><i class="bi bi-x-lg"></i></span>
      `;
  
      document.body.appendChild(notification);
      notification.style.display = "block";
  
      setTimeout(() => {
        notification.remove();
      }, 3000);
  
      //close
      const closeButton = notification.querySelector(".notification-close");
      closeButton.addEventListener("click", () => {
        notification.remove();
      });
    }
  });

  document.addEventListener("DOMContentLoaded", () => {
    const favorites = document.querySelectorAll(".add_to_favorites");
  
    favorites.forEach((icon) => {
      icon.addEventListener("click", () => {
        const productName = icon.getAttribute("data-name");
        const productImage = icon.getAttribute("data-image");
        

        if (icon.classList.contains("active")) {
          // Xóa sản phẩm khỏi danh sách yêu thích
          favoriteList = favoriteList.filter((item) => item.name !== productName);
          icon.classList.remove("active");
          showDeleteNotification(productName,productImage);
          icon.classList.replace("fa-solid", "fa-regular");
        } else {
          // Thêm sản phẩm vào danh sách yêu thích
          favoriteList.push({ name: productName, image: productImage });
          icon.classList.add("active");
          icon.classList.replace("fa-regular", "fa-solid");
          showAddNotification(productName,productImage);
        }
      });
    });
  
    function showAddNotification(message, image) {
      const notification = document.createElement("div");
      notification.className = "notification";
      notification.innerHTML = `
        <div class="notification_add_hearts">
          <img src="${image}" alt="${message}" />
          <div class="notification_content">
          <div class="notification_title">Đã thêm vào yêu thích:</div>
          <div class="notification_name_add">
            <strong>${message}</strong>
          </div>
          <div class="log_list_favorite"><strong>Tới <a href="../favoritesList/favoritesList.html">danh sách yêu thích</a> !</strong></div>
          </div>
        </div>
        <span class="notification-close">&times;</span>
      `;
  
      document.body.appendChild(notification);
      notification.style.display = "block";
  
      setTimeout(() => {
        notification.remove();
      }, 3000);
  
      const closeButton = notification.querySelector(".notification-close");
      closeButton.addEventListener("click", () => {
        notification.remove();
      });
    }
    function showDeleteNotification(message, image) {
        const notification = document.createElement("div");
        notification.className = "notification";
        notification.innerHTML = `
        <div class="notification_delete_hearts">
          <img src="${image}" alt="${message}" />
          <div class="notification_content">
          <div class="notification_title">Đã bỏ yêu thích:</div>
          <div class="notification_name_delete">
            <strong>${message}</strong>
          </div>
          <div class="log_list_favorite"><strong>Tới <a href="../favoritesList/favoritesList.html">danh sách yêu thích</a> !</strong></div>
          </div>
        </div>
        <span class="notification-close">&times;</span>
      `;
    
        document.body.appendChild(notification);
        notification.style.display = "block";
    
        setTimeout(() => {
          notification.remove();
        }, 3000);
    
        const closeButton = notification.querySelector(".notification-close");
        closeButton.addEventListener("click", () => {
          notification.remove();
        });
      }
  });
  


