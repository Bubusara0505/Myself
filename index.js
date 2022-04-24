let hamburger = document.querySelector('.hamburger');
let MenuNav = document.querySelector('.nav');

hamburger.addEventListener('click', function () {
  hamburger.classList.toggle('is-active');
  MenuNav.classList.toggle('is-active');

})

let dropMenu = document.querySelector('.belive-dropMenu');
let dropButton = document.querySelector('.look-more');

dropMenu.addEventListener('click', function () {
  dropButton.classList.toggle('active');
  dropMenu.classList.toggle('active');
})

let clickOpen = document.querySelector('#clickOpen');
let menuShow = document.querySelector('.belive-dropMenu');

clickOpen.addEventListener('click', function () {
  menuShow.classList.toggle('active');
})

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}