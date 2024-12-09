function btnProducts(){

  const productList = document.querySelector('.product_topSelling_list');
  const nextBtn = document.querySelector('.next_btn');
  const prevBtn = document.querySelector('.prev_btn');
  
  let currentScrollPosition = 0;
  
  const updateButtons = () => {
    const productWidth = document.querySelector('.product_topSelling_li').offsetWidth + 847; // Bao gồm margin
    const maxScroll = productList.scrollWidth - productList.parentElement.offsetWidth;
  
    // Vô hiệu hóa nút nếu đạt giới hạn
    prevBtn.disabled = currentScrollPosition <= 0;
    nextBtn.disabled = currentScrollPosition >= maxScroll;
  };
  
  const scrollList = (direction) => {
    const productWidth = document.querySelector('.product_topSelling_li').offsetWidth + 847 ; // Bao gồm margin
    const maxScroll = productList.scrollWidth - productList.parentElement.offsetWidth;
  
    // Tính toán vị trí tiếp theo
    currentScrollPosition += direction * productWidth;
  
    // Đảm bảo không vượt quá giới hạn
    currentScrollPosition = Math.max(0, Math.min(currentScrollPosition, maxScroll));
  
    // Áp dụng hiệu ứng
    productList.style.transform = `translateX(-${currentScrollPosition}px)`;
  
    // Cập nhật trạng thái nút
    updateButtons();
  };
  
  // Gán sự kiện cho nút
  nextBtn.addEventListener('click', () => scrollList(1));
  prevBtn.addEventListener('click', () => scrollList(-1));
  
  // Khởi tạo trạng thái nút
  updateButtons();
  }
  
  function btnCategories(){
  
    const productList = document.querySelector('.category_list');
    const nextBtn = document.querySelector('.category_next_btn');
    const prevBtn = document.querySelector('.category_prev_btn');
    
    let currentScrollPosition = 0;
    
    const updateButtons = () => {
      const productWidth = document.querySelector('.category_item').offsetWidth + 21.5; // Bao gồm margin
      const maxScroll = productList.scrollWidth - productList.parentElement.offsetWidth;
    
      // Vô hiệu hóa nút nếu đạt giới hạn
      prevBtn.disabled = currentScrollPosition <= 0;
      nextBtn.disabled = currentScrollPosition >= maxScroll;
    };
    
    const scrollList = (direction) => {
      const productWidth = document.querySelector('.category_item').offsetWidth + 21.5; // Bao gồm margin
      const maxScroll = productList.scrollWidth - productList.parentElement.offsetWidth;
    
      // Tính toán vị trí tiếp theo
      currentScrollPosition += direction * productWidth;
    
      // Đảm bảo không vượt quá giới hạn
      currentScrollPosition = Math.max(0, Math.min(currentScrollPosition, maxScroll));
    
      // Áp dụng hiệu ứng
      productList.style.transform = `translateX(-${currentScrollPosition}px)`;
    
      // Cập nhật trạng thái nút
      updateButtons();
    };
    
    // Gán sự kiện cho nút
    nextBtn.addEventListener('click', () => scrollList(1));
    prevBtn.addEventListener('click', () => scrollList(-1));
    
    // Khởi tạo trạng thái nút
    updateButtons();
    }
    
    btnCategories();
    btnProducts();
  