let hamburger = document.querySelector('.hamburger');
let MenuNav = document.querySelector('.nav');

hamburger.addEventListener('click', function () {
  hamburger.classList.toggle('is-active');
  MenuNav.classList.toggle('active');
});