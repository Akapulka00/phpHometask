<?php

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Регистрация</title>
</head>
<body>
<form name="regForm" >
  <label for="email">Введите адресс электронной почты</label>
  <input type="email" id="email" name="email">
  <label for="log">Введите логин</label>
  <input type="text" id="log" name="login">
  <label for="pass">Введите пороль</label>
  <input type="password" id="pass" name="password">
  <label for="pass2">Повторите пороль</label>
  <input type="password" id="pass2" name="password2">
  <input type="submit" value="Регистрация">
</form>
<p class="waring"></p>
</body>
<script src="js/main.js"></script>
</html>
