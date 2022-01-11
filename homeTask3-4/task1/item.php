<?php
$get = $_GET;
$id = $get['id'];
if (!isset($id)) {
  header("Location: task1.php");
}
function getItem(int $id) {
  $items= require_once 'items-data.php';
  foreach ( $items as $item){
    if ($id === $item['id']) return $item;
  }
}
$item=getItem($id);

if(!isset($item)){
  header("Location: task1.php");
}
//var_dump($item);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h2><?= $item['title']?></h2>
<section class="flex-row blox" >
  <div class="col-5">
    <img class="imgItem" height="300" src="images/<?=$item['image']?>">
  </div>
  <div class="col-5">
    <p><?= $item['description'] ?></p>
  </div>
  <div class="col-2 ">
    <p class="count"><?= $item['price'] ?> ₽</p>
  </div>
</section>
</body>
</html>
