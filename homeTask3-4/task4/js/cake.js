"use strict"

let carts =document.querySelectorAll(".cake");
for (let cart of carts ){
  let button=cart.lastElementChild;
  button.addEventListener("click", function(event){
    event.preventDefault();
    let my_id=cart.dataset.id;
    console.log(my_id);
    let url='cake.php?id='+my_id;
    fetch(url)
      .then(response => response.text())
      .then(answer => {

      });
    let dialogWindow=document.createElement('div');
    dialogWindow.classList.add("modalDialog");
    dialogWindow.innerHTML=`
    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <h2>Модальное окно</h2>

    </div>
    `;
    let main=document.querySelector("main");
    main.append(dialogWindow);
    console.log("ect")
  });
}
