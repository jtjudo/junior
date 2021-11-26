let postPesPage = 3;
const result = document.querySelector('.car-products-wrapper-ajax');

function clickBtn () {
  const btn = document.querySelector('.button-ajax-cars');
  if (btn !== null) {
    btn.addEventListener('click', () => {
      postPesPage = postPesPage + 2;
      ajaxCarsFilter();
    })
  }
}


function ajaxCarsFilter (countEvents = null) {
  let url = '/wp/wp-admin/admin-ajax.php';
  const promise = fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: new URLSearchParams({
      action: 'carsAjax',
      postPesPage: postPesPage,
    })
  })
  return promise.then((response) => {
    response.json()
      .then((resp) => {
        if (result !== null) {
          result.innerHTML = resp.html;
        }
        return resp
      }).then(() => {
      clickBtn();
    })
  })
    .catch(err => console.log(err))
}

ajaxCarsFilter();




