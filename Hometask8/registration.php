<?php
registration();

function registration(){
  $post=$_POST;
  if($post['password']!=$post['repassword']){
    echo "Ошибка вы ввели  разные пороли";
  }else{
    require_once 'DbConection.php';
    $connection = DbConection::getInstance()->getConnection();//getInstance()->getConnection()
    $sql = "INSERT INTO tb_users(email,login, phone,password) VALUE (:email_param,
    :login_param, :phone_param, :password_param );";
    $params = [
      'email_param'=>$post['email'],
      'login_param' => $post['login'],
      'phone_param' => $post['phone'],
      'password_param' => $post['password']
    ];

    $statement = $connection->prepare($sql);
     $statement->execute($params);
     echo "Вы успешно зарегистрировались!";
  }
}
