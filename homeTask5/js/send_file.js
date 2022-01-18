"use strict"

function sender(){
  let waring= document.querySelector(".waring");

  document.forms['send-files'].addEventListener('submit', function (event){
    event.preventDefault();
    let files = this.elements.thfile.files;
    waring.innerHTML=" ";
    if(files.length>4){
    let soob=document.querySelector(".soob");
    soob.innerText=`ВНИМАНИЕ:Слишком много файлов! Вами было загруженно ${files.length} документов уменьшите их количество до 4`;
      return;
    }

    for (let i=0; i<files.length;i++){
      let file = this.elements.thfile.files[i]; // File
      console.log(file.name); // имя файла на компьютере пользователя
      console.log(file.size); // размер файла
      console.log(file.type); // тип файла
      console.log(file.lastModified); // последнее изменение файла
      let fd = new FormData();
      fd.set('thfile', file);
      fetch('/handler.php',  {
        method: 'post',
        body: fd
      })
        .then(response => response.text())
        .then(text => {
          let soob=document.createElement("p");
          soob.innerText=text;
          waring.append(soob);
          return;
        });
    }


  });
}
sender();
