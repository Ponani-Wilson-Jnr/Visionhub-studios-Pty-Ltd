const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
});


// Enable tap to flip on mobile
const serviceItems = document.querySelectorAll('.service-item-inner');

serviceItems.forEach(item => {
  item.addEventListener('click', () => {
    // Only apply on screens <= 768px
    if(window.innerWidth <= 768) {
      item.classList.toggle('flipped');
    }
  });
});
