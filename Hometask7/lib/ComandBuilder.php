<?php
abstract class  ComandBuilder{
  public static function getCommand( string $commandName ){
    $class_name = ucfirst($commandName) . 'Handler'; // 'AddHandler'
    require_once $class_name . '.php';
    $handler = new $class_name();
    return $handler;
  }
}
