const button = document.querySelector('.header-button');
const background = document.querySelector('.button-modal');
const modalContainer = document.querySelector('.modal-container');
const picture_modal = document.querySelector('.header-button-btn-mobile');
const output = document.querySelector('.button-modal-output');


function closeModal (eventClose) {
  eventClose.addEventListener('click', () => {
    background.classList.remove('active-model');
    modalContainer.classList.remove('active-model');
  })
}

closeModal(background);
closeModal(output);


button.addEventListener('click', () => {
  background.classList.add('active-model');
  modalContainer.classList.add('active-model');
})

picture_modal.addEventListener('click', () => {
  background.classList.add('active-model');
  modalContainer.classList.add('active-model');
})

