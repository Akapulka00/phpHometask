<?php
const FILE_NAME = 'file/file.txt';
$post=$_POST;
$data=$post["email"] .",".$post["login"].",".$post["password"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $str_from_file = file_get_contents(FILE_NAME);
  $user=explode(" ", $str_from_file);
  array_pop($user);
  $haveFlag=0;
  foreach ($user as $value){
    $str=explode(",", $value);
    if ($str[0]==$post["email"]&&$str[1]==$post["login"]){
      if($str[0]==$post["email"]){
        $haveFlag=1;
      }else{
        $haveFlag=2;
      }

    }
  }
  if($haveFlag==0){
    if (file_put_contents(FILE_NAME, $data. " ", LOCK_EX | FILE_APPEND) !== false){
      echo 'Вы успешно зарегистрированны!';
    } else {
      echo 'Ошибка регистрации попробуйте позже';
    }
  }else{
    if ($haveFlag==1){
      echo 'Ошибка регистрации такой Email  уже существуют!';
    }else{
      echo 'Ошибка регистрации такой  Login уже существуют!';
    }

  }

}


?>
