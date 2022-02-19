
let del=document.querySelector('.deleteById');
del.addEventListener('click', function (e) {
  e.preventDefault();
console.log('Работаеи');
  let  id=document.forms.idcake.id.value;
  let params = new URLSearchParams();
  params.set('id', id);

  fetch('/delcake', {
    method: 'post',
    body: params
  })
    .then(response => response.text())
    .then(text => {
      console.log(text);
      document.querySelector('.waring').innerHTML=`<p>${text}</p>`;
    })
});
