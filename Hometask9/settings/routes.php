<?php

return [
    [
        'path' => '/',
        'method' => 'GET',
        'controller' => 'Cakes\Controllers\IndexController::index'
    ],
    [
    'path' => '/cakeform',
    'method' => 'GET',
    'controller' => 'Cakes\Controllers\AddCakesController::formCake'
    ],
    [
    'path' => '/addcake',
    'method' => 'POST',
    'controller' => 'Cakes\Controllers\AddCakesController::addCake'
   ],
  [
    'path' => '/cake',
    'method' => 'GET',
    'controller' => 'Cakes\Controllers\AddCakesController::showCake'
  ],
  [
    'path' => '/getcake',
    'method' => 'POST',
    'controller' => 'Cakes\Controllers\AddCakesController::printcakeById'
  ],
  [
    'path' => '/getcake',
    'method' => 'GET',
    'controller' => 'Cakes\Controllers\AddCakesController::getCakeByID'
  ],
  [
    'path' => '/delcake',
    'method' => 'POST',
    'controller' => 'Cakes\Controllers\AddCakesController::delCakeById'
  ]


];
