<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: task1.php');
}
$post = $_POST;

if(($post['user']=='qwe')&&($post['password']=='123')){
  echo true;
}else{
  echo false;
}

// ['значения атрибутов name' => 'значения атрибутов value']

