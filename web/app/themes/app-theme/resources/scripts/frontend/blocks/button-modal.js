const button = document.querySelector('.header-button');
const modal = document.querySelector('.button-modal');


button.addEventListener('click', () => {
  modal.classList.add('active-model');
})

modal.addEventListener('click', () => {
  modal.classList.remove('active-model');
})
