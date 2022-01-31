<?php
require_once  "ComandBuilder.php";
require_once 'ComandInterfase.php';
require_once 'commands.php';
class AddHandler extends ComandBuilder implements ComandInterfase {

  function getName($name)
  {
    echo $name;
  }
  function help($name)
  {
    echo "$name-метод для вывода количества гусей \n";
  }
  function execute()
  {
    $two=2;
    for ($i=0;$i<10;$i++){
      $two+=$two+$i;
    }
    echo "$two Гусей";
  }

}
