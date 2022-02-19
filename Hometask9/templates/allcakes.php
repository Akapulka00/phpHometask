<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Тортики</title>
</head>
<body>
<main>
  <?php foreach ($cakes as $cake): ?>
    <p><?= $cake['title'] ?></p>
    <p><?= $cake['description'] ?></p>
    <p><?= $cake['price'] ?></p>
    <img src="/img/<?= $cake['pic'] ?>">
  <?php endforeach; ?>
</main>
</body>
</html>
