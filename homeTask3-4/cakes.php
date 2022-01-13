<?php
$cakes = require_once 'task4/cakes_data.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тортики</title>
    <link rel="stylesheet" href="task4/css/cakes.css">
</head>
<body>
<main>
    <? foreach ($cakes as $cake): ?>
    <div class="cake" data-id="<?= $cake['id'] ?>">
        <h2><?= $cake["name"] ?></h2>
        <div>
            <img src="task4/images/<?= $cake['main_img'] ?>">
        </div>
      <p>Стоимость: <?= $cake['price'] . $cake['currency'] ?></p>
      <a href="cake.php?id=<?= $cake['id'] ?>">Подробнее</a>
    </div>
    <? endforeach; ?>
</main>
<script src="/task4/js/cake.js"></script>
</body>
</html>
