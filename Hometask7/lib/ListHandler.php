<?php
require_once  "ComandBuilder.php";
require_once 'ComandInterfase.php';
require_once 'commands.php';
class ListHandler extends ComandBuilder implements ComandInterfase {

function getName($name)
{
  echo "rwas";
}
function help($name)
{
echo "$name-Метод для вывода информациии о всех используемых методах \n";
}
function execute()
{
  $arr=getMetods();
  foreach ($arr as $key=>$met){
  $helder=ComandBuilder::getCommand($key);
  echo "$key :";
  $helder->help($key);
}
}

}
