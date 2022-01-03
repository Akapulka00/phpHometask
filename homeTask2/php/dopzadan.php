<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: choose_yacht.php');
}
$post = $_POST;
function proverka($log,$pass){
  if ($log=='qwe'&& $pass=="123"){
    return true;
  }
  return false;
}
if(proverka($post['user'],$post['password'])){
  print_r("Вход выполнен!");
}else{ print_r("Вход провален!");}



