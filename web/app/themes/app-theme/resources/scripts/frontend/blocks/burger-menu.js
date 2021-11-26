const burger = document.querySelector('.header-mobile');
const burger_menu = document.querySelector('.burger-background');
const html = document.querySelector('html');


burger.addEventListener('click', () => {
  burger_menu.classList.add('active-burger-menu');
  html.classList.add('not-scroll');
})



