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
<main>
  <form method="post" name="regForm" action="registration.php">
    <input type="text" name="phone" placeholder="+7 (xxx) xxxxxxx ">
    <input type="text" name="login" placeholder="Логин">
    <input type="email" name="email" placeholder="Адресс электронной почты">
    <input type="password" name="password" placeholder="Пороль">
    <input type="password" name="repassword" placeholder="Повторите Пороль">
    <input type="submit" value="Зарегистрироваться">
  </form>
</main>
</body>
</html>
