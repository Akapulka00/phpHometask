<?php
require_once  "ComandBuilder.php";
require_once 'ComandInterfase.php';
require_once 'commands.php';
class MulHandler extends ComandBuilder implements ComandInterfase {

  function getName($name)
  {
    echo $name;
  }
  function help($name)
  {
    echo "$name-метод для вывода колличества слоников \n";
  }
  function execute()
  {
    $two=2;
    for ($i=0;$i<10;$i++){
      $two=$two*2;
    }
    echo "$two Слоников";
  }

}
