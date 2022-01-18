<?php
$files = $_FILES;
$tmp_name = $files['thfile']['tmp_name'];
$file_name = $files['thfile']['name'];
$file_name = microtime() . $file_name;
//В начале проверка на 0 $files['thfile']['error'] === 0
if($files['thfile']['type']=="image/gif"){
  echo 'Файл ' . $files['thfile']['name'] . ' не был  получен по причине: недопустимый тип данных!';
}
elseif ($files['thfile']['size']>1000000){
  echo 'Файл ' . $files['thfile']['name'] . ' не был  получен по причине: размерность фала превышает 1 мегабайт!';
}
elseif($files['thfile']['error'] === 0  ) {
       move_uploaded_file($tmp_name, "files/$file_name");
  echo 'Файл ' . $files['thfile']['name'] . ' получен';
} else {
  echo 'Файл не был  получен!';
}
