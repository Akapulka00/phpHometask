<?php
$items = [
  [
    'id' => 1,
    'title' => 'Flute',
    'price' => 20000,
    'img' => 'flute.jpg',
    'description' => [
      'color' => 'white',
      'material' => 'bamboo'
    ]
  ],
  [
    'id' => 2,
    'title' => 'Guitar',
    'price' => 18000,
    'img' => 'guitar.jpg',
    'description' => [
      'color' => 'brown',
      'material' => 'linden'
    ]
  ],
  [
    'id' => 3,
    'title' => 'Drum',
    'price' => 68000,
    'img' => 'drum.jpg',
    'description' => [
      'color' => 'brown',
      'material' => 'steel'
    ]
  ],
];

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Вывод информации из массива</title>
</head>
<body>
<h1>Наш асортимент:</h1>
<section class="flex-row ">
  <?php foreach ($items as $item):?>
  <div class="col-4 menu">
    <img height="300" src="/img/<?=$item['img']?>">
    <h2><?= $item['title']?></h2>
    <p><?= $item['price'] ?> ₽</p>
    <p>Цверт <?=$item['description']['color'] ?> материал <?= $item['description']['material']?> </p>
  </div>
  <?php endforeach;?>
</section>
</body>
</html>
