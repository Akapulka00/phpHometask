<?php

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h1>Пожалуйста загрузите картинки!</h1>
<p>Условия:</p>
<ul>
  <li> доступны любые форматы картинок кроме gif</li>
  <li>Размер картинки не должен привышать 1 Мбайт</li>
  <li>Можно загрузить не более 4 картинок!</li>
</ul>
<form name="send-files" >
  <input type="file" multiple accept="image/*" name="thfile">
  <input type="submit" value="Загрузить">
</form>
<div class="waring">
<p class="soob"></p>
</div>
</body>
<script src="js/send_file.js"></script>
</html>
