<?php
session_start();
$session=$_SESSION;
$time=time();
$ntime=$session['newtime'];
$id=$session['id'];
$buff=[];
$buff[2]=time();

if($time>=$ntime){
  session_regenerate_id();
  $_SESSION['id'] = session_id();
  $_SESSION['newtime'] = time()+6;
}
$buff[0]=$_SESSION['id'];
$buff[1]=$_SESSION['newtime'];
echo json_encode($buff);
