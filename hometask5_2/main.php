<?php
session_start();
$_SESSION['id'] = session_id();
$_SESSION['newtime'] = time()+6;// меняет каждые 6 секунд
var_dump($_SESSION['newtime']);
session_regenerate_id();

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Считаем время</title>
</head>
<body>
<h2>Время перезагрузки сеанса 10 минут</h2>
<span>Текущее Id:</span><span class="idSession"></span>
<p>Время перезапуска страницы:</p><span class="timeSession"></span>
</body>
<script src="main.js"></script>
</html>
