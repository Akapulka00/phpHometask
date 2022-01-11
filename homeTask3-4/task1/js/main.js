"use strict"
var icon=document.querySelector(".iconLog");
console.log(icon);
var falg=1;
icon.addEventListener("click", function(event){
  falg*=-1;
  event.preventDefault();
  console.log("icon");
  var cart=document.querySelector('.iconCard');
  var newElem=document.createElement("div");
  if(falg==-1){
    newElem.innerHTML=`
  <form method="post" action="obrabotch.php" name="log">
  <label for="login">Введите логин:</label>
  <input type="text" id="login" name="user">
  <label for="pas">Введите порль:</label>
  <input type="text" id="pas" name="password">
  <input type="submit" value="Подобрать">
</form>
<div class="entry_message"></div>
  `;
    newElem.classList.add("iconFilds");

  }else{
     newElem=document.querySelector('.iconFilds').remove();
  }

  cart.append(newElem);
  /////////////////////////////
  var exite_message=document.createElement("div");
  document.forms.log.addEventListener('submit',
    function (event){
      event.preventDefault();
      // проверки
      fetch('task1/login.php', {
        method: 'post',
        body: new FormData(this)
      })
        .then(response => response.text())
        .then(text => {
          if(document.querySelector('.exite_message')!==null){
            document.querySelector('.exite_message').remove('.exite_message');
          }
          var th_exite_message=  document.querySelector('.entry_message');
          var masage=document.createElement("p");
          masage.classList.add("exite_message");
          if(text==true){
            newElem=document.querySelector('.iconFilds').remove();
            falg=2;
            var аllOkMass=document.createElement("p");
            аllOkMass.innerText="Вы успешно авторизированны!";
            аllOkMass.classList.add(".аllOkMass");
            cart.append(аllOkMass);

          }else {
            masage.innerText='Не удалось авторизоваться!';
            th_exite_message.append(masage);
          }

        });
    });
});

