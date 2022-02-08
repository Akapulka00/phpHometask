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
    $sql = "SELECT login  FROM tb_users WHERE password= ?";
    require_once 'DbConection.php';
    $connection = DbConection::getInstance()->getConnection();
    $statement = $connection->prepare($sql);
    $statement->execute([$pass]);
    $result=$statement->fetch(PDO::FETCH_ASSOC);

    echo($result['login']);
}