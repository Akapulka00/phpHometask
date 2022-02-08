<?php
joinfunc();
function joinfunc(){
    $post=$_POST;
    /*
    if(($post['user']=='qwe')&&($post['password']=='123')){
        echo true;
    }else{
        echo false;
    }*/
    $log=$post['user'];
    $pass=$post['password'];
    $sql = "SELECT login  FROM tb_users WHERE login = ?  && password = ?";
    require_once 'DbConection.php';
    $connection = DbConection::getInstance()->getConnection();
    $statement = $connection->prepare($sql);
    $statement->execute([$log,$pass]);
    $result=$statement->fetch(PDO::FETCH_ASSOC);
    if (isset($result['login'])){
      echo json_encode(true);
    }else{
      echo json_encode(false);
    }

}
