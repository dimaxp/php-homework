<?php
$post = $_POST;
if(!isset($post['login_reg'])) {echo "Вы не ввели логин"; return;}
if(!isset($post['mail_reg'])) {echo "Вы не ввели почту"; return;}
if(!isset($post['passw_reg'])) {echo "Вы не ввели пароль"; return;}
if($post['passw_regpovt'] != $post['passw_reg']) {echo "Введенные пароли не совпадают"; return;}

$arr_reg = ['login' => $post['login_reg'], 'mail' => $post['mail_reg'], 'passw' => $post['passw_reg']];
$arr_reg = serialize($arr_reg);
file_put_contents('base.txt',$arr_reg.PHP_EOL, FILE_APPEND);