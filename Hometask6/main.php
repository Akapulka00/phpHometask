<?php
// создать объекты Item (товар) и ItemStore (хранилище),
// добавить товары в хранилище
// вызвать методы поиска товаров в хранилище:
    // get_by_material,
    // get_by_price_and_material,
    // get_by_price

require_once 'Item.php';
require_once  'ItemStorage.php';

$skripka= new  Item("Скрипка",1);
$skripka->secondCosntruct(100,"Деерево");
$gitara= new  Item("Гитара",2);
$gitara->secondCosntruct(50,"Пластик");
$roial= new  Item("Рояль",3);
$roial->secondCosntruct(1000,"Металл");

$store= new ItemStorage();
$store->add_item($skripka);
$store->add_item($gitara);
$store->add_item($roial);

var_dump($store->get_by_material("Деерево","Пластик"));
var_dump($store->get_by_price_and_material(101, "Деерево"));
var_dump($store->get_by_price(1, 50));

