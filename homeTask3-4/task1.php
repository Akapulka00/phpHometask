<?php
$items= require_once 'task1/items-data.php';
//var_dump($items);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <title>Информация о всех отоварах</title>
</head>
<body>
<header class="heat flex-row">
  <div class="col-3">

  </div>
  <div class="col-3">

  </div>
  <div class="col-3">

  </div>
  <div class="col-3 iconCard">
    <a class="iconLog"  href=""><img style="width: 30px" src="task1/images/icon.svg"></a>
  </div>
</header>
<section class="flex-row margin">
  <?php foreach ($items as $item):?>
    <div class="col-4 menu">
      <img height="300" src="task1/images/<?=$item['image']?>">
      <h2><?= $item['title']?></h2>
      <p><?= $item['price'] ?> ₽</p>
      <?php if ($item['count']<=0):?>
        <h2 class="massegeSoldOut">Товар закончился!</h2>
      <?php else: ?>
        <a class="cardInfo" href="task1/item.php?id=<?= $item['id'] ?>">Подробнее</a>
      <?php endif;?>
    </div>
  <?php endforeach;?>
</section>
<script src="task1/js/main.js"></script>
</body>
</html>
