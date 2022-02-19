
document.forms.addcake.addEventListener('submit', function (e) {
  e.preventDefault();
  fetch('/addcake', {
    method: 'post',
    body: new FormData(this)
  })
    .then(response => response.text())
    .then(text => {
      console.log(text);
    })
});
