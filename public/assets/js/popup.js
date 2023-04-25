window.onload = function() {
    var popup = document.querySelector('.popup-container');
    var closeBtn = document.getElementById('close-btn');

    if (localStorage.getItem('profileCompleted') === null) {
      popup.style.display = 'block';
    }

    closeBtn.onclick = function() {
      popup.style.display = 'none';
      localStorage.setItem('profileCompleted', 'true');
    }
  }
