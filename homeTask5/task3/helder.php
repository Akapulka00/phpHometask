<?php
const FILE_NAME = 'file/file.txt';
$post=$_POST;
$URD=$post['URL'];
$nextURD=trim($URD);
$time=time();
$BufStr=0;
$haveFlag=0;
$urdFlag=!filter_var($URD, FILTER_VALIDATE_URL);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $str_from_file = file_get_contents(FILE_NAME);
  $user = explode(" ", $str_from_file);
  array_pop($user);
  foreach ($user as $value) {
    $str = explode(",", $value);
    if ($str[0] == $URD) {
      $haveFlag = 1;
      $BufStr = $str;
    }
  }
  if ($haveFlag == 1) {
    //если присутствует, то получить из файла короткую ссылку и вывести на экран
    echo $BufStr[1];
  } else {

    $nextURD = intval($nextURD, 36);
    $data = $post['URL'] . "," . $nextURD . "," . $time;
    if (file_put_contents(FILE_NAME, $data . " ", LOCK_EX | FILE_APPEND) !== false) {
      echo 'Хеш получен!';
    } else {
      echo 'Ошибка регистрации попробуйте позже';
    }
    if ($haveFlag == 1) {
      $str_from_file2 = file_get_contents(FILE_NAME);
      $user2 = explode(" ", $str_from_file2);
      array_pop($user2);
      foreach ($user2 as $value2) {
        $str = explode(",", $value2);
        if ($str[1] == $URD) {

        }
      }
    }

  }

}

?>
