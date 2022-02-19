
document.forms.idcake.addEventListener('submit', function (e) {
  e.preventDefault();
  document.querySelector('.waring').innerHTML=` `;
  fetch('/getcake', {
    method: 'post',
    body: new FormData(this)
  })
    .then(response => response.json())
    .then(data => {
      console.log(data);
      if(typeof(data)!="string"){
      let div=document.querySelector('.massage');
      div.innerHTML=`
<table  width="100%">
<caption>Информация о товаре</caption>
  <tr>
    <th>Фото</th>
    <th>Название</th>
    <th>описание</th>
    <th>Стоимость, руб.</th>
  </tr>
  <tr>
  <td><img src="/img/${data['pic']}"></td>
  <td>${data['title']}</td>
  <td>${data['description']}</td>
  <td>${data['price']}</td>
  </tr>
 </table>
      `;
      }else {
        let div=document.querySelector('.massage');
        div.innerHTML=`<p>${data}</p>`;

      }
    })
});
