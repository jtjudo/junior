const formApplication = document.querySelector('.form-application');
const btnApplication = document.querySelector('.hero-module-button');
const background = document.querySelector('.overlay');
const html = document.querySelector('html');
const closeFormApplication = document.querySelector('.form-application-btn');

  btnApplication.addEventListener('click', () => {
  formApplication.classList.add('active-form');
    html.classList.add('scrol-block');
    background.classList.add('active-backround');
});
closeFormApplication.addEventListener('click',()=>{
  formApplication.classList.remove('active-form');
  html.classList.remove('scrol-block');
  background.classList.remove('active-backround');
})

