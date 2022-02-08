"use strict"
document.forms.log.addEventListener('submit',
    function (event){
    event.preventDefault();
        //console.log(this.elements['user'].value);
        let log=this.elements['user'].value.trim();
        let pass=this.elements['password'].value.trim();
        if(log.length<2 || pass.length<5){
            //ошибка
        } else {
            fetch('join.php', {
                method: 'post',
                body: new FormData(this)
            })
                .then(response => response.json())
                .then(text =>{
                  let divBloc=document.querySelector('.waring');
                  if (text){
                   divBloc.innerHTML=`
                   <p>Вы успешно авторизировалиись!</p>
                   `;
                  }else {
                    divBloc.innerHTML=`
                   <p>Вы не авторизировалиись!</p>
                   `;
                  }
                });
        }
    });
