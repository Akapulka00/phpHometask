"use strict"
let cake;
let carts =document.querySelectorAll(".cake");
for (let cart of carts ){
  let button=cart.lastElementChild;
  button.addEventListener("click", function(event){
    event.preventDefault();
    let my_id=cart.dataset.id;
    console.log(my_id);
    let url='task4/cake.php?id='+my_id;
    fetch(url)
      .then(response => response.json())
      .then(answer => {
        cake=answer;
        let dialogWindow=document.createElement('div');
        dialogWindow.classList.add("modalDialog");
        dialogWindow.innerHTML=`
    <div class="cakeCart">
       <section class="cake">
    <div class="info">
        <h2>${cake['name']}</h2>
        <p>${cake['description']}</p>
        <p>Стоимость: ${cake['price']} . ${cake['currency']}</p>
        <div class="">
            <img class="cake2" src="task4/images/${cake['main_img']}" width="50px">
        </div>
        <div>
            <? foreach ($cake['imgs'] as $img): ?>
            <img " src="/images/<?= $img?>">
            <? endforeach; ?>
        </div>
        <div class="buy">
            <a href="#">Заказать</a>
        </div>
    </div>
</section>
    </div>
    `;
        let main=document.querySelector("main");
        main.append(dialogWindow);
      });

    console.log("ect")
  });
}
