// eslint-disable-next-line no-undef
const plus = document.querySelectorAll('.questions-module-wrapper');

plus.forEach((item) => {
  item.addEventListener('click', () => {
    if (item.classList.contains('active')) {
      item.classList.remove('active');
    } else {
      plus.forEach((elem) => {
        elem.classList.remove('active');
      });
      item.classList.add('active');
    }
  });
});
