<?php
$post = $_POST;
if(!isset($post['login_reg'])) {echo "Вы не ввели логин"; return;}
if(!isset($post['mail_reg'])) {echo "Вы не ввели почту"; return;}
if(!isset($post['passw_reg'])) {echo "Вы не ввели пароль"; return;}
if($post['passw_regpovt'] != $post['passw_reg']) {echo "Введенные пароли не совпадают"; return;}

$handle = fopen("base.txt", "r");
while (!feof($handle)) {
    $buffer = fgets($handle, 4096);
    $massivatt = unserialize($buffer);
    if($post['login_reg'] === $massivatt['login'])
    {echo "такой логин уже есть"; return;}
}




$arr_reg = ['login' => $post['login_reg'], 'mail' => $post['mail_reg'], 'passw' => password_hash($post['passw_reg'], PASSWORD_DEFAULT)];
$arr_reg = serialize($arr_reg);
file_put_contents('base.txt',$arr_reg.PHP_EOL, FILE_APPEND);
echo "Вы успешно зарегистрированы!";