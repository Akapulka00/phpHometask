"use strict"
function hendler(){
  let waring=document.querySelector('.waring');
  let regForm=document.forms.regForm;
  document.forms.regForm.addEventListener('submit', function (e){
    e.preventDefault();

    if((regForm['password'].value===regForm['password2'].value) && (regForm['email'].value!=null) && (regForm['login'].value!=null)){
      fetch( "helder.php", {
        method:"post",
        body: new FormData(this)
      }).then(response => response.text())
        .then(text => {
          waring.innerText=text;
        });
      return;
    }
    else if(regForm['email']==null){
      waring.innerText="Введите Email!";
      return;
    }
  else if(regForm['login']==null){
      waring.innerText="Введите логин!";
      return;
    }
    else {
      waring.innerText="Пороли не совпадают!";
      return;
    }
  });
}
hendler();
