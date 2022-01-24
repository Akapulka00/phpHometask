<?php

class Item
{
    private $id; // не может быть отрицательным или 0
    private $title; // максимум 10 символов
    private $price; // не может быть отрицательным или 0
    private $material; // минимум 3 символа

    // свойства title и id являются обязательными,

    // добавить все необходимые геттеры и сеттеры

  public function  __construct(string  $title, $id){
    if(strlen($title)<=20 && $id>0){
      $this->id=$id;
      $this->title=$title;
    }elseif (strlen($title)>=20){
      throw new InvalidArgumentException('Ошибка поле title >10');
    }elseif($id<0){
      var_dump($id,$title);
    throw new InvalidArgumentException('Отрицательное поле id');
    }
  }
  public function  postPrice($price){
    if($price>0){
      $this->price=$price;
    }else{
      throw new InvalidArgumentException('Отрицательное значение price');
    }
  }
  public function  postMaterial($material){
    if(strlen($material)>3){
      $this->material=$material;
    }else{
      throw new InvalidArgumentException('Меньше трех символов для поля material ');
    }
  }
  public function postTitle (string  $title)
  {
    if (mb_strlen($title) <= 10) {
      $this->title = $title;
    } else {
      throw new InvalidArgumentException('Ошибка поле title >10');
    }
  }
  public  function  postId( $id){
    if($id>0){
      $this->id=$id;
    }else{
      throw new InvalidArgumentException('Отрицательное поле id');
    }
  }
  public  function  getId(){
    return $this->id;
  }
  public  function  getTitle(){
    return $this->id;
  }
  public  function  getPrice(){
    return $this->price;
  }
  public  function  getMaterial(){
    return $this->material;
  }
  public function secondCosntruct( $price, $material ){
  $this->postPrice($price);
  $this->postMaterial($material);
}

}
