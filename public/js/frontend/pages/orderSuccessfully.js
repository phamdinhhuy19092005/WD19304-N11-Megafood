document.getElementById('orderButton').addEventListener('click', function () {
    const overlay = document.getElementById('successOverlay');
    overlay.style.display = 'flex'; // Hiển thị overlay
  });
  
  document.getElementById('closeOverlay').addEventListener('click', function () {
    const overlay = document.getElementById('successOverlay');
    overlay.style.display = 'none'; // Ẩn overlay
  });
  