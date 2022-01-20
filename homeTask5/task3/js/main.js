"use strict"
function hendler(){
  let waring=document.querySelector('.waring');
  let urlForm=document.forms.urlForm;
  document.forms.urlForm.addEventListener('submit', function (e){
    e.preventDefault();
  if(urlForm['URL']==null){
    waring.innerText="Вы не заполнили текстовое поле!";
  }else{
    fetch( "helder.php", {
      method:"post",
      body: new FormData(this)
    }).then(response => response.text())
      .then(text => {

        waring.innerText=text;
      });
  }
  });
}
hendler();
