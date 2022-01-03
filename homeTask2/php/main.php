<?php
$items = [
  [
    'id' => 1,
    'title' => 'Flute',
    'price' => 20000,
  ],
  [
    'id' => 2,
    'title' => 'Guitar',
    'price' => 18000,
  ],
  [
    'id' => 4,
    'title' => 'Drum',
    'price' => 68000,
  ],
  [
    'id' => 3,
    'title' => 'Piano',
    'price' => 68000,
  ],

];
print_r("Задание №1");
function idVos($a,$b){
  if($a['id']==$b['id']){
    return 0;
  }
  return ($a['id']>$b['id'])? -1:1;
}
uasort($items, 'idVos');
function vozNchet($a,$b){
  if($a['id']==$b['id']){
    return 0;
  }
  if($a['id']%2==0 || $b['id']%2==0){
    if ($a['id']%2==0 && $b['id']%2==0 ){
      return ($a['id']<$b['id'])? -1:1;
    }
   if ($a['id']%2==0 ){
      return 1;
    }else{
     return -1;
   }
 }
  return ($a['id']<$b['id'])? -1:1;
}
uasort($items, 'vozNchet');
var_dump($items);
print_r("Задание №2");
function sortTitle($a,$b){
  if($a['title']==$b['title']){
    return 0;
  }
  if($a['title']>$b['title']){
    return 1;
  }else{
    return -1;
  }
}
uasort($items, 'sortTitle');
var_dump($items);
print_r("Задание №3-4*");
$tasks=[
  [
    'title'=>'Задача 1',
    'date'=>date_create('yesterday'),
    'participants'=>['Артур', 'Полина'],
    'closed'=>false
  ],
  [
    'title'=>'Задача 2',
    'date'=>date_create('tomorrow'),
    'participants'=>[],
    'closed'=>false
  ],
  [
    'title'=>'Задача 3',
    'date'=>date_create(),
    'participants'=>['Артур', 'Глеб'],
    'closed'=>false
  ],
  [
    'title'=>'Задача 4',
    'date'=>date_create('yesterday'),
    'participants'=>['Павел', 'Полина'],
    'closed'=>true
  ]
];
function newArr($date,array $tasks){

  $newArr=[
    'new'=>[],
    'zak'=>[],
    'noWipol'=>[]
  ];
  foreach ($tasks as $task){
    if($date>$task['date']){
      $newArr['new'][]=$task;
    }
    if($task['closed']==true){
      $newArr['zak'][]=$task;
    }
    if(($task['closed']==false) && ($date<$task['date']) ){
      $newArr['noWipol'][]=$task;
    }
  }
return  $newArr;
}
$thisDate=Date_create("2013-03-15");
$newArr=newArr($thisDate,$tasks);
var_dump($newArr);
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
<form method="post" action="dopzadan.php">
  <h2>Вход</h2>
  <label for="login">Введите логин:</label>
  <input type="text" id="login" name="user">
  <label for="pas">Введите логин:</label>
  <input type="text" id="pas" name="password">
  <input type="submit" value="Подобрать">
</form>
  <p>Задание №4*</p>
</body>
</html>
