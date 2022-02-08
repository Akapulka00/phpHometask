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
            console.log("переходим");
            fetch('join.php', {
                method: 'post',
                body: new FormData(this)
            })
                .then(response => response.text())
                .then(text => console.log(text));
        }
    });