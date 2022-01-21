"use strict"
function recursia(){
  let id= document.querySelector('.idSession');
  let time=document.querySelector('.timeSession');
  let flag=0;

  fetch('hendler.php')
    .then(response => response.json())
    .then(text => {
      console.log(text);
      id.innerText=text[0];
      let da=parseInt(text[1]);
      time.innerText=da;

    });
  setTimeout(() => {  recursia();  }, 2000);
}
recursia();




